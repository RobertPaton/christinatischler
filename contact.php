<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Christina Tischler - Homepage</title>

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
  <body><div id="fb-root"></div>
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
            <li><a href="blog.php" class="text-center">Blog</a></li>
          </ul>



          <ul class="nav navbar-nav navbar-right" id="navRight">
            <li><a href="photos.php" class="text-center">Photos</a></li>
            <li><a href="#" class="text-center">Contact</a></li>            
          </ul>
          </div>
        </div>
    </nav>

    <section class="container">
    	<div class="row">
    		<div class="col-xs-8 col-xs-offset-2" id="form">
    			<form method="post" role="form" action="includes/email.php">

    				<div class="form-gorup">
    					<label for="InputName">Name</label>
    					<input name="name" type="text" class="form-control" id="InputName" placeholder="Enter Name">
    				</div>

    				<div class="form-gorup">
    					<label for="InputEmail">Email Address</label>
    					<input name="email" type="text" class="form-control" id="InputEmail" placeholder="Enter Email">
    				</div>

    				<div class="form-gorup">
    					<label for="InputText">Message</label>
    					<input name="message" type="text" class="form-control" id="InputText" placeholder="Enter Message">
    				</div>
    				<button name="submit" type="submit" class="btn btn-default">Send</button>
    			</form>
          <a href="https://www.facebook.com/christinatischlerdotcom" target="_blank"><img src="img/facebook.png" alt=""></a>
          <a href="https://www.instagram.com/christinatischler/" target="_blank"><img src="img/instagram.png" alt=""></a><br>
          <a href="https://www.etsy.com/ca/shop/ChristinaTischler" target="_blank"><img src="img/etsy.png" alt=""></a>
    		</div>
    	</div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>