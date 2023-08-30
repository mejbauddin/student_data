<?php 

include ('inc/db.php');
$id = $_GET['id'];
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
		<div class="studentdata">
        <form id="stripe-login" action="/student_data/reg.php" method="post" enctype="multipart/form-data">

			<div class="name2"><h1><input name="name" value="<?php echo $row['users_name']; ?>"/></h1></div>
			<div class="stable2">
				<div class="id"><h4><input name="id" value="<?php echo $row['id']; ?>"/></h4></div>
				<div class="roll"><h4><input name="roll" value="<?php echo $row['roll']; ?>"/></h4></div>
				<div class="dep"><h4><input name="dep" value="<?php echo $row['dep']; ?>"/></h4></div>
			</div>
			<div class="disc2"><h4><input placeholder="Reg.no" name="regno" value="<?php echo $row['regno']; ?>"/><input placeholder="description" name="disc" value="<?php echo $row['dis']; ?>"/></h4><h4 class="regst"></h4></div>
			
		<div class="simg">
			<img src="Student-Details/<?php echo $row['img'] ?>" alt="">
			<input type="file" value="<?php echo $row['image'] ?>" name="image" />

		<?php
			if(isset($_GET['result'])){
		?>
				<label class="containe2">
					<p><?php echo $_GET['result']; ?></p> 
				</label>
		<?php
			}
		?>
		
		</div>
		</div>
		<div class="button">
        	<a href="/student_data/admin_student.php?id=<?php echo $row['id']; ?>">Back</a><br>
        	<input type="submit" name="submit" value="Submit"/><br>
        	<a href="inc/logout.php">Logout</a>
        </div>
		</form>
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
