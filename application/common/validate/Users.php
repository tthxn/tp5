<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 1:32
 */

namespace app\common\validate;


use think\Validate;

class Users extends Validate
{
//表单验证
    protected $rule = [
        'username'=>'require|max:18|unique:users',
        'password'=>'require',
    ];
    protected $message = [
        'username.require' => '用户名必填',
        'username.max'=>'用户名不能超过18个字符',
        'username.unique'=>'用户名不能重复',
        'password.require'=>'密码必须填写',
    ];
    protected $scene = [
        'save' => ['username'],
        'update' => ['username'],
    ];
}