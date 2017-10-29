<?php
namespace app\admin\controller;

use app\common\model\Users;
use think\Controller;
use think\Session;

class Login extends Controller
{
    /**
     * 登录
     * @return \think\response\View
     */
    public function index(){
//        如果用户点击登陆
        if(IS_POST){
//            接收过滤之后的数据
            $post = input('post.');
            $user = Users::where('username','=',$post['username'])->where('is_admin','=',1)->find();
//            $user['password']注意这里是[],不要写成了是（），否则会报错：Function name must be a string
            if(!$user || $user['password']!=md5($post['password'])){
                $this->error('用户名或者密码错误');
            }else{
                Session::set('user',$user->toArray());
                $this->success('登陆成功','/admin/index');
            }
        }
        return view();
    }

    /**
     * 退出
     */
    public function logout(){
//        清除当前请求有效的session
        Session::delete('user');
//        成功提示，跳转到登陆页面
        $this->success('退出成功','/admin/login');
    }


}