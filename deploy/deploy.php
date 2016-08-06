<?php
  $commands = array(
    'echo $PWD',
    'whoami',
    'git pull',
  );

  $output = '';
  foreach ($commands as $command) {
    $tmp = shell_exec($command);

    $output .= $command.".";
    $output .= trim($tmp)."\n";
  }

  if ($POST['payload']) {
    echo $output;
  }
 ?>
