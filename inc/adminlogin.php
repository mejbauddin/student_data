<?php
	session_start();
	
	include ('db.php');
	//echo "Enter Your Name : ".$_POST["roll"]."<br>";
	//echo "Email Address : ".$_POST["reg"]."<br>";

	$roll = $_POST["user_name"];
	$regno = $_POST["user_pass"];

    $sql = "SELECT * FROM info WHERE users_name='$roll' AND users_pass='$regno'";
   	$result = mysqli_query($conn, $sql);
	$resultcheck = mysqli_num_rows($result);
	
	$vag = mysqli_fetch_array($result);
	
 
	//$result = $roll==445228 AND $regno==1502060569;

    if($resultcheck == 1){
		// $_SESSION['id'] = $vag['id'];
		// $_SESSION['roll'] = $vag['roll'];
		// $_SESSION['regno'] = $vag['regno'];
		$_SESSION['name'] = $vag['users_name'];
		$_SESSION['pass'] = $vag['users_pass'];
		// $_SESSION['dep'] = $vag['dep'];
		// $_SESSION['dis'] = $vag['dis'];
		// $_SESSION['img'] = $vag['img'];
        header('location: ../home_page.php');
    }else{
		header('location: ../admin.php?result=Username Or Password Error!');
	}
?>
