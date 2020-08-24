<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css_login.css">
	</head>
	<body>
		<?php
			$con=mysqli_connect("localhost","root","","login");
			if(mysqli_connect_errno($con))
			{
			    echo mysqli_connect_error();
			}
			 
			  
			if(isset($_SESSION["x"]))
			{
				header('Location: home.php');
			}
			
			if(isset($_POST["submit"]))
			{
				//if($_POST["usertype"]==1)
				$sql = "SELECT * FROM student_info  WHERE student_id='$_POST[x]' AND Password ='$_POST[psw]'";
			
				if(!$qsql = mysqli_query($con,$sql))
				{
					echo mysqli_error($con);
				}
				else
				{
					if(mysqli_num_rows($qsql)==1)
					{
						session_start();
						$result_set = mysqli_fetch_array($qsql);
						$_SESSION["x"] = $result_set['student_id'];			
						$_SESSION["password"] = $result_set['password'];
						echo $_SESSION["x"];
						header('Location: home.php');
					}
					else
					{
						echo "<script>alert('Invalid Login ID and password entered...')</script>";	
					}
				}
			}
			?>
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
		<form method="POST" action="#">
			<div class="new">
			<div class="white">
			<div class="left1"><br>
			</div>
			<div class="container">
			<div class="left3">
				<h2> Student's Login</h2>
				<br>
			</div>
			<label for="uname"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="x" required>
			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required>
			<div class="black">
				.<br><button name="submit" type="submit">Login</button>
			</div>
			<div class="left6">
				<b><br>Not registered yet ? <a href="signup.php">Sign Up </a> <br><br>
				For Teacher's login <a href="teacher.php">Click here </a> 
			</div>
		</form>
	</body>
</html>