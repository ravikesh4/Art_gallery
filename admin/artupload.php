<?php
include('config.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$name=$_POST['name'];
			$size=$_POST['size'];
			$image="photos/" . $_FILES["image"]["name"];
			$artist_name=$_POST['artist_name'];
			
			$save=mysql_query("INSERT INTO art (name, size, image, artist_name) VALUES ('$name','$size','$image','$artist_size')");
			header("location: art2.php");
			exit();					
	}
?>
