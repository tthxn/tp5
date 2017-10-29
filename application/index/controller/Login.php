<?php

namespace app\index\controller;

use app\common\model\Users;
use think\Controller;
use think\Db;
use think\Request;
use think\Session;

class Login extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index(Request $request)
    {
        $category = Db::table('category')->where('pid',0)->where('id','>',1)->select();

        //        如果用户点击登陆
        if(IS_POST){
//            p($request->post());exit;
//            接收过滤之后的数据
            $post = input('post.');
            $user = Users::where('username','=',$post['username'])->find();
//            p($user);exit;
//            $user['password']注意这里是[],不要写成了是（），否则会报错：Function name must be a string
            if(!$user || $user['password']!=md5($post['password'])){
                $this->error('用户名或者密码错误');
            }else{
                $data = [
                    'id'      =>$user['id'],
                    'username'=>$user['username'],
                    'is_admin'=>$user['is_admin']
                ];
                Session::set('user',$data);
//                判断session中有没有url，如果有的话就跳转到当前这个url的页面，没有的话就跳转回首页
                if(session('url')){
                    $this->redirect(session('url'));
                }else{
                    $this->redirect('/');
                }

            }
        }

        return view('',compact('category'));

    }

//    退出登录
    public function logout(){
        Session::clear();
        return $this->success('退出成功','/');
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
