<?php
	session_start();

	include ('inc/db.php');
    $sql = "SELECT * FROM info";
   	$result = mysqli_query($conn, $sql);

	$logout = $_SESSION['name'] AND $_SESSION['pass'];
	if(!isset($logout)){

		header('location: admin.php');
	}

?>
<!doctype html>
<html class="no-js" lang="">

<head>
		  <meta charset="utf-8">
		  <title>Faridpur Polytechnic Institute - Student Details</title>
		  <meta name="description" content="">
		  <meta name="viewport" content="width=device-width, initial-scale=1">

		  <!-- style link-->
		  <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
		  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
		  <link rel="stylesheet" href="css/normalize.css">
		  
		  <!-- favicon link -->
		  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
	</head>

	<body class="body1">
		  <!--[if IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
		  <![endif]-->

		  <!-- html start from here -->
		  
		  <!-- Header-area html start from here -->
		 
		<div class="fpih">
			<h1>F.P.I</h1>
		</div>
		<header>
			<div class="header-area">
				<div class="menu navbar">
					<ul>
						<li><a data-filter="*">Diploma Students Data Control Systems</a></li>
						<li><a href="my.php" ><?php echo $_SESSION['name']; ?></a></li>
						<li><a href="inc/logout.php">Logout</a></li>
						<!-- <li><a data-filter=".TEN">TEN</a></li>
						<li><a data-filter=".NINE">NINE</a></li>
						<li><a data-filter=".EIGHT">EIGHT</a></li> -->
					</ul>
				</div>
			</div>
		</header>
		<div class="search">
			<form action="" role="search" method="get" id="searchform">
				<input type="text" id="form_search" class="searchinput" name="s" value=""/>
				<input type="submit" id="Form_Go" class="icon-search" name="go" value="search" />
			</form>
		</div>
		
		<!-- student-list area start now -->
		<div class="all">
			<div class="students mix DIPLOMA">
				<div class="scrool">
					  
				<?php 
					while($row = mysqli_fetch_assoc($result)){
				?>
							<div class="student">
								<a href="admin_student.php?id=<?php echo $row['id']; ?>">
									<div class="images">
										<div class="img">
											<img src="Student-Details/<?php echo $row['img']; ?>" alt="image" />
										</div>
										<!-- <div class="fream">
											<img src="images/fream.png" alt="fream" />
										</div> -->
									</div>
									<div class="data TD">
										<div class="h5">
											<h5><?php echo $row['users_name']; ?></h5>
										</div>
										<h4>Roll : <?php echo $row['roll']; ?></h4>
										<h5>Id No : <?php echo $row['id']; ?></h5>
									</div>
								</a>
							</div>
				<?php
					}
				?>
				</div>

			</div>
			<div class="button2">
				<a href="user_edit.php">Add Student</a>
			</div>
		</div>
		<div class="football-team">
			<div class="team-info">
				<ul>
					<li class="Digit">Digit</li>
					<li class="Name">Name</li>
					<li class="T-shirt No">T-shirt No</li>
					<li class="Id No">Id No</li>
					<li class="Roll">Roll</li>
				</ul>
				<div class="all-team">
					<div class="team">
						<ul>
							<li class="Digit">01</li>
							<li class="1Name">Mejbah Uddin</li>
							<li class="T-shirt No">01</li>
							<li class="Id No">8891</li>
							<li class="Roll">19107</li>
						</ul>
					</div>
					<div class="team1">
						<ul>
							<li class="Digit">02</li>
							<li class="1Name">Emon Tarik__</li>
							<li class="T-shirt No">02</li>
							<li class="Id No">8892</li>
							<li class="Roll">19108</li>
						</ul>
					</div>
					<div class="team">
						<ul>
							<li class="Digit">03</li>
							<li class="1Name">Abdur Rohim-</li>
							<li class="T-shirt No">03</li>
							<li class="Id No">8893</li>
							<li class="Roll">19109</li>
						</ul>
					</div>
					<div class="team1">
						<ul>
							<li class="Digit">04</li>
							<li class="1Name">Rakib_______</li>
							<li class="T-shirt No">04</li>
							<li class="Id No">8894</li>
							<li class="Roll">19110</li>
						</ul>
					</div>
					<div class="team">
						<ul>
							<li class="Digit">05</li>
							<li class="1Name">Hassan Sk ___</li>
							<li class="T-shirt No">05</li>
							<li class="Id No">8895</li>
							<li class="Roll">19111</li>
						</ul>
					</div>
					<div class="team1">
						<ul>
							<li class="Digit">06</li>
							<li class="1Name">Mejbah Uddin</li>
							<li class="T-shirt No">06</li>
							<li class="Id No">8890</li>
							<li class="Roll">19107</li>
						</ul>
					</div>
					<div class="team">
						<ul>
							<li class="Digit">07</li>
							<li class="1Name">Mejbah Uddin</li>
							<li class="T-shirt No">07</li>
							<li class="Id No">8890</li>
							<li class="Roll">19107</li>
						</ul>
					</div>
					<div class="team1">
						<ul>
							<li class="Digit">08</li>
							<li class="1Name">Mejbah Uddin</li>
							<li class="T-shirt No">08</li>
							<li class="Id No">8890</li>
							<li class="Roll">19107</li>
						</ul>
					</div>
					<div class="team">
						<ul>
							<li class="Digit">09</li>
							<li class="1Name">Mejbah Uddin</li>
							<li class="T-shirt No">09</li>
							<li class="Id No">8890</li>
							<li class="Roll">19107</li>
						</ul>
					</div>
					<div class="team1">
						<ul>
							<li class="Digit">10</li>
							<li class="1Name">Mejbah Uddin</li>
							<li class="T-shirt No">10</li>
							<li class="Id No">8890</li>
							<li class="Roll">19107</li>
						</ul>
					</div>
					<div class="team">
						<ul>
							<li class="Digit">11</li>
							<li class="1Name">Mejbah Uddin</li>
							<li class="T-shirt No">11</li>
							<li class="Id No">8890</li>
							<li class="Roll">19107</li>
						</ul>
					</div>
					<div class="team1">
						<ul>
							<li class="Digit">12</li>
							<li class="1Name">Mejbah Uddin</li>
							<li class="T-shirt No">12</li>
							<li class="Id No">8890</li>
							<li class="Roll">19107</li>
						</ul>
					</div>
					<div class="team">
						<ul>
							<li class="Digit">13</li>
							<li class="1Name">Mejbah Uddin</li>
							<li class="T-shirt No">13</li>
							<li class="Id No">8890</li>
							<li class="Roll">19107</li>
						</ul>
					</div>
					<div class="team1">
						<ul>
							<li class="Digit">14</li>
							<li class="1Name">Mejbah Uddin</li>
							<li class="T-shirt No">14</li>
							<li class="Id No">8890</li>
							<li class="Roll">19107</li>
						</ul>
					</div>
					<div class="team">
						<ul>
							<li class="Digit">15</li>
							<li class="1Name">Mejbah Uddin</li>
							<li class="T-shirt No">15</li>
							<li class="Id No">8890</li>
							<li class="Roll">19107</li>
						</ul>
					</div>
					<div class="team1">
						<ul>
							<li class="Digit">16</li>
							<li class="1Name">Mejbah Uddin</li>
							<li class="T-shirt No">16</li>
							<li class="Id No">8890</li>
							<li class="Roll">19107</li>
						</ul>
					</div>
					<div class="team">
						<ul>
							<li class="Digit">17</li>
							<li class="1Name">Mejbah Uddin</li>
							<li class="T-shirt No">17</li>
							<li class="Id No">8890</li>
							<li class="Roll">19107</li>
						</ul>
					</div>
					<div class="team1">
						<ul>
							<li class="Digit">18</li>
							<li class="1Name">Mejbah Uddin</li>
							<li class="T-shirt No">18</li>
							<li class="Id No">8890</li>
							<li class="Roll">19107</li>
						</ul>
					</div>
					<div class="team">
						<ul>
							<li class="Digit">19</li>
							<li class="1Name">Mejbah Uddin</li>
							<li class="T-shirt No">19</li>
							<li class="Id No">8890</li>
							<li class="Roll">19107</li>
						</ul>
					</div>
					<div class="team1">
						<ul>
							<li class="Digit">20</li>
							<li class="1Name">Mejbah Uddin</li>
							<li class="T-shirt No">20</li>
							<li class="Id No">8890</li>
							<li class="Roll">19107</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<!-- student-list area end -->
		
		
		<div id="error-message" class="error-message">
			<?php
				
				if(isset($_GET['result'])){
					if($_GET['result'] == 'Welcome'){
						echo "<h1>Welcome to TSC secret website.</h1>";
			?>
			<a onclick="getElementById('error-message').innerHTML=''" href="#">x</a>
			<?php
					}
				}
			?>
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
