<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Session.php');
	Session::init();
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');
	
	spl_autoload_register(function($class){
		include_once "classes/".$class.".php";
	});
	$db  = new Database();
	$fm  = new Format(); 
	$usr = new User();
	$exm = new Exam();
	$pro = new Process();
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>

<!doctype html>
<html>
<head>
	<title>Online Exam System</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="Cache-Control" content="no-cache">
	<link rel="stylesheet" href="css/main.css?<?php echo time(); ?>">
	<link rel="stylesheet" href="css/bootstrap.min.css?<?php echo time(); ?>">
	<script type = "text/javascript" src="jvascrpt/jquery.js"></script>
   <script type = "text/javascript" src="jvascrpt/main.js"></script>

   <style>
		.suck {
  height: 100%;
  margin: 0;
  font-size: 4em;
  padding: 10px;
  color: white;
  text-shadow: 0 0.1em 20px rgba(0, 0, 0, 1), 0.05em -0.03em 0 rgba(0, 0, 0, 1),
    0.05em 0.005em 0 rgba(0, 0, 0, 1), 0em 0.08em 0 rgba(0, 0, 0, 1),
    0.05em 0.08em 0 rgba(0, 0, 0, 1), 0px -0.03em 0 rgba(0, 0, 0, 1),
    -0.03em -0.03em 0 rgba(0, 0, 0, 1), -0.03em 0.08em 0 rgba(0, 0, 0, 1), -0.03em 0 0 rgba(0, 0, 0, 1);
}

</style>
</head>
<body>

	<?php
		if(isset($_GET['action']) && $_GET['action'] == 'logout'){
			Session::destroy();
			header("Location:index.php");
			exit();
		}
	?>
	<!-- <section class="headeroption">
		<small><center><h1 class="suck">Exam Section</h1></center></small>
	</section> -->
	<!-- <style>
	
	.phpcoding{width:960px; margin: 0 auto;background:#0069ab;}
	</style>
	 -->
<div>
	<!-- <section class="headeroption"></section> -->
		<!-- <section class="maincontent">    -->
		<!-- <div class="menu">
		<ul> -->
		<?php
			$login = Session::get("login");
			if($login == true){
		?>
			<!-- <li><a href="profile.php">Profile</a></li> -->
			<nav class="navbar navbar-expand-lg navbar-light" style="background-color: black;">
			  <a class="navbar-brand" href="#"><h3>Exam Section</h3></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="exam.php">Home</a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="?action=logout">Link</a>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
			    </form>
			  </div>
			</nav>



			<li><a href="exam.php">Exam</a></li>
			<li><a href="?action=logout">Logout</a></li>
			<?php } else { ?>
			<!-- <li><a href="index.php">Login</a></li>
			<li><a href="register.php">Register</a></li> -->
			<?php } ?>
		<!-- </ul>  -->
		<?php
			$login = Session::get("login");
			if($login == true){
		?>
		<span style ="float:right;color:#fdfafb"; font-family : Times New Roman, Georgia, Serif;>
		Welcome<strong><?php echo Session::get("name"); ?></strong> to this Exam....
		</span>
		<?php } ?>
		<!-- </div> -->
	<!-- </section> -->
	<!--===============================================================================================-->	
	<script src="js/jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="js/js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>