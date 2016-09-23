<?php
$usrnop = $_SERVER['HTTP_HOST'];
$host_url = 'http://'.$_SERVER['HTTP_HOST'];
//echo '当前主机是： '.$host.'<br>';
$APP_URL = $host_url.'/direr';
//$root = $_SERVER['DOCUMENT_ROOT'];
//echo __FILE__;
echo '<br>';
echo '当前目录是： '.$abs_current_dir.'<br>';
$length = strlen($root);
$current_dir_in_root = substr($abs_current_dir, $length);
echo '当前目录在网站根目录中的目录： '.$current_dir_in_root;
echo '<br>';
//echo $APP_PATH."/ListModel.class.php";
echo '当前项目目录是： '.$APP_PATH;
$url_current_dir = $host_url.$current_dir_in_root;
echo '<br>';
echo '当前目录对应的URL是： '.$url_current_dir;
echo '当前项目目录是： '.$APP_PATH;
//echo '$APP_PATH';
echo '以下是目录下的内容列表： <br>';
echo "<br>--------------------------<br>";
include $APP_PATH."/ListModel.class.php";
?>