<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 15:55
 */

namespace app\index\controller;


use think\Controller;
use think\Session;

class Common extends Controller
{
    /**
     * tp框架提供的初始化函数
     */
    public function _initialize()
    {
//        如果没有登录，或者不是后台管理员用户，就去跳转到登陆页面
        if(!Session::get('user')){
//            重定向到登陆
            $this->redirect('/index/login');
        }
    }
}