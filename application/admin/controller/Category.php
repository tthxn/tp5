<?php

namespace app\admin\controller;

use houdunwang\arr\Arr;
use think\Controller;
use think\Request;
use app\common\model\Category as CategoryModel;

class Category extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $data = CategoryModel::all();
        $data = Arr::tree($data,'name','id','pid');
        return view('',compact('data'));
    }

    /**
     * 显示创建资源表单页.栏目添加，$data这里用于显示’所属栏目‘分配数据使用
     *
     * @return \think\Response
     */
    public function create()
    {
        $dataArr = CategoryModel::all();
//        p(json_decode($dataArr[0]));
//        p($dataArr);exit;

        $data = Arr::tree($dataArr,'name','id','pid');
        return view('',compact('data'));
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
//        p($request->post());exit;
        $cate = $request->post();
        $pid = $cate['pid'];
        $arr = $cate['name'];
//        p($arr);exit;
//        栏目批量添加
        foreach($arr as $v){
            $model = new CategoryModel();
            $data = [
                'pid'=>$pid,
                'name'=>$v
            ];
            //调用验证器来验证
            $result = $model->validate(true)->save($data);
            if(false === $result){
                $this->error($model->getError());
            }
        }



        $this->success('添加成功','/admin/category/create');
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 编辑
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        $dataArr = db('category')->select();
//        p(json_decode($dataArr[0]));
//            halt($dataArr);
//        p($dataArr);
//        在编辑的时候，显示下拉列表，所属栏目要去掉自己和自己的子栏目
        $data = Arr::tree($dataArr,'name','id','pid');
        foreach ( $data as $k => $v ) {
            //如果是自己的子栏目不能被选择
            if ( Arr::isChild( $data, $v['id'], $id, 'id', 'pid' ) ) {
                $data[ $k ]['_disabled'] = 'disabled';
            } else {
                //如果是自己也不能被选择
                $data[ $k ]['_disabled'] = $v['id'] == $id ? 'disabled' : '';
            }
        }
//        p($data);exit;
        //获得旧数据
        $oldData = CategoryModel::find( $id );
        return view( '', compact( 'data', 'oldData' ) );
    }

    /**
     * 编辑页面的修改与保存
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
//        p($request->post());
        $model = CategoryModel::find($id);
        //调用验证器来验证
        $result = $model->validate(true)->save($request->post());
        if(false === $result){
            $this->error($model->getError());
        }

        $this->success('保存成功','/admin/category');
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
//        判断如果有子栏目，就返回错误信息，删除失败
        if(CategoryModel::where('pid',$id)->find()){
            $this->error('该栏目下有子栏目，不可以删除','',0);
        }

//        判断该栏目下面是否有商品，如果有，就删除失败
        if(\app\common\model\Goods::where('category_id',$id)->find()){
            $this->error('该栏目下有商品，不可以删除','',0);
        }
//        p($id);exit;
        CategoryModel::destroy($id);
//        return ['msg'=>'删除成功'];
//        $this->success('删除成功','/admin/category');
    }
}
