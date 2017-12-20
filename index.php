<?php

/**
 * 入口
 */
function __autoload($classname){
    //重新定义引入路径
    $fileDir ="./controller/{$classname}.class.php";
    if(is_file($fileDir)){
        include $fileDir;
    }else{
        $fileDir = "./tools/{$classname}.class.php";
        if(is_file($fileDir)){
            include $fileDir;
        }else{
            $fileDir ="./tools/smarty/{$classname}.class.php";
            include $fileDir;
        }
        
    }
}

//根目录
define("DOCUMENT_ROOT",dirname(__FILE__));


$class = isset($_GET["class"])?$_GET["class"]:"index";
$action = isset($_GET["action"])?$_GET["action"]:"index";
//分发类和方法
$object= new $class();
$object->$action();