<?php
  //commands to run
  $commands = array(
    'echo $PWD',
    'whoami',
    'git pull',
  );

  //run commands
  $output = '';
  foreach ($commands as $command) {
    $tmp = shell_exec($command);

    $output .= $command.":";
    $output .= trim($tmp)."\n";
  }
 echo "\n".$output;
 ?>
