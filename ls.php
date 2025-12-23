<?php

$id=$_POST["id"];
if(!is_dir("/home/www/file/rep/$id")){echo "ID not found\n"; exit(1);}
$ff=scandir("/home/www/file/rep/$id");
foreach($ff as $k => $v){
  if($v=="." || $v==".." || $v=="_old_")continue;
  printf("%s %ld\n",$v,filesize("/home/www/file/rep/$id/$v"));
}

?>
