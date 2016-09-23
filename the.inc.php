<?php
//<<<------这些是可重用的常量配置代码
$usrnop = $_SERVER['HTTP_HOST'];
$host_url = 'http://'.$_SERVER['HTTP_HOST'];
//echo '当前主机是： '.$host.'<br>';
$APP_URL = $host_url.'/direr';
$APP_PATH = '/var/www/share.com/download.share.com/direr';
echo '当前目录是： '.$APP_PATH.'<br>';
//echo __FILE__;
$current_dir = dirname(__FILE__);
//echo $APP_PATH."/list.class.php";
include $APP_PATH."/list.class.php";
//------这些是可重用的常量配置代码
?>