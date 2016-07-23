<?php
@$id = $_POST["id"];
@$catid = $_POST["catid"];

$formatlar = array("image/png","image/jpeg","image/gif");
$path_to_90_directory = '../products/';
$rand = uniqid(rand(10000,99999));
if (in_array($_FILES["dosya"]["type"], $formatlar)){
	//
	$filename = $_FILES['dosya']['name'];
	$source = $_FILES['dosya']['tmp_name'];	
	$target = $path_to_90_directory .$rand. $filename;
	move_uploaded_file($source,$target);

$avatar =  $rand.$filename;
		

	}

	
?>