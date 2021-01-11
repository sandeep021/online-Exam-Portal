<!doctype html>
<html lang="en">
  <head>
    <title>Questions List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
      #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        /*border-collapse: collapse;*/
        width: 100%;
      }

      #customers td, #customers th {
        color: black;
        border: 1px solid black;
        padding: 8px;
      }

      #customers tr:nth-child(even){background-color: #b6fcd5;}
      #customers tr:nth-child(odd){background-color: #b4eeb4;}

      #customers tr:hover {background-color: #ffe4e1;}

      #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #001f3f;
        color: white;
      }
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
  include_once ($filepath.'/../classes/Exam.php');
  $exm = new Exam();
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
      
<?php 
  if(isset($_GET['delque'])){
    $quesNo = (int)$_GET['delque'];
     $delQue = $exm->delQuestion($quesNo);
  }
?>
<style>
  .main h1{
    
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 30px;
    color:#5e0c17;
  }
</style>


<div class="main">
  <div class="hh">Questions List</div>
  <?php 
    if(isset($delQue)){
      echo $delQue;
    }
  ?>

    <div class = "quelist">
      <table id="customers">
      <tr>
        <th width = "10%">No</th>
        <th width = " 70%">Questions</th>
        <th width = "20%">Action</th>
      </tr>
  <?php 
  
  $getData = $exm->getQueByOrder();
   
  if($getData){
    $i = 0;
    while($result = $getData->fetch_assoc()){
      $i++;
  ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $result['ques']; ?></td>
        <td>
          <a onclick = "return confirm('Are you sure to Remove')" href = "?delque=<?php echo $result['quesNo']; ?>">Remove</a>
        </td>
      </tr>
  <?php } } ?>
      </table>
    <div/>
</div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/maiin.js"></script>
  </body>
</html>