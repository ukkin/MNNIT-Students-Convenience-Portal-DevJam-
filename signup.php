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
		<form method="POST" action="">
			<div class="new">
			<div class="white">
			<div class="left1"><br>
			</div>
			<div class="container">
				<h1>Student's Sign Up</h1>
				<br>
				<p>Please fill in this form to create an account.</p>
				<br>
				<label for="email"><b>Registration no.</b></label><br>
				<input type="text" placeholder="Enter Reg no." name="email" required>
				<br><br>
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>
				<br><br>
				<label for="psw-repeat"><b>Repeat Password</b></label>
				<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
				<br>
				<div class="clearfix"><br>
					<button type="submit" name="Upload" class="signupbtn">Sign Up</button>
				</div>
			</div>
		</form>
		<?php
			$con=mysqli_connect("localhost","root","","login");
			if(isset($_POST['Upload']))
			{
				$email= $_POST['email'];
				$psw=$_POST['psw'];
				$psw2=$_POST['psw-repeat'];
				if($psw==$psw2){
					$query="INSERT INTO student_info (student_id, Password) VALUES ('$email','$psw')";
					if(mysqli_query($con, $query))
					{
						header('location: http://localhost/login/login_page.php', true, 307); 
						exit();
					}
					else
					{
						header('location: http://localhost/login/signup.php', true, 307);       
						exit();
					}
				}
				else{
					echo "Passwords do not match. Try again.";
				}
			}
			
			?>
	</body>
</html>