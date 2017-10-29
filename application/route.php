<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
//    配置资源路由
//栏目路由
Route::resource('admin/category','admin/Category');
//商品列表路由
Route::resource('admin/goods','admin/Goods');
//后台订单
Route::resource('/admin/orders','admin/Orders');
//用户注册
Route::resource('index/register','index/Register');


//列表页
Route::get('lists/[:id]','index/Index/lists'); // 定义GET请求路由规则
//商品内容页面
Route::get('content/[:id]','index/Index/content'); // 定义GET请求路由规则
//加入购物车
Route::get('addcart/[:id]','index/Mycart/addCart');//访问tthxn.com/addcart
//我的购物车列表
Route::get('/mycart/lists','index/Mycart/lists');//访问tthxn.com/mycart/lists
//删除购物车
Route::delete('/mycart/del/[:id]','index/Mycart/del');// 定义DELETE请求路由规则
//更新购物车
Route::post('/mycart/update/[:data]','index/Mycart/updateCart');// 定义PUT请求路由规则
//订单页面
Route::get('/order/[:id]/[:number]/[:attr]','index/Order/index');
//确定订单付款
Route::post('/confirm/[:id]/[:aid]','index/Order/order');
//我的订单
Route::resource('/myorder','index/Myorder');
//搜索列表
Route::get('/lis/[:words]','index/Search/index');
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],
//    'hello/[:name]' => 'index/hello',
//    '[]/[:name]' => 'index/hello',

    '[admin]'     => [
//        登陆
        '/login/' => ['admin/login/index',['method' => 'post']],
//        退出
        '/logout' => ['admin/login/logout'],
//        后台首页
        '[/index]' => ['admin/index/index'],
//        修改密码
        '/pwd/[index]' => ['admin/pwd/index'],
        '/pwd/changePwd' => ['admin/pwd/changePwd',['method' => 'post']],
    ],

//配置资源路由
//    '[hello]'     => [
////        访问的是hello控制器里，的index方法，传参id
//    ':id'   => ['admin/hello/index', ['method' => 'get'], ['id' => '\d+']],
////        访问的是hello控制器里的hh方法，可以传参，也可以不传参数name（）
//    '[:name]' => ['admin/hello/hh', ['method' => 'get']],
//    ],


];
