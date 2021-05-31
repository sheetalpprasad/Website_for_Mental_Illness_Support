<?php

	include('db_connect.php');
	
	//Write query to display feedbacks
	$sql = 'SELECT * FROM feedback ORDER BY user_id DESC LIMIT 4';
	
	//Make query and get result
	$result = mysqli_query($conn, $sql);
	  
	//Fetch the resulting rows as an array
	$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
	  
	//Free result from the memory
	mysqli_free_result($result);
	  
	//Close the connection to the database
	mysqli_close($conn);
?>

<html>

<head>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="CSS/style.css" >
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

</head>

<body>

<div class="header">
	<a href="index.php"><img src="Images/logo3.png" style="height: 30px; margin-right: 30px; margin-left: 20px;"></a>
	<a href="anxiety.html">What is anxiety?</a>
	<a href="relax.html">Battle anxiety</a>
	<a href="quiz.html">Take an anxiety test</a>
	<a href="about.html" style="float: right; margin-right: 5px;">About</a>
	<a href="feedback.php" style="float: right; margin-right: 5px;">Feedback</a>
</div>

<div class="row">
	<div class="leftcolumn">
		<h1 style="font-size: 70px; margin-bottom: 0; margin-left: 150px;">Time to change.</h1>
		<h4 style="font-size: 25px; margin-top: 0; margin-left: 20px; margin-bottom: 225px; margin-left: 160px;">You don't have to struggle in silence.</h4>
	</div>
	
	<div class="rightcolumn">
		<center>
		<img src="Images/mental health 2.jpg" style="width: 60.79%;">
		</center>
	</div>
</div>

<div class="section">
	<h1 style="font-size: 40px; margin-bottom: 0;">Explore</h1>
	<hr><br><br><br>
	
	<div class="row" id="animation">
	
		<div class="explore-card slide-in">
			<img style="height:250px;" src="Images/eating1.png">
			<br>
			<a href="mindful_eating.html">What is mindful eating?<br> <i class="fas fa-arrow-alt-circle-right"></i></a>
		</div>
		
		<div class="explore-card slide-in">
			<img style="height:250px;" src="Images/nap1.jpg">
			<br>
			<a href="power_nap.html">What is power napping? <br><i class="fas fa-arrow-alt-circle-right"></i></a>
		</div>
		
		<div class="explore-card slide-in">
			<img style="height:250px;" src="Images/work5.png">
			<br>
			<a href="mindful_workspace.html">How to create a mindful <br> workspace? <i class="fas fa-arrow-alt-circle-right"></i></a>
		</div>
		
	</div>
</div>

<div class="section">
	<h1 style="font-size: 50px; margin-bottom: 0;">It's ok, not to be ok. Just don't give up.</h1>
	<br>
	<h2 style="margin-bottom: 0;">Check out these videos.</h2>
	<hr><br>
</div>

<div class="row">
	<div class="leftcolumn">
		<center>
		<img src="Images/img8.png" style="width: 49.65%;">
		</center>
	</div>
	
	<div class="rightcolumn">
		<!-- insert video links here. -->
		<iframe width="300" height="250" src="https://www.youtube.com/embed/5nlSXhMBP8c"></iframe>
		<iframe width="300" height="250" src="https://www.youtube.com/embed/EGgN2-6b3xg"></iframe>
		<iframe width="300" height="250" src="https://www.youtube.com/embed/rLXcLBfDwvE"></iframe>
		<iframe width="300" height="250" src="https://www.youtube.com/embed/1akdX_JOsik"></iframe>
		<br><br><br><br><br><br>
	</div>
</div>

<div class="section" id="feed">
	<h1 style="font-size: 50px; margin-bottom: 0; margin-top: 100px;">Feedbacks</h1>
	<hr><br><br>
	
	<?php foreach($rows as $row){ ?>
	
	<div class="feedback">
		<div style="height: 300px;">
		<p><?php echo htmlspecialchars($row['message']); ?></p>
		</div>
		<div>
		<p style="float:right; margin-bottom: 0;"><?php echo "- ".htmlspecialchars($row['username']).", ".htmlspecialchars($row['age']); ?></p>
		<p style="float:right; padding-left: 50%;"><?php echo htmlspecialchars($row['place']); ?></p>
		</div>
	</div>
	
	<?php } ?>
</div>

<div class="footer-img">
	<img src="Images/footer3.png" style="width: 100%;">
</div>

<div class="footer">
	<p style="float: left; padding-left: 50px;">Developed by Sonika Prakash and Sheetal P</p>
	<p style="float: right; padding-right: 50px;">
	&copy 
    <script>
		document.write(new Date().getFullYear());
	</script>
		Happyness Inc.
	</p>
	<br><br>
</div>

</body>

<script src="JS/slide.js"></script>

</html>