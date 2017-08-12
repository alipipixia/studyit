<?php
   header("Content-type:text/html;charset=utf-8");

    $path = '';

    if(array_key_exists('PATH_INFO',$_SERVER)){
        $path = $_SERVER['PATH_INFO'];
        $path = substr($path,1);
        $pathArr = explode('/',$path);
        $length = count($pathArr);
        if(count($pathArr)<3){
                $path = 'views/dashboard/'.$pathArr[$length-1];
            }else{
                $path = $_SERVER['PATH_INFO'];
            }
    }else{
        $path = 'views/dashboard/index';
    }



   include $path.'.html';
?>