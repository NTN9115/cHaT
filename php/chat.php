<?php

$chatFile = fopen("chatFile.txt","a+");
$text = "balablal\n"
fwrite($chatFile,$text);
fclose($chatFile);

 ?>
