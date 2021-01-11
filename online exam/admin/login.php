<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/loginheader.php');
	include_once ($filepath.'/../classes/Admin.php');
	$ad = new Admin();
?>
<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$adminData = $ad->getAdminData($_POST);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css?<?php echo time(); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css?<?php echo time(); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css?<?php echo time(); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css?<?php echo time(); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css?<?php echo time(); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css?<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/main.css?<?php echo time(); ?>">
<!--===============================================================================================-->
<style type="text/css">
	#demotext {
color: #444444;
background: #FFFFFF;
text-shadow: 1px 0px 1px #CCCCCC, 0px 1px 1px #EEEEEE, 2px 1px 1px #CCCCCC, 1px 2px 1px #EEEEEE, 3px 2px 1px #CCCCCC, 2px 3px 1px #EEEEEE, 4px 3px 1px #CCCCCC, 3px 4px 1px #EEEEEE, 5px 4px 1px #CCCCCC, 4px 5px 1px #EEEEEE, 6px 5px 1px #CCCCCC, 5px 6px 1px #EEEEEE, 7px 6px 1px #CCCCCC;
color: #444444;
background: #FFFFFF;
padding: 0px 10px 90px 10px;
}

</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<!-- <h1>Welcome to Admin Area</h1> -->
			<div class="wrap-login100">
			<div id="demotext" class="login100-form-btn"><h2>WELCOME TO TEACHER'S SECTION</h2></div>
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title">
						Teacher's Login
					</span>

					<div class="wrap-input100 validate-input">
						<!-- <input class="input100" type="text" name="email" placeholder="Email"> -->
						<input class="input100" placeholder="Username"type="text" name="adminUser" required/>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<!-- <input class="input100" type="password" name="pass" placeholder="Password"> -->
						<input class="input100" placeholder="Password" type="password" name="adminPass" required/>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<!-- <button class="login100-form-btn">
							Login
						</button> -->
						<input class="login100-form-btn" type="submit" name="login" value="Login Now"/>
					</div>
					<div class="text-center"><a class="btn btn-info mt-3 shadow-sm font-weight-bold" href="../index.php">Back
                     to Home</a></div>

					
					<!-- <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div> -->

					<!-- <div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>