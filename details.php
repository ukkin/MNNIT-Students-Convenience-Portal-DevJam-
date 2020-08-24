<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="signup.css">
	</head>
	<body>
		<header>
		<div class="main">
		<div class="logo">
			<img src="logo2.png">
		</div>
		<ul>
			<b>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</b>
		</ul>
		<fieldset style = "width: 600px; margin:  400px ">
		<div class="new">
		<div class="white">
		<div class="left1"><br>
		</div>
		<form action="" method="post">
			<div class="container">
				<div class="left2">
					<h2>Fill the following information</h2>
					<br>
				</div>
				<div class="left2">
					<p></p>
					<br>
				</div>
				<label for="email"><b>Name</b></label><br>
				<input type="text" placeholder="Enter Name" name="name" required>
				<br><br>
				<label for="email"><b>Contact Number</b></label><br>
				<input type="text" placeholder="Enter Contact number" name="contact" required>
				<br><br><label for="email"><b>Email ID</b></label><br>
				<input type="email" placeholder="Enter Email ID" name="email" required>
				<br><br>
				Select your Category<br>
				<input type="radio" name="c" value="general" checked> General<br>
				<input type="radio" name="c" value="obc"> OBC<br>
				<input type="radio" name="c" value="ST"> ST  <br>
				<input type="radio" name="c" value="SC"> SC<br>
				<br>
				<b>Date of Birth : </b><input type="date" id="date" name="dob"> 
				<div class="clearfix"><br>
					<button type="submit" name="Upload" class="signupbtn">Submit</button>
				</div>
			</div>
		</form>
		<?php
			session_start();
			$con=mysqli_connect("localhost","root","","login");
			if(mysqli_connect_errno($con))
			{
			    echo mysqli_connect_error();
			}
			
			if(isset($_POST['Upload']))
			{
			  $reg=$_SESSION['x'];
			  $contact= $_POST['contact'];
			  $name=$_POST['name'];
			  $email=$_POST['email'];
			  $categ=$_POST['c'];
			  $dob=$_POST['dob'];
			
			  $sqlDelete="Delete from student_menu where student_id=$_SESSION[x]";
			  $qsql=mysqli_query($con,$sqlDelete);
			$query="INSERT INTO details (student_id, Name, Contact, Email, Category, DOB) VALUES ('$reg', '$name','$contact','$email','$categ','$dob')";
			
			if(mysqli_query($con, $query))
			{
			  header('location: http://localhost/login/home.php', true, 307);       
			          exit();
			}
			else
			{
			  echo "Error in submitting form";
			}
			
			}
			
			
			?>
	</body>
</html>