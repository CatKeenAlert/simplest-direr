<?php
//这是列出当前目录简单情况的php文件,后续可把TA做成类，如同其文件名一样。
$files_names = scandir($current_dir);
//获取也就是扫描文件夹内的文件及文件夹名存入数组 $files_names
//print_r ($files_names);
foreach ($files_names as $name) {
//echo $name;
$current_dir_file_url= $APP_URL."/".$name;
//echo $current_dir_file_url.'<br>';
$file_a_element = "<a style='text-decoration:none;' href=$current_dir_file_url>".$name."</a>";
echo $file_a_element."<br/>";
}
?>