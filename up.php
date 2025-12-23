<?php

$id=$_POST["id"];
if(!is_dir("/home/www/file/rep/$id")){echo "ID not found\n"; exit(1);}
foreach($_FILES as $k => $v){
  if(file_exists("/home/www/file/rep/$id/$k")){
    $tt=$k.".".date("YmdHis");
    rename("/home/www/file/rep/$id/$k","/home/www/file/rep/$id/_old_/$tt");
  }
  move_uploaded_file($v["tmp_name"],"/home/www/file/rep/$id/$k");
  echo "File $k uploaded\n";
}

?>
