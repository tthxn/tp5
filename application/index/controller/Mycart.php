<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 22:32
 */

namespace app\index\controller;


use app\common\model\Goods;
use app\common\model\Goodslist;
use helper\Cart;
use think\Controller;
use think\Db;

/**
 * 购物车
 * 注意：thinkphp框架中命名控制器不要命名成驼峰样子，否则容易出现问题
 * Class Mycart
 * @package app\index\controller
 */
class Mycart extends Controller
{


    /**
     * 加入购物车,发送方式是get，异步地址是thin.com/addcart/ （有配置路由）
     */
    public function addCart(){
//        echo 111;exit;
//        p($_GET['page']);exit;
//        接收到的数据是：2/2/1   商品id/商品属性id/数量
        $arr = explode('/',$_GET['page']);
//        p($arr);exit;
//在控制台查看发现如下数据(记得p的时候要exit;掉)
//        Array
//        (
//            [0] => 2
//            [1] => 2
//            [2] => 1
//        )
//       不可以在前台直接抓取价格，不安全
        $goods = Goods::find($arr[0]);
//        p($goods);exit;
        $attr=Goodslist::find($arr[1]);
//        组合字符串，用于购物车数据调用
        $data = [
            'id'    => $goods['id'],   //商品id
            'name'  => $goods['name'],      //商品名称
            'main_image'=>$goods['list_image'],//商品图片
            'num'  =>$arr[2],           //商品数量
            'price'=>$goods['price'],       //商品价格
            'options' =>[               //其他参数，颜色等可以是数组或字符串|可以不添加
                'attr' => $attr['attr']
            ]
        ];

//        p($data);exit;

        $cart = new Cart();
        $cart->add($data);
        $a = session('cart');
        $num = count($a['goods']);
//        p($num);exit;
        return ['number'=>$num];
    }

    /**
     * 新建一个方法，在地址栏输入think.com/index/mycart/aaa可以查看购物车信息
     */
//    public function aaa(){
//        p(session('cart'));
//    }


    /**
     * 我的购物车列表,think.com/mycart/lists
     */
    public function lists(){
        $category = Db::table('category')->where('pid',0)->where('id','>',1)->select();
        $da = session('cart');
        $num = count($da['goods']);
        $data = $da['goods'];
//        p(array_keys($data));exit;
        return view('',compact('category','data','da','num'));
    }

    /**
     * 更新购物车
     */
    public function updateCart() {
//        p($_POST['page']);exit;在控制台查看
//        $data = [
//            "sid" => 'b985f31b',               //商品的唯一SID，不是商品的ID
//            "num" => 1,                       //商品数量
//        ];
        $arr = explode('/',$_POST['page']);
        $data = [
            "sid" => $arr[1],//商品的唯一SID，不是商品的ID
            'num' => $arr[0] //商品数量
        ];
//        p($data);exit;
        $cart = new Cart();
        $cart->update($data);

//        获取购物车中的数据
        $da = session('cart');
//        p($da);exit;从控制台看，记得前台异步的地方要console.log(response)
//        获取某一个商品的信息
        $re = $da['goods'][$arr[1]];
//        p($tol);exit;


//        p($re);
//        think框架中有对return做处理，会自动将数组转化成json格式，此时return或者echo都是可以的
//        如果是原生发送异步过来，不走框架，或者框架没有进行处理，此时需要用echo返回异步，（一般异步都是echo返回数据）
//        echo json_encode($array,XXXX),echo出的是json，这里数组是return出来的，是thinkphp做过处理
        return ['smallPrice'=>$re['total'],'totalPrice'=>$da['total']];

    }

    /**
     * 删除购物车,如：think.com/mycart/del/48b371c4
     */
    public function del($id){
//        echo 111;exit;
        $cart = new Cart();
        $cart->del($id);
//        $this->success('删除成功','/');
//        获取购物 车中的信息
        $da = session('cart');
//        p($da);exit;
        return ['totalPrice'=>$da['total'],'goodsNum'=>$da['total_rows']];
    }


}