<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>

    <?php echo Asset::css('bootstrap.css'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
  <div class="container">
    <div id="wrapper">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active">
              <a href="/example">This page</a>
            </li>
            <li role="presentation">
              <a href="/">Main page</a>
            </li>
          </ul>
          <h3 class="text-muted">Example project</h3>
        </nav>
      </div>
      <hr/>
      <div class="jumbotron">
        <h1><?php echo $title; ?></h1>
      </div>
      <div id="content">
          <?php echo $content; ?>
      </div>
      <hr/>
      <footer class="footer">
        <p>Some footer text</p>
      </footer>
    </div>
  </div>
</body>
</html>
