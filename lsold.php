<?php

$id=$_POST["id"];
if(!is_dir("/home/www/file/rep/$id")){echo "ID not found\n"; exit(1);}
$ff=scandir("/home/www/file/rep/$id/_old_");
foreach($ff as $k => $v){
  if($v=="." || $v=="..")continue;
  printf("%s %ld\n",$v,filesize("/home/www/file/rep/$id/_old_/$v"));
}

?>
