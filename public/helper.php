<?php
define('IS_POST',$_SERVER['REQUEST_METHOD']=='POST'? true:false);
//如果p函数不存在，就定义一个p函数
if(!function_exists('p')){
    function p($var){
        echo '<pre style="background:#ccc;padding: 10px;border-radius: 4px">' . print_r($var,true) . '</pre>';
    }
}