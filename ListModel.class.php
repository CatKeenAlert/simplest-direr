<?php
//这是列出当前目录简单情况的php文件,后续可把TA做成类，如同其文件名一样。
$files_names = scandir($abs_current_dir);
//var_dump($files_names);
//获取也就是扫描文件夹内的文件及文件夹名存入数组 $files_names
foreach ($files_names as $name) {
//echo $name;
//echo $url_current_dir;
$current_dir_file_url= $url_current_dir .'/'.$name;
//echo $current_dir_file_url.'<br>';
$file_a_element = "<a style='text-decoration:none;' href=$current_dir_file_url>".$name."</a>";
echo $file_a_element."<br/>";
}
echo "<br>------------以上是的php文件的输出--------------<br>";
?>