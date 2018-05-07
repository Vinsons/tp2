<?php
// 绑定模块，并自动生成相应的控制器文件
header('Content-type:text/html;charset=utf-8');
define('BIND_MODULE','Admin');
define('BUILD_CONTROLLER_LIST','Index,User,Menu,Login,Banner,Bottom,Jobs,ArticleBottom,Jobs,Article,Address,Context');
define('APP_DEBUG',True);
define('APP_PATH','./Application/');
define('BUILD_DIR_SECURE', false);
require './ThinkPHP/ThinkPHP.php';
?>