<?php
	session_start();


	$logout = $_SESSION['name'] AND $_SESSION['pass'];
	if(isset($logout)){

		header('location: home_page.php');
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
		  <link rel="stylesheet" type="text/css" href="style.css" media="all" />
		  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
		  <link rel="stylesheet" href="css/normalize.css">
		  
		  <!-- favicon link -->
		  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
	</head>

	<body onload="startTime()">
							<script>
								function startTime() {
								  var today = new Date();
								  var h = today.getHours();
								  var m = today.getMinutes();
								  var s = today.getSeconds();
								  m = checkTime(m);
								  s = checkTime(s);
								  document.getElementById('txt').innerHTML =
								  h + " : " + m + " : " + s;
								  var t = setTimeout(startTime, 500);
								}
								function checkTime(i) {
								  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
								  return i;
								}
							</script>
		  <!--[if IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
		  <![endif]-->

		  <!-- html start from here -->
		  
		  <!-- Header-area html start from here -->
		 
		<header>
			<div class="header-area">
				<div class="middle-area">
					<div class="header-text-area">
						<b>DASHBOARD LOGIN</b>
					</div>
					<div class="header-botom">
						<p><b>FARIDPUR (F.P.I) TEACHER</b></p>
						<p><b>ফরিদপুর (এফ.পি.আই) শিক্ষক</b></p>
					</div>
					<div class="login-area">
						<form action="inc/adminlogin.php" method="POST">
						<div class="login">
								<div class="login-info group">
									<div class="login-first">
									<style>
										::-webkit-input-placeholder { /* Edge */
										  color: #15ebff;
										  font-size: 13px;
										}

										:-ms-input-placeholder { /* Internet Explorer */
										  color: #15ebff;
										  font-size: 13px;
										}

										::placeholder {
										  color: #15ebff;
										  font-size: 13px;
										}
										</style>
										<input name="user_name" id="user-name" type="text" placeholder="Username" required="true" /><span class="bar"></span>
									</div>
									<div class="login-second">
										<input name="user_pass" id="pass" type="password" placeholder="Password" required="true" /><span class="bar"></span>
										<div class="CheckBox">
											<label class="container"> 	Remember me
											<input type="checkbox" >
											<span class="checkmark"></span>
											</label>
										</div>
									</div>
								</div>
								<div class="submit">
									<input type="submit" value="LOGIN"  />
								</div>
									<?php
									if(isset($_GET['result'])){
									?>
										<label class="containe2">
									<p><?php echo $_GET['result']; ?></p> 
									</label><?php
									}
									?>
								<div class="CheckBox1">
									<label class="container1">
										<a href="index.php">Student Login</a>
									</label>
								</div>
							</div>
						</form>
					</div>
					<div class="time-date">
						<div class="date">
						<script>
							  var currentDate = new Date(),
								  day = currentDate.getDate(),
								  month = currentDate.getMonth() + 1,
								  year = currentDate.getFullYear();
							  document.write("Time & Date "  + year)
							</script>
						</div>
						<div class="time">
							<div id="txt"></div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- <div class="preloader">
			<div class="p">LOADING</div>
		</div> -->


		  
		  
				<!--====== Javascripts & Jquery ======-->
		  
		  <script type="text/javascript" src="js/jQuery main file.js"></script>
		  <script type="text/javascript">
			
			(function($){
				$(document).ready(function(){
				pace0ptions = {
					ajax: true,
					document: true,
					eventLag: false
				};
				pace.on('done', function(){
					$('.p').delay(500).animate({top: '30%', opacity: '0'}, 3000, $.bez([0.19, 1, 0.22, 1]));
					
					$("#preloader").delay(1500).animate({top: '-1000'}, 2000, $.bez([0.19, 1, 0.22, 1]));
					
					TweenMax.from(".title", 2, {
						delay: 1.8,
						y: 10,
						opacity: 0,
						ease: Expo.easeInOut
					});
				});
				});
			})(jQuery)
		  
		  </script>
	</body>

	
	
	
	
	
	
	
</html>
