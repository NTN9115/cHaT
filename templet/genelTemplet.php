<!--
  Useage:
    import this file,then:
      $title as page title;
      $content as page content;
 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <script src="//cdn.bootcss.com/less.js/3.0.0-pre.3/less.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">

  <title><?php echo $title ?></title>
</head>
<body>
  <?php
    echo $content;
   ?>
   <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
   <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
