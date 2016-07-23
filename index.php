<?php

    if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
    define('HTML_CACHE_ON',false); // 关闭静态缓存
    define('APP_DEBUG',false);
    define('BIND_MODULE','Home');
    //define('BUILD_MODEL_LIST','User,Menu');
    define('APP_PATH','./admin/');
    //define('THINK_PATH','./ThinkPHP_3.2/');
    require './ThinkPHP_3.2/ThinkPHP.php';  //引入核心文件 2016.07.23
    
?>