<?php

$id=$_POST["id"];
if(!is_dir("/home/www/file/rep/$id")){echo "ID not found\n"; exit(1);}
$nn=$_POST["name"];
$tt=$nn.".".$_POST["date"];
if(!file_exists("/home/www/file/rep/$id/_old_/$tt")){echo "File not found\n"; exit(1);}
header('Content-type: application/octet-stream');
header('Content-disposition: attachment;filename="'.$tt.'"');
readfile("/home/www/file/rep/$id/_old_/$tt");
echo "File $tt downloaded\n";

?>
