<?php
	function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}

	function addImage($img,$thumb) {
		include('connect.php');
		$img = mysqli_real_escape_string($link, $img);
		$thumb = mysqli_real_escape_string($link, $thumb);

		if($_FILES['photos_image']['type']=="image/jpg" || $_FILES['photos_image']['type']=="image/jpeg") {
			$targetpath = "img/{$img}";
			if(move_uploaded_file($_FILES['photos_image']['tmp_name'],$targetpath)) {

				$orig = "img/{$img}";
				$th_copy = "img/{$thumb}";

				if(!copy($orig, $th_copy)) {
				echo "An Error has occured.";


				}else{
					$qstring = "INSERT INTO tbl_photos VALUES(NULL,'{$thumb}','{$img}')";

					$result = mysqli_query($link,$qstring) OR die(mysqli_error());

					if($result==1) {

					}
				}
			}

			mysqli_close($link);
		}else{
			echo "This is not a jpg";
		}
	}

?>