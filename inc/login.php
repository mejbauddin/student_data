<?php
	session_start();

	include ('db.php');
	//echo "Enter Your Name : ".$_POST["roll"]."<br>";
	//echo "Email Address : ".$_POST["reg"]."<br>";

	$roll = $_POST["roll"];
	$regno = $_POST["reg"];

    $sql = "SELECT * FROM info WHERE roll='$roll' AND regno='$regno'";
   	$result = mysqli_query($conn, $sql);
	$resultcheck = mysqli_num_rows($result);
	
	$vag = mysqli_fetch_array($result);
 
	//$result = $roll==445228 AND $regno==1502060569;

    if($resultcheck == 1){
		$_SESSION['id'] = $vag['id'];
		$_SESSION['roll'] = $vag['roll'];
		$_SESSION['regno'] = $vag['regno'];
		// $_SESSION['name'] = $vag['users_name'];
		// $_SESSION['dep'] = $vag['dep'];
		// $_SESSION['dis'] = $vag['dis'];
		// $_SESSION['img'] = $vag['img'];
        header('location: ../student.php');
    }else{
		header('location: ../index.php?result=Roll Or Registration Error!');
	}
?>
