<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/28
 * Time: 11:25
 */

namespace app\index\controller;


use app\common\model\Goods;
use think\Db;

class Search
{
    /**
     * 搜索
     * @param $words
     * @return \think\response\View
     */
    public function index($words=''){
        $category = Db::table('category')->where('pid',0)->where('id','>',1)->select();
        if($words==''){
            $searchGoods = [];
            return view('',compact('category','searchGoods'));
        }
//        p($words);exit;
        $searchGoods = Db::table('goods')->where('name','like','%'.$words.'%')->select();
//        p($searchGoods);exit;
        return view('',compact('searchGoods','category'));
    }
}