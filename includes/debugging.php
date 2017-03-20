<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Debugging</title>
</head>
<body>

<?php 

//echo phpinfo(); 
/*
if (function_exists('mcrypt_encrypt')) {
    echo "mcrypt functions are available.<br />\n";
} else {
    echo "mcrypt functions are not available.<br />\n";
}*/

define('LIVE', FALSE);

function my_errors($e_num, $e_mess, $e_file, $e_line, $e_var){
	$message = "An error has occurred in script:{$e_file} on line:{$e_line} --> {$e_mess}";
	$message .= print_r($e_var,1);	

	if(!LIVE){
		echo "<pre>".$message."<br>";
		debug_print_backtrace();
		echo "</pre><br>";
	}else{
		echo "There was a system error.  We apologize for the incovenience.";
	}
}

set_error_handler('my_errors');

//Turning on Error Reporting
//ini_set('display_errors',1);
//error_reporting(E_ALL);

//Turning off Error Reporting
//error_reporting(0);

//Variable is not declared
foreach($var as $v){}
//echo "<br>";

//Dividing by 0 not allowed
$result = 1/0;
//echo "<br>";

//Error Suppressing
include('config.php');
@include('config.php');

?>
</body>
</html>