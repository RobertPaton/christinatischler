<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once('includes/init.php');

  if(isset($_GET['filter'])) {
    $tbl2 = "tbl_blog";
    $filter = $_GET['filter'];
    $getBlog = filterType($tbl2, $filter);
  }else{
    $tbl = "tbl_blog";
    $getText = getEntry($tbl);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Christina Tischler - Blog</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lobster|Josefin+Sans:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default" id="nav">
        <div class="container-fluid" id="cont">
          <div class="navbar-header">
          <object data="img/logo.svg" id="logo"></object>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>
          </div>
          <div class="collapse navbar-collapse" id="collapse">
          <ul class="nav navbar-nav navbar-left" id="navLeft">
            <li><a href="index.html" class="text-center">Home</a></li>
            <li><a href="#" class="text-center">Blog</a></li>
          </ul>



          <ul class="nav navbar-nav navbar-right" id="navRight">
            <li><a href="photos.php" class="text-center">Photos</a></li>
            <li><a href="contact.php" class="text-center">Contact</a></li>            
          </ul>
          </div>
        </div>
    </nav>

    <section class="container">
      <div class="row" id="blog">
        <?php
          if(!is_string($getText)) {
            while($row = mysqli_fetch_array($getText)) {
              echo   "<div class='col-xs-10 col-xs-offset-1'>
                <h2>{$row['blog_title']}</h2>
                <p class=\"blog_entry\">{$row['blog_entry']}</p>
                </div>";
            }
          }else{
            echo "<p>{$getImages}</p>";
          }
        ?>
      </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>