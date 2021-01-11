 <?php include 'inc/header.php'; ?>
<?php 
	Session::checkSession();
	if(isset($_GET['q'])){
		$number = (int) $_GET['q'];
	}else{
		header("Location:exam.php");
	}
	$total       = $exm->getTotalRows(); 
	$question = $exm->getQuesByNumber($number );
?>
<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$process = $pro->processData($_POST);
	}
?>

<style>
.alamgir{
	font-family: "Times New Roman", Georgia, Serif;
	 color:#05020d;
	 font-size: 20px;
}
#countdown
{
	font-size: 50px;
	color: white;
	text-align: center;
	/*text-shadow: 4px 4px 5px green;*/
}
#notifier
{
	font-size: 20px;
	color: black;
	text-align: center;
	/*text-shadow: 4px 4px 5px green;*/
}

</style>
<html>
<head>

</head>
	<body>
		<div class="alamgir">
		<marquee behavior="alternate"><p style="color: black">Your Exam is Running</p></marquee>
		</div>
	</body>
</html>

<html>
<body>
<div id="countdown"></div>
<div id="notifier"></div>
<script type="text/javascript">
(function () {
  function display( notifier, str ) {
    document.getElementById(notifier).innerHTML = str;
  }
 
  function toMinuteAndSecond( x ) {
    return Math.floor(x/60) + ":" + (x=x%60 < 10 ? 0 : x);
  }
 
  function setTimer( remain, actions ) {
    var action;
    (function countdown() {
       display("countdown", toMinuteAndSecond(remain));
       if (action = actions[remain]) {
         action();
       }
       if (remain > 0) {
         remain -= 1;
         setTimeout(arguments.callee, 1000);
       }
    })(); // End countdown
  }
 
  setTimer(60, {
    10: function () { display("notifier", "Just 10 seconds to go"); },
     5: function () { display("notifier", "5 seconds left");        },
     0: function () { display("notifier", "Time is up baby");       }
  });
})();
 
</script>
<div class="video-wrap" style="float: left; border: 5px solid black;margin-top: 10px;background-color: skyblue">
    <video id="video" playsinline autoplay></video>
	<h6 style="color: black;"><b>Keep your face under<br>the camera frame untill<br>test end!!<b></h6>
</div>

<div class="main">
<h1>Question <?php echo $question['quesNo']; ?> of <?php echo $total; ?></h1>
	<div class="test">
		<form method="post" action="">
		<table> 
			<tr>
				<td colspan="2">
				 <h3>Que <?php echo $question['quesNo']; ?>: <?php echo $question['ques']; ?></h3>
				</td>
			</tr>
			<?php 
				$answer = $exm->getAnswer($number);   
				if($answer){
					while($result = $answer->fetch_assoc()){
			?>
			<tr>
				<td>
				 <input type="radio" name="ans" value="<?php echo $result['id']; ?>"/><?php echo $result['ans']; ?>
				</td>
			</tr>
				<?php } } ?>
			<tr>
			  <td>
				<input type="submit" name="submit" value="Next Question"/>
					<?php
				if(($question['quesNo']+1)<=$total)
				  {
				?>
				<script>
				setTimeout(function() {
					window.location.href = "test.php?q=<?php echo $question['quesNo']+1; ?>";
					
					}, 60000);
				
				</script>	
				<?php
				  }
				?>
				<?php
				if(($question['quesNo'])==$total)
				  {
				?>
				<script>
				setTimeout(function() {
					window.location.href = "final.php";
					
					}, 60000);
				
				</script>	
				<?php
				  }
				?>
				<input type="hidden" name="number" value= "<?php echo $number; ?>"/>
			</td>
			</tr>
			
		</table>
		</form>
</div>
 <!-- WEB CAM///////////////////////////////////////////////////////////////////////////////////// -->




<script type="text/javascript">
'use strict';

const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const snap = document.getElementById("snap");
const errorMsgElement = document.querySelector('span#errorMsg');

const constraints = {
  audio: true,
  video: {
    width: 190, height: 285
  }
};

// Access webcam
async function init() {
  try {
    const stream = await navigator.mediaDevices.getUserMedia(constraints);
    handleSuccess(stream);
  } catch (e) {
    errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
  }
}

// Success
function handleSuccess(stream) {
  window.stream = stream;
  video.srcObject = stream;
}

// Load init
init();

// Draw image
var context = canvas.getContext('2d');
snap.addEventListener("click", function() {
  context.drawImage(video, 0, 0, 190, 285);
});
</script>
<!-- WEB CAM END HERE //////////////////////////////////////////////////////////////////////////// -->

</div>
</body>
</html>

<!-- <?php include 'inc/footer.php'; ?> -->