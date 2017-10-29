<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 17:53
 */

namespace app\common\validate;


use think\Validate;

class Category extends Validate
{
//表单验证
    protected $rule=[
        'name'=>'require|max:15'
    ];


    protected $message = [
      'name.require' => '栏目名称必填',
        'name.max'=>'栏目名称不能超过15个字符'
    ];

//    验证场景
protected $scene = [
    'save' => ['name'],
    'update' => ['name'],
];


}