<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Session;

class Common extends Controller
{
    /**
     * tp框架提供的初始化函数
     */
    public function _initialize()
    {
//        如果没有登录，或者不是后台管理员用户，就去跳转到登陆页面
        if(!Session::get('user') || !Session::get('user.is_admin')){
//            重定向到登陆
            $this->redirect('/admin/login');
        }
    }




//    文件上传
    public function upload(Request $request){
            // 获取表单上传文件 例如上传了001.jpg
            $file = request()->file('file');

            if($file){
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads'.DS.'main');
//                p($info);


                if($info){
                    $json = json_encode(['valid'=>1,'message'=>'/uploads/main/'.$info->getSaveName()]);
//                     成功上传后 获取上传信息
//                     输出 jpg
//                    echo $info->getExtension();
//                     输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
//                    echo $info->getSaveName();

//                     输出 42a79759f284b767dfcb2a0197904287.jpg
//                    echo $info->getFilename();
                }else{
//                    p($file->getError());exit;
//                     上传失败获取错误信息
                    $json = json_encode(['valid'=>0,'message'=>'上传失败']);
                }

            }
        exit($json);
    }


    /**
     * 获取文件列表webuploader
     *
     * @return array
     */
    public function filesLists()
    {

    }

    /**
     * 删除图片
     * delWebuploader
     *
     * @return array
     */
    public function removeImage()
    {
        $db   = Db::table('attachment');
        $file = $db->where('id', $_POST['id'])->first();
        if (is_file($file['path'])) {
            unlink($file['path']);
        }
        $db->where('id', $_POST['id'])->where('uid', v('user.info.uid'))->delete();

        return ['valid' => 1, 'message' => '删除成功'];
    }

}
