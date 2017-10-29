<?php

namespace app\admin\controller;

use app\common\model\Goodslist;
use houdunwang\arr\Arr;
use think\Controller;
use think\Db;
use think\Request;
use app\common\model\Goods as GoodsModel;
use app\common\model\Category;
class Goods extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
//        $goods = Db::table('goods')->select()
        $goods = GoodsModel::all();

//        打印数据有哪些
//        halt($goods);
//        p($goods);exit;

        return view('', compact('goods'));
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create(Request $request)
    {
//        从数据库中category表中获取所有栏目
        $data = Db::table('category')->select();
//        p($data);
//        转换成树状结构，记得安装tree插件
        $category = Arr::tree($data, 'name', 'id', 'pid');
//        p($category);
        return view('', compact('category'));
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
//        p($request->post());
//        打印用户提交的文件，input表单中type类型为file（如，图片、文件……）
//        p(request()->file('content_images'));
//        p($_FILES);
//////////////////////////////////////////////////////////////////////
/// 表单文件上传
        // 获取表单上传文件
        $files = request()->file('content_images');
        $arr = [];
        foreach ($files as $file) {
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads' . DS . 'second');
            if ($info) {
                // 成功上传后 获取上传信息
                // 输出 jpg
//                echo $info->getExtension();
                // 输出 42a79759f284b767dfcb2a0197904287.jpg
//                echo $info->getFilename();
//                输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
//                    echo $info->getSaveName();

//                保存在数组arr中
                $arr[] = '/uploads/second/' . $info->getSaveName();
            } else {
                // 上传失败获取错误信息
//                echo $file->getError();
                $this->error('上传失败');
            }
        }
//        将多个数据同时存储在数据表的同一个字段中，需要转换成json
        $json = json_encode($arr, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
///////////////////////////////////表单图片文件上传结束//////////////////////////////////////////////////
        $goods = new GoodsModel();
        $data = [
            'name' => $request->post('name'),
            'price' => $request->post('price'),
            'content_images' => $json,
            'list_image' => $request->post('list_image'),
            'click' => $request->post('click'),
            'desc' => $request->post('desc'),
            'content' => $request->post('content'),
            'category_id' => $request->post('category_id'),
            'isnew' => $request->post('isnew'),
            'ishot' => $request->post('ishot'),
            'iscommend' => $request->post('iscommend')
        ];
        $goods->save($data);

//       获取当前添加商品的id，用于商品列表goodslist的goods_id字段的数据添加
        $gid = $goods['id'];

//        $goodslist = new Goodslist();
//        用户提交过来的数据是多条，因此需要foreach遍历
//        注意：存入数据库的时候，需要将json的是数据转换成数组
        $goodsArr = json_decode($request->post('goodslist'), true);
        foreach ($goodsArr as $v) {
//            因为是存储多条数据，因此需要将new实例化放在foreach里面，
//如果放在外面，就是保存多条，但是后来的会将原来的覆盖掉（数据库此时只有一条数据）
            $goodslist = new Goodslist();
            $list = [
                'attr' => $v['attr'],
                'inventory' => $v['inventory'],
                'goods_id' => $gid
            ];
            $goodslist->save($list);
        }

        $this->success('保存成功');

    }

    /**
     * 显示指定的资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *编辑的时候显示编辑页面
     * @param  int $id
     * @return \think\Response
     */
    public function edit($id)
    {
//        p($id);
//        获取这个id的旧数据
        $oldData = GoodsModel::find($id);

//        从数据库中获取到的$oldData['content_images']是一个字符串，需要转换成数组才可以使用
//        dump($oldData['content_images']);exit;
        $content_images = json_decode($oldData['content_images'],true);
//        p($content_images);exit;


//        所属栏目的选择
        $cate = Db::table('category')->select();
//      在编辑的时候，显示下拉列表，所属栏目要去掉自己和自己的子栏目
        $cateDate = Arr::tree($cate,'name','id','pid');
        foreach($cateDate as $k=>$v){
            //如果是自己的子栏目不能被选择
            if ( Arr::isChild( $cateDate, $v['id'], $id, 'id', 'pid' ) ) {
                $cateDate[ $k ]['_disabled'] = 'disabled';
            } else {
                //如果是自己也不能被选择
                $cateDate[ $k ]['_disabled'] = $v['id'] == $id ? 'disabled' : '';
            }
        }
//       p($oldData['content_images']) ;exit;

//        获取goodslist表中的数据，用于‘货品列表’分配数据
        $goodslist = Db::table('goodslist')->where('goods_id',$id)->select();
//        p($goodslist);exit;
//        vue中使用的数据是json格式的，因此需要将数组转换成json
        $gl = json_encode($goodslist,JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
        return view('',compact('oldData','cateDate','gl','content_images'));
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request $request
     * @param  int $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
//        p($request->post());exit;
        $post = $request->post();
//        p($post['content_images']);exit;
        if(isset($post['content_images'])){
            $arr = $post['content_images'];
        }else{
            $arr = [];
        }


//        将多个数据同时存储在数据表的同一个字段中，需要转换成json,(或者字符串)
        $json = json_encode($arr, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
///////////////////////////////////表单图片文件上传结束//////////////////////////////////////////////////
//        找到goods表中的这一条数据，进行修改
        $goods = GoodsModel::find($id);
        $data = [
            'name' => $request->post('name'),
            'price' => $request->post('price'),
            'content_images' => $json,
            'list_image' => $request->post('list_image'),
            'click' => $request->post('click'),
            'desc' => $request->post('desc'),
            'content' => $request->post('content'),
            'category_id' => $request->post('category_id'),
            'isnew' => $request->post('isnew'),
            'ishot' => $request->post('ishot'),
            'iscommend' => $request->post('iscommend')
        ];
        $goods->save($data);

//        根据传入的要修改的商品的id
//        找到goodslist中goods_id是$gid的这些数据，先删除，再重新存储
        Goodslist::where('goods_id',$id)->delete();

//        goodslist表中存储新的数据
//        $goodslist = new Goodslist();
//        用户提交过来的数据是多条，因此需要foreach遍历
//        注意：存入数据库的时候，需要将json的是数据转换成数组
        $goodsArr = json_decode($request->post('goodslist'), true);
        foreach ($goodsArr as $v) {
//            因为是存储多条数据，因此需要将new实例化放在foreach里面，
//如果放在外面，就是保存多条，但是后来的会将原来的覆盖掉（数据库此时只有一条数据）
            $goodslist = new Goodslist();
            $list = [
                'attr' => $v['attr'],
                'inventory' => $v['inventory'],
                'goods_id' => $id
            ];
            $goodslist->save($list);
        }

        $this->success('保存成功');
    }

    /**
     * 删除指定资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function delete($id)
    {
//        先将goodslist表中的数据删除
        Db::table('goodslist')->where('goods_id', $id)->delete();
//        再将goods表中的数据删除
//        Db::table('goods')->where('id',$id)->delete();
        GoodsModel::destroy($id);
    }
}
