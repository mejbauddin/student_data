<?php

	session_start();

	$logout = $_SESSION['roll'] AND $_SESSION['regno'];
	if(!isset($logout)){

		header('location: index.php');
	}


include ('inc/db.php');
$id = $_SESSION['id'];
$sql = "SELECT * FROM info WHERE id='$id'";
$result = mysqli_query($conn, $sql);


	//$name = $_GET['users_name'];
	$row = mysqli_fetch_assoc($result);

?>
<!doctype html>
<html class="no-js" lang="">

<head>
		  <meta charset="utf-8">
		  <title><?php echo $row['users_name']; ?></title>
		  <meta name="description" content="">
		  <meta name="viewport" content="width=device-width, initial-scale=1">

		  <!-- style link-->
		  <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
		  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
		  <link rel="stylesheet" href="css/normalize.css">
		  
		  <!-- favicon link -->
		  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
	</head>

	<body class="body2">
		<div class="fpi">
			<h1>F.P.I</h1>
		</div>
		<div class="simg">
			<img src="Student-Details/<?php echo $row['img']; ?>" alt="">
		</div>
		<div class="button">
        	<!-- <a href="user_edit.php?id=<?php echo $_SESSION['id']; ?>">Edit</a><br> -->
        	<a href="inc/logout.php">Logout</a>
        </div>
		<div class="studentdata">
			<div class="name"><h1><?php echo $row['users_name']; ?></h1></div>
			<div class="stable">
				<div class="id"><h4><?php echo $_SESSION['id']; ?></h4></div>
				<div class="roll"><h4><?php echo $_SESSION['roll']; ?></h4></div>
				<div class="dep"><h4><?php echo $row['dep']; ?></h4></div>
			</div>
			<div class="disc"><h4>Reg.no : <?php echo $_SESSION['regno']; ?>, <?php echo $row['dis']; ?></h4></div>
		</div>
		  
				<!--====== Javascripts & Jquery ======-->
		  
		  <script type="text/javascript" src="js/jQuery main file.js"></script>
		  <script type="text/javascript" src="js/mixitup.min.js"></script>
		  <script type="text/javascript">
			
			(function($){
				$(document).ready(function(){
				
				var mixingKorbo = mixitup('.all')
				
				});
			})(jQuery)
		  
		  </script>
	</body>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</html>
