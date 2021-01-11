
<?php include 'inc/header.php'; ?>
<?php 
	Session::checkSession();
	
	$question = $exm->getQuestion();
	$total       = $exm->getTotalRows();
?>
<style>
.starttest p{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 23px;
		color:#030709;
}
.starttest ul{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 23px;
		color:#2d4756;
}
.starttest h2{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 25px;
		color:#121069;
}
.starttest h3{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 23px;
		color:#2d4756;
	}


</style>
<div class="main">
<small><h1>Test Instructions</h1></small>
	<div class="starttest">
	<p>This is multiple choice test to test your knowledge.
	This test contain three categories of questions
	easy, medium and hard</p>
	<ul>
		<li><strong>Number of Questions : </strong> <?php echo $total; ?></li>
		<li><strong>Question Type : </strong> Multiple Choice</li>
		<li><h3>You will get only 60 seconds for each question.</h3></li>
		<li><h3>You can see your result just after the final submission.</h3></li>
		<li><h3>You will get a alert that just 10 seconds left after every question. </h3></li>
		<li><h3>You have to keep your face in the webcam frame.</h3></li>
		<li><h3>You have to set your webcam ON after getting notification .</h3></li>
	</ul>

	<div class="button_cont" align="center"><a class="example_e" href="test.php?q=<?php echo $question['quesNo']; ?>" >Start Test</a></div>
	</div>
  </div>
<!-- <?php include 'inc/footer.php'; ?> -->