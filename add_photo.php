<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	require_once('includes/init.php');
	confirm_logged_in();

	$tbl = "tbl_photos";
	$catQuery = getAll($tbl);

	if(isset($_POST['Submit'])) {
		$img = $_FILES['photos_image']['name'];
		$thumb = "TH_{$img}";
		//$date = date(['blog_date']);
		$uploadImage = addImage($img,$thumb);
		$message = $uploadImage;
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
      	<h1>Post Photo</h1>
      		<form action="add_photo.php" method="post" enctype="multipart/form-data">

      			<label>Image:</label>
      			<input type="file" name="photos_image">

      			<input type="Submit" name="Submit" value="Submit Blog">
      		</form>
          <a href="2.php">Go Back</a><br>
          <a href="index.html">Go to Homepage</a>
      </div>
    </div>
  </section>

  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>