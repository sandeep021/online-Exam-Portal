
<!doctype html>
<html lang="en">
  <head>
  	<title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
    <style type="text/css">
       .hh 
      {
          color: black;
          text-shadow: 2px 2px 5px green;
          font-size: 60px;
          text-align: center;
      }
    </style>

  </head>
  <body>
		
  <?php 
        $filepath = realpath(dirname(__FILE__));
        include_once ($filepath.'/inc/header.php');
          ?>

		<div class="wrapper d-flex align-items-stretch" style="background-color: #97CAEF">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
	  		<h1><a href="index.html" class="logo">Exam Manager</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="index.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
              <a href="users.php"><span class="fa fa-user mr-3"></span> Manage Users</a>
          </li>
          <li>
            <a href="quesadd.php"><span class="fa fa-sticky-note mr-3"></span> Set Questions</a>
          </li>
          <li>
            <a href="queslist.php"><span class="fa fa-sticky-note mr-3"></span> Questions List</a>
          </li>
          <li>
            <a href="?action=logout"><span class="fa fa-paper-plane mr-3"></span> Log Out</a>
          </li>
          <!-- <li>
            <a href="#"><span class="fa fa-paper-plane mr-3"></span> Information</a>
          </li> -->
        </ul>

    	</nav>

        <!-- Page Content  -->
        
                <style>
            .main{
              
              
            }
            .main h1{
              font-family: "Times New Roman", Georgia, Serif;
              font-size: 30px;
              color:#5e0c17;
            }
            .adminpanel{
              width:500px;
              color:#897073;
              margin:30px auto 0;
              padding:50px;
              border:2px solid #ddd;
              font-family: "Times New Roman", Georgia, Serif;
              font-size: 20px;
              }
          </style>
          <div class="main">
            <div class="hh">
              <p>Welcome to Teacher's Section</p>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

              <h3 style="padding: 100px">You can manage User and Online Exam from here.......</h3>
          </div>
          <!-- <?php include 'inc/footer.php'; ?> -->
		</div>
    <script type="text/javascript">
      var textWrapper = document.querySelector('.hh');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.hh .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2250,
    delay: (el, i) => 150 * (i+1)
  }).add({
    targets: '.hh',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/maiin.js"></script>
  </body>
</html>