<?php
header("content-type:text/html;charset=utf-8");

// 两种模式 默认生产（线上）、开发调试模式
define("APP_DEBUG", true);
//define("APP_DEBUG", false);

//项目根目录
define('ROOT_URL', '/netdisksys/index');
//前台url
define('HOME_URL', '/netdisksys/Home');

//静态资源目录
define('PUBLIC_URL', '/netdisksys/Public/');

// 目录安全文件
define('BUILD_DIR_SECURE',true);
define('DIR_SECURE_FILENAME', 'default.html');
define('DIR_SECURE_CONTENT', 'deney Access!');

// 项目名称
define('WEB_NAME', '网盘系统');
// 项目域名
define('WEB_URL', 'http://192.168.3.122/netdisksys/');

include('../ThinkPHP/ThinkPHP.php');