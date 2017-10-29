<?php

namespace app\index\controller;

use app\common\model\Goods;
use app\common\model\Orders;
use app\common\model\Orderslist;
use think\Controller;
use think\Db;
use think\Request;

class Myorder extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
//        导航栏分配数据
        $category = Db::table('category')->where('pid',0)->where('id','>',1)->select();

//        从数据表中查询数据，分配我的订单
        $arr = Orders::where('users_id',session('user.id'))->select();
      //p($arr);exit;
        foreach ($arr as $k=>$v){
            $orderslist[$v['id']] = Orderslist::where('order_id',$v['id'])->select();
//            $ts= $v->create_time;
        }
//        p($ts);exit;
        $goods = Db::table('goods')->select();
        $sql = 'select a.id,c.list_image,b.order_id,c.name,c.id as gid from orders a,orderslist b,goods c where b.goods_id=c.id and a.id=b.order_id';
       $aa =  Db::query($sql);
//        p($aa);exit;
//        p($goods);exit;
//        p($arr);exit;
//        p($orderslist);exit;
        return view('',compact('category','arr','orderslist','goods','aa'));
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        $category = Db::table('category')->where('pid',0)->where('id','>',1)->select();

//                echo 111;exit;
        $total = Orders::get($id);
        $lists = Orderslist::where('order_id',$id)->select();

        foreach ($lists as $v){
//            $goods[$v['id']] = Goods::where('id',$v['goods_id'])->select();
            $goods[$v['id']] = Db::table('goods')->where('id',$v['goods_id'])->select();
        }
//        p($goods);exit;
        return view('',compact('lists','goods','total','category'));
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
//        echo 11;
//        先删除orderslist表中的数据
        Orderslist::where('order_id',$id)->delete();
        Orders::destroy($id);
//        return ['删除成功'];
    }
}
