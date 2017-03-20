<?php

	function postBlog($title, $entry) {
		include('connect.php');
		$userstring = "INSERT INTO tbl_blog VALUES(NULL,'{$title}','{$entry}')";
			$userquery = mysqli_query($link, $userstring);

			if($userquery == 1) {
				redirect_to('add_blog.php');
			}else{
				$message = "There was a problem posting this blog";
				return $message;
			}
		mysqli_close($link);
	}

		function getUSer($id) {
		include('connect.php');
		$userstring = "SELECT * FROM tbl_user WHERE user_id='{$id}'";
		$userquery = mysqli_query($link, $userstring);
		
		if($userquery){
			$found_user = mysqli_fetch_array($userquery, MYSQLI_ASSOC);
			return $found_user;
		}else{
			$message = "These are not the users you are looking for...";
			return $message;
		}
		mysqli_close($link);
	}

	function editUser($id, $fname, $lname, $username,$password) {
		include('connect.php');
		$updatestring = "UPDATE tbl_user SET user_fname='{$fname}',user_lname='{$lname}',user_name='{$username}',user_pass='{$password}' WHERE user_id={$id}";
		$updatequery = mysqli_query($link, $updatestring);

		
			if($updatequery == 1) {
				redirect_to('index.php');
			}else{
				$message = "There was an error editing this user.";
				return $message;
			}

		echo $updatestring;
	}


?>