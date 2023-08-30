<?php
	include ('db.php');

if (isset($_POST['submit'])) {
	$name = $_POST["name"];
	$roll = $_POST["roll"];
	$regno = $_POST["regno"];
	$dep = $_POST["dep"];
	$disc = $_POST["disc"];
	//$imgs = $_POST["image"];

	$image = $_FILES["image"]["name"];
	$tempname = $_FILES["image"]["tmp_name"];
	$folder = "./Student-Details/" . $image;

	$sql = "INSERT INTO info (users_name, roll, regno, dep, dis, img) VALUES ('$name', '$roll', '$regno', '$dep', '$disc', '$image')";
	$result = mysqli_query($conn, $sql);
 
	if($result){
		move_uploaded_file($tempname,$folder);
		echo 'Success! Your entry has been submitted successfully!';
	}else{
		echo 'Error.............!';
	}
}
?>