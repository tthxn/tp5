<?php

namespace app\admin\controller;

use app\common\model\Users;
use think\Controller;
use think\Request;
use think\Session;

class Pwd extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return view();
    }

    /**
     * 修改密码
     */
    public function changePwd(Request $request){
//       p($request->post());

//        获取表中用户的信息
        $id = Session::get('user.id');
//        p($id);exit;
        $user = Users::find($id)->toArray();
//        p($user);
//        判断旧密码是否正确
//        p($request->post('old_password'));
        if($user['password'] != md5($request->post('old_password'))){
            $this->error('旧密码错误','admin/pwd/');
        }
//        新密码小于6位
        if(strlen(trim($request->post('password')))<6){
            $this->error('新密码不能小于6位','admin/pwd/');
        }
//        确认密码和新密码不匹配
        if(md5($request->post('password')) != md5($request->post('confirm_password'))){
            $this->error('两次密码不匹配','admin/pwd/');
        }

//        保存修改密码,使用update必须加上where
        Users::where('id','=',$id)->update(['password'=>md5($request->post('password'))]);
//        删除当前session
        Session::delete('user');
        $this->success('密码修改成功,请重新登录','/admin/login');
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
