<?php

$id=$_POST["id"];
if(!is_dir("/home/www/file/rep/$id")){echo "ID not found\n"; exit(1);}
$nn=$_POST["name"];
$tt=$nn.".".date("YmdHis");
rename("/home/www/file/rep/$id/$nn","/home/www/file/rep/$id/_old_/$tt");
echo "File $nn deleted\n";

?>
