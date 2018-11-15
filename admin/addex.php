<?php
include('config.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$location="photos/" . $_FILES["image"]["name"];
			$name=$_POST['name'];
			$address=$_POST['address'];
			$startdate=$_POST['startdate'];
			$enddate=$_POST['enddate'];
			
			$save=mysql_query("INSERT INTO exhibition (location, name, address, startdate, enddate) VALUES ('$location','$name','$address','$startdate','$enddate')");
			header("location: exhibition.php");
			exit();					
	}
?>
