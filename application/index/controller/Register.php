<?php

namespace app\index\controller;


use app\common\model\Users;
use think\Controller;
use think\Request;
use think\Db;
class register extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $category = Db::table('category')->where('pid',0)->where('id','>',1)->select();
        return view('',compact('category'));
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
//        p($request->post());exit;
//        p($request->post('name'));
        if (IS_POST) {
            $post = $request->post();
            if($post['name']==null) {
                $this->error('用户名不可以是空');
            }


            if(md5($request->post('pwd'))!=md5($request->post('pwd2'))){
                $this->error('两次密码不一致，请重新填写');
            }

            $model = new Users();

            $data = [
                'username' => $post['name'],
                'password' => md5($post['pwd'])
            ];
            //调用验证器来验证
            $result = $model->validate(true)->save($data);
            if (false === $result) {
                $this->error($model->getError());
            }
            $this->success('注册成功', '/index/index');
        }
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
        //
    }
}
