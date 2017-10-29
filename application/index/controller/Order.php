<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/24
 * Time: 23:16
 */

namespace app\index\controller;

use app\common\model\Goods;
use app\common\model\Goodslist;
use app\common\model\Orders;
use app\common\model\Orderslist;
use helper\Cart;
use think\Controller;
use think\Db;
use think\Session;
use app\common\model\Address;
class Order extends Controller
{

//    从商品页面直接立即购买
    public function index($id,$number,$attr){
//        p($_POST);exit;
//        p($number);exit;
//        如果没有登录，就去跳转到登陆页面
        if(!Session::get('user')){
//            p($_SERVER['HTTP_REFERER']);exit;//获取当前的地址
//            将当前地址存入session中,之后跳转到登陆页面上
           Session::set('url',$_SERVER["HTTP_REFERER"]);
//          重定向到登陆
            $this->redirect('/index/login');
        }
        $category = Db::table('category')->where('pid',0)->where('id','>',1)->select();

        $goodsInfo = Goods::where('id',$id)->find();
        $att = Goodslist::where('id',$attr)->find();
        $totalPrice = $goodsInfo['price']*$number;
//        p($price);exit;
//        p($goodsInfo);exit;
        $gInfo = [
            'gid'=>$goodsInfo['id'],
            'image'=>$goodsInfo['list_image'],
            'title'=>$goodsInfo['name'],
            'aid'=>$att['id'],
            'attr'=>$att['attr'],
            'price'=>$goodsInfo['price'],
            'number'=>$number,
            'totalPrice'=>$totalPrice,
        ];
//        查询地址表的数据
        $add = Address::where('users_id',session('user.id'))->where('is_default',1)->find();
        if($add){
            $address=$add;
        }else{
            $address=Address::where('users_id',session('user.id'))->find();
        }
//        p($address);exit;
        $changeAdd = Address::where('users_id',session('user.id'))->select();
        return view('',compact('category','gInfo','address','changeAdd'));
    }

//    从购物车页面购买
    public function cartorder(){
//        echo 111;exit;
//        如果没有登录，就去跳转到登陆页面
        if(!Session::get('user')){
//            将当前地址存入session中,之后跳转到登陆页面上
            Session::set('url',$_SERVER["HTTP_REFERER"]);
//            重定向到登陆
            $this->redirect('/index/login');
        }
        $category = Db::table('category')->where('pid',0)->where('id','>',1)->select();

//        查询购物车
        $cartData= session('cart');
//        p($cartData);exit;

//        p($orderId);exit;

//        查询地址表的数据
        $add = Address::where('users_id',session('user.id'))->where('is_default',1)->find();
        if($add){
            $address=$add;
        }else{
            $address=Address::where('users_id',session('user.id'))->find();
        }
        $changeAdd = Address::where('users_id',session('user.id'))->select();
        return view('',compact('category','cartData','address','changeAdd'));
    }


//    去付款
    public function order($id=0,$aid=0){
//        分配导航栏的变量
        $category = Db::table('category')->where('pid',0)->where('id','>',1)->select();

//        确定是否登录，没有登录就去登录
        if(!Session::get('user')){

//            重定向到登陆
            $this->redirect('/index/login',url());
        }
//        p($_POST);exit;

//        生成订单编号
        $order = new Cart();
        $orderId = $order->getOrderId();
//        p($orderId);exit;orderId是字符串类型
//        获取当前订单时间
        date_default_timezone_set('PRC');
        $orderTime = date('Y-m-d H:i:s');

//        根据传入数据，找到收件人信息,将他们拆分成数组
        $info = $_POST['addarr'];
        $arr = explode('/',$info);
//        p($arr);exit;
//        Array
//        (
//            [0] => 王晓燕                        //收件人姓名
//            [1] => 2147483647                     //收件人电话
//            [2] => 北京市北京市东城区东大街12号      //收件地址
//        )



        if(!is_array($_POST['remarks'])){
            //        组合插入orders数据表的数据
            //            订单总额
            $g = Goods::find($id);
            $attr = Goodslist::find($aid);
            $total = intval($_POST['num'])*$g['price'];
            $data1 = [
                'order_number'=>$orderId,
                'users_id'=>session('user.id'),
                'order_time'=>$orderTime,
                'receive_name'=>$arr[0],
                'receive_tel'=>$arr[1],
                'receive_address'=>$arr[2],
                'address_id'=>$_POST['address_id'],
                'total'=>$total,
                'order_status'=>'未支付',
                'logistics'=>'待发货'
            ];
//        将数据插入订单表：订单号order_number，下单人users_id,下单时间order_time ，收货人receive_name，收货电话receive_tel，收货地址receive_address，
            $orders = new Orders();
            $orders->save($data1);
//        获取当前添加订单的订单id
            $oid = $orders['id'];

            $orderslist = new Orderslist();

            $data2 = [
                'order_id'=>$oid,
                'number'=>$_POST['num'],
                'subtotal'=>$total,
                'remark'=>$_POST['remarks'],
                'goods_id'=>$id,
                'goods_attr'=>$attr['attr'],
            ];
            $orderslist->save($data2);

        }else{
//        组合插入orders数据表的数据
//        读取购物车中的数据(因为前台数据都是从sesion中获取的)
            $carts = session('cart');
            $totalPrice=0;
            foreach($carts['goods'] as $k=>$v){
                foreach($_POST['remarks'] as $key=>$value){
                    if($k==$key){
                        $totalPrice += $v['total'];
                    }
                }
            }
            $data1 = [
                'order_number'=>$orderId,
                'users_id'=>session('user.id'),
                'order_time'=>$orderTime,
                'receive_name'=>$arr[0],
                'receive_tel'=>$arr[1],
                'receive_address'=>$arr[2],
                'address_id'=>$_POST['address_id'],
                'total'=>$totalPrice,
                'order_status'=>'未支付',
                'logistics'=>'待发货'
            ];
//        将数据插入订单表：订单号order_number，下单人users_id,下单时间order_time ，收货人receive_name，收货电话receive_tel，收货地址receive_address，
            $orders = new Orders();
            $orders->save($data1);
//        获取当前添加订单的订单id
            $oid = $orders['id'];
            //        组合插入orderslist表中的数据
            foreach($carts['goods'] as $k=>$v){
                $orderslist = new Orderslist();
                foreach($_POST['remarks'] as $key=>$value){
                    if($k==$key){
                        $aa = $value;
                    }
                }

//        将数据插入订单列表：所属订单号：order_id,数量number，小计subtotal，备注remark，商品id  goods_id,商品属性id attr_id

                $data2 = [
                    'order_id'=>$oid,
                    'number'=>$v['num'],
                    'subtotal'=>$v['total'],
                    'remark'=>$aa,
                    'goods_id'=>$v['id'],
                    'goods_attr'=>$v['options']['attr']
                ];
                $orderslist->save($data2);

//                清除购物车中这条商品的信息
//                foreach($_POST['remarks'] as $k=>$v){
//                    $c = new Cart();
//                    $c->del($k);
//                }
            }
            //        订单总额
            $total = $carts['total'];
        }


        return view('',compact('orderId','total','category'));


    }

}