<?php

namespace app\common\model;

use think\Model;

class Goods extends Model
{
    public function category(){
//        反向关联，从goods和category是多对一的关系，注意：关联表的操作，一定要走模型调用数据
//        如：Category::all(),不要直接走数据库Db::table('category')->select()否则会出现问题
        return $this->belongsTo(Category::class);
    }
}
