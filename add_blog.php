<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	require_once('includes/init.php');
	confirm_logged_in();

	if(isset($_POST['submit'])) {
    $title = trim($_POST['blog_title']);
    $entry = $_POST['blog_entry'];
    if(empty($title)) {
      $message = "Please make sure you put a title.";
      $autotitle = $title;
      $autoentry = $entry;
    }else{
    $result = postBlog($title, $entry);
    $message = $result;
  }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Christina Tischler - Homepage</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
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

  <section class="container-fluid">
    <div class="row">
      <div class="col-xs-6 col-xs-offset-3">
      	<h1>Submit to Blog</h1>
      		<form action="add_blog.php" method="post" enctype="multipart/form-data">

      			<div class="form-group">
      				<label>Title:</label>
      				<input type="text" class="form-control" name="blog_title" value="<?php if(!empty($autotitle)) {echo $autotitle;} ?>">
      			</div>

      			<div class="form-group">
      				<label>Entry:</label>
      				<input type="text" class="form-control" name="blog_entry" value="<?php if(!empty($autoentry)) {echo $autoentry;} ?>">
      			</div>

      			<input type="submit" name="submit" value="Submit Blog">
          <a href="2.php">Go Back</a><br>
          <a href="index.html">Go to Homepage</a>
      		</form>
      </div>
    </div>
  </section>

  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>