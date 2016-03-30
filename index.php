<?php
  static $default_title = "Mihrtec";
  static $default_flag = "default";

  $pageid = $_GET["id"];
  $pageid = isset($pageid) ? $pageid : 'products';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mihrtec</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-header">
        <img class="navbar-brand" src="favicon-96x96.png" />
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse navbar-right">
        <ul class="nav navbar-nav">
          <li<?php if ($pageid == 'products') echo " class=\"active\"";?>>
            <a href="?id=products">Products </a>
          </li>
          <li<?php if ($pageid == 'about') echo " class=\"active\"";?>>
            <a href="?id=about">Company </a>
          </li>
        </ul>
      </div>
    </nav>
    <header>
  	  <div class="container solid-inherit">
  		  <div class="row solid-inherit">
  			  <div class="intro-text col-lg-12 solid-inherit">
              <hr class="<?php echo "flag-" . $pageid; ?>">
  			  </div>
  		  </div>
  	  </div>
    </header>
    <?php
  	  include($pageid . '.php');
    ?>
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-3"></div>
            <div class="footer-col col-md-3">
              <ul class="list-inline">
                <!--<li>
                  <a href="#" class="btn-social btn-outline">
                    <i class="fa fa-fw fa-google-plus"></i>
                  </a>
                </li>-->
                <li>
                  <a href="https://www.twitter.com/mihrtec" class="btn-social btn-outline">
                    <i class="fa fa-fw fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="https://mihrtec.slack.com" class="btn-social btn-outline">
                    <i class="fa fa-fw fa-slack"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-col col-md-3">
              <p>
                17955 Sky Park Circle, Ste G <br />
                Irvine, CA 92614
              </p>
            </div>
            <div class="footer-col col-md-3"></div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; 2016 Mihrtec LLC
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/positionFade.js"></script>

  </body>
</html>
