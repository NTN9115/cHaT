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
  <link rel="icon" href="/favicon.ico">

  <script src="//cdn.bootcss.com/less.js/3.0.0-pre.3/less.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">

  <title><?php echo $title ?></title>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">cHaT</a>


      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <?php
    echo $content;
   ?>
   <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
   <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
