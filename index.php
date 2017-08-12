<?php
   header("Content-type:text/html;charset=utf-8");

    $path = '';

    if(array_key_exists('PATH_INFO',$_SERVER)){
        $path = $_SERVER['PATH_INFO'];
        $path = substr($path,1);
        $pathArr = explode('/',$path);
        if(count($pathArr) == 1){
            $path = '/views/dashboard/'.$path;
        }else if(count($pathArr) == 2){
            $path = '/views/'.$path;
        }
    }else{
        $path = 'views/dashboard/index';
    }



   include $path.'.html';
?>