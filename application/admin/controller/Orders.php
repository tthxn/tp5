<?php

namespace app\admin\controller;

use app\common\model\Orders as OrdersModel;
use app\common\model\Orderslist;
use think\Controller;
use think\Db;
use think\Request;
use app\common\model\Goods;
class Orders extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $orders = OrdersModel::select();
//        p($orders);
        return view('',compact('orders'));
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
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
//        echo 111;
        $total = OrdersModel::get($id);
        $lists = Orderslist::where('order_id',$id)->select();

        foreach ($lists as $v){
//            $goods[$v['id']] = Goods::where('id',$v['goods_id'])->select();
            $goods[$v['id']] = Db::table('goods')->where('id',$v['goods_id'])->select();
        }
//        p($goods);exit;
        return view('',compact('lists','goods','total'));
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
//        从orders表中获取旧数据
        $oldData = OrdersModel::find($id);
        return view('',compact('oldData'));
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
//        p($request->post());exit;
//        p($request->post('order_status'));exit;
        $order = new OrdersModel();

// post数组中只有name和email字段会写入
        $order->allowField(['receive_name','receive_tel','receive_address','order_status','logistics'])->save($_POST, ['id' => $id]);
        $this->success('保存成功',url('/admin/orders'));
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
        OrdersModel::destroy($id);
//        return ['删除成功'];
    }

    /**
     * 发货
     */
    public function sen($id){
//        echo 111;
//        查询数据库，看是否有付款，如果没有付款，返回代码0
        $arr = Db::table('orders')->find($id);
//        p($arr);
        if($arr['order_status']=='未支付'){
            return ['code'=>0,'msg'=>'未支付'];
        }else{
            Db::table('orders')->where('id',$id)->setField('logistics', '已发货');
            return ['code'=>200,'msg'=>'成功'];
        }
    }
}
