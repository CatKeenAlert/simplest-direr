<?php
echo '<br>以下是目录下的内容列表： <br>';
//这是列出当前目录简单情况的php文件,后续可把TA做成类，如同其文件名一样。
print <<<TABLE
    <table> <thead> <tr>
<th>文件名</th>
<th>文件大小</th>
<th>创建时间</th>
<th>上次修改时间</th>
<th>上次访问时间</th>
</tr>
<tr>
TABLE;
$arr_files_names = scandir($abs_current_dir);
foreach ($arr_files_names as $name)
{
    call_user_func('table_print', $name);
}
echo '</thead></table>';
echo "------------以上是最后的php文件的输出--------------<br>";

function table_print($filename)
{
    $arr_stat = stat($filename);
    //var_dump($arr_stat);
    $current_dir_file_url= $current_dir_mid.'/'.$filename;
    $a_element_string = "<a style='text-decoration:none;' href=$current_dir_file_url>".$filename."</a>";
    echo   '<td>'.$a_element_string.'</td>';
    echo   '<td>'.$arr_stat['size'].'</td>';
    echo   '<td>'.$arr_stat['ctime'].'</td>';
    echo   '<td>'.$arr_stat['mtime'].'</td>';
    echo   '<td>'.$arr_stat['atime'].'</td>';
    echo '</tr>';
}
