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

    $output .= $command.".";
    $output .= trim($tmp)."\n";
  }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Deploy</title>
</head>
<body>
  <p>
    <?php
    //output result
    if ($POST['payload']) {
      echo $output;
    }
     ?>
  </p>
</body>
</html>
