<?php
	session_start();
	
	function confirm_logged_in() {
		if(!isset($_SESSION['user_id'])){
			redirect_to("1.php");
		}
	}
	
	function logged_out(){
		session_destroy();
		redirect_to("../index.html");
	}
?>