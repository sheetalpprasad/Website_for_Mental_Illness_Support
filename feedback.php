<?php

	include('db_connect.php');
	  
	$name = $age = $msg = $place = '';
	  
	if(isset($_POST['submit']))
	{
		$user_name = mysqli_real_escape_string($conn, $_POST['name']);
	  
		$age = mysqli_real_escape_string($conn, $_POST['age']);
		  
		$msg = mysqli_real_escape_string($conn,$_POST['msg']);
		
		$place = mysqli_real_escape_string($conn,$_POST['place']);
		
		//Write query to insert feedback
		$sql = "INSERT INTO feedback(username, age, message, place) VALUES ('$user_name', $age,'$msg', '$place')";
		
		if(mysqli_query($conn, $sql))
		{
			//Success
			header('Location: index.php#feed');
			
		}
		else
		{
			//failure
			echo 'Query error: '.mysqli_error($conn);
			//echo "$chnl_name already selected!";
			//header('Location: feedback.php?id='.$cust_id);
		}
		  
		mysqli_close($conn);
	}

?>

<html>

<head>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="CSS/style.css" >
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

</head>

<body>

<div class="header">
	<a href="index.php"><img src="Images/logo3.png" style="height: 30px; margin-right: 30px; margin-left: 20px;"></a>
	<a href="anxiety.html">What is anxiety?</a>
	<a href="relax.html">Battle anxiety</a>
	<a href="quiz.html">Take an anxiety test</a>
	<a href="about.html" style="float: right; margin-right: 5px;">About</a>
	<a href="feedback.php" style="float: right; margin-right: 5px; font-weight: bold;">Feedback</a>
</div>

<div class="container">
	
	<center>
	<h1>Got a minute?</h1>
	</center>
	<br>
	
	<p style="text-align: center;"><b>We'd love your feedback! Please tell us your experience.</b></p>
	
	<form action="feedback.php" method="POST">
	
		<center>
		<img src="Images/feedback.png" height="120px">
		
		<br>
		
		<label>Your name:</label><br>
		<input type="text" name="name" style="width: 20%; padding: 10px;" required><br><br>
		
		<label>Age:</label><br>
		<input type="text" name="age" style="width: 20%; padding: 10px;" required><br><br>
		
		<label>Place:</label><br>
		<input type="text" name="place" style="width: 20%; padding: 10px;" required><br><br><br>
		
		<label>Please leave your feedback below:</label><br>
		<textarea rows="5" name="msg" style="width: 50%;" required></textarea>
		<br><br>
		
		<input type="submit" name="submit" value="Submit" class="submit-btn">
		
		</center>
		<br><br>
		
	</form>
	
</div>

<br>

<div>
	<img src="Images/footer6.png" style="width: 100%;">
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

</html>