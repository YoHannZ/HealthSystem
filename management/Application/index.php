<?php 

//模式由生产模式变为开发模式
define("APP_DEBUG",true);

//定义前台CSS、JS、img的路径常量
define("SITE_URL", "http://10.77.117.237:88");
define("CSS_URL", SITE_URL . "/healthSystem/Application/Public/Home/css/");
define("IMAGES_URL", SITE_URL . "/healthSystem/Application/Public/Home/images/");
define("JS_URL", SITE_URL . "/healthSystem/Application/Public/Home/js/");

//定义后台界面CSS，image,js路径
define("ADMIN_CSS_URL", SITE_URL . "/healthSystem/Application/Public/Admin/css/");
define("ADMIN_IMAGES_URL", SITE_URL . "/healthSystem/Application/Public/Admin/images/");
define("ADMIN_JS_URL", SITE_URL . "/healthSystem/Application/Public/Admin/js/");
require '../ThinkPHP/ThinkPHP.php';
 ?>