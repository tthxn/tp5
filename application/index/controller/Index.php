<?php
namespace app\index\controller;

use app\common\model\Category;
use app\common\model\Goods;
use app\common\model\Goodslist;
use function PHPSTORM_META\type;
use think\Cache;
use think\Db;

class Index
{
    /**
     * 首页
     * @return \think\response\View
     */
    public function index()
    {
        $category = Db::table('category')->where('pid',0)->where('id','>',1)->select();
        $news = Goods::where('isnew',1)->limit(4)->select();
        $commend = Goods::where('iscommend',1)->limit(4)->select();
        $commend1 = Goods::where('iscommend',1)->limit(3)->order('id desc')->select();
        $more = Goods::limit(12)->order("create_time desc")->select();

//        p($goods);exit;
//        p($category);exit;
        return view('',compact('category','news','commend','commend1','more'));
    }

    /**
     * 商品列表
     * @param $id
     * @return \think\response\View
     */
    public function lists($id){
//        p($id);exit;
//        显示导航
        $category = Db::table('category')->where('pid',0)->where('id','>',1)->select();
//显示当前栏目位置

//        获取缓存数据，如果没有name的数据，就从数据库中读取数据，设置一下缓存，存入name中，返回$name
//        这里用到了File缓存，文件缓存目录在runtime中，如果想从新设置缓存，需要将runtime中cache目录删除即可
        $name = \cache('name');  // 获取缓存的name数据
        if(!$name){
//            echo 11111111;走到这一步，说明需要读取数据库了，重新设置缓存
            $name1=  Db::table('category')->find($id);
            $name = \cache('name',$name1);
        }


        //        获取当前id商品信息
        $goodsInfo = Goods::where('category_id',$id)->select();

        return view('',compact('category','name','goodsInfo'));
    }

    /**
     * 商品详细内容页
     */
    public function content($id){
        $category = Db::table('category')->where('pid',0)->where('id','>',1)->select();

//        根据$id找到商品
        $goods = Db::table('goods')->find($id);

        $arr = json_decode($goods['content_images'],true);
        $cate = Db::table('category')->where('id',$goods['category_id'])->find();
//        找到商品属性
        $goodslist = Db::table('goodslist')->where('goods_id',$id)->select();
//        查询商品数据，用于导航栏的选中效果的判断
        $goo = Db::table('goods')->select();

        return view('',compact('category','goo','goods','goodslist','cate','arr'));
    }


}
