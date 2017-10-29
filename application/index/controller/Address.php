<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/25
 * Time: 10:16
 */

namespace app\index\controller;
use app\common\model\Address as AddressModel;

class Address extends Common
{
    public function index(){
//        echo 111;exit;
//        p($_POST);exit;
//        如果用户设置了默认，就修改表中同一个用户的地址默认的值
        if($_POST['is_default']==1){
            $aa = AddressModel::where('users_id',$_POST['users_id'])->where('is_default',$_POST['is_default'])->select();
            foreach($aa as $v){
                $v['is_default']=0;
                $v->save();
            }
        }
        $address = new AddressModel();
        $address->save($_POST);
        $post = $_POST;
//        一般用echo json_encode()返回ajax发送过来的内容,
//think框架中还可以用return ['code'=>200]的形式（thinkphp框架做过处理）
        return ['code'=>200,'msg'=>$post];
    }
}