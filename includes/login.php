<?php

	//echo "Works!";
	
	function logIn($username, $password, $ip) {
		
		require_once('connect.php');
		
		$username = mysqli_real_escape_string($link, $username);
		$password = mysqli_real_escape_string($link, $password);
		
		$loginstring = "SELECT * FROM tbl_user WHERE user_name = '{$username}' AND user_pass = '{$password}'";
		
		//echo $loginstring;
		$user_set = mysqli_query($link, $loginstring);
		
		//echo mysqli_num_rows($user_set);
		
		if(mysqli_num_rows($user_set)) {
			
			$found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
			
			$id = $found_user['user_id'];
			
			$_SESSION['user_id'] = $id;
			//$_SESSION['user_lastlogin'] = NOW()
			$_SESSION['user_name'] = $found_user['user_name'];
			if(mysqli_query($link, $loginstring)) {
				$updatestring = "UPDATE tbl_user SET user_ip = '{$ip}' WHERE user_id = '{$id}'";
				$updatestring = mysqli_query($link, $updatestring);
				
				//echo "$updatestring";
			}
			redirect_to("2.php");
				
		}else{
			$message = "Username and or Password is incorrect.";
			return $message;
		}
		mysqli_close($link);
		
	}

?>