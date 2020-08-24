<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="attendance.css">
	</head>
	<body>
		<header>
		<div class="main">
		<div class="logo">
			<img src="logo2.png">
		</div>
		<ul>
			<b>
				<li ><a href="home.php">Home</a></li>
				<li><a href="form.php">NOC</a></li>
				<li><a href="scholarship.php">Scholarship</a></li>
				<li><a href="index.php">Mess Menu</a></li>
				<li  class="active"><a href="attendance.php">Attendance</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</b>
		</ul>
		<fieldset style = "width: 600px; margin:  400px ">
		<div class="new">
		<center>
		<div class="white">
		<br>
		<h1>Courses taken by you-</h1>
		<br>
		<h2>
		<?php
			include("connect.php");
			session_start();
			//echo $_SESSION['x'];
			$regi=$_SESSION['x'];
			//$_SESSION['user']=1;
			//$q1="INSERT INTO (user,id) VALUES(100,20)";
			/*if(mysqli_query($con,$q1))
			    echo "hey";
			else
			    echo "hello";*/
			$take="SELECT Course1, Course2, Course3, Course4, Course5 from attendance where Registration=$regi";
			  $res=mysqli_query($con,$take);
			  while($row=mysqli_fetch_array($res))
			  {
			    echo '1)';
			    echo $row['Course1'];
			    ?><br><a href="http://localhost/login/Course1.php">Click here to go to this course</a>
		</br>
		<?php
			echo '</br>';
			echo '2)';
			  echo $row['Course2'] ;
			  ?><br><a href="http://localhost/login/Course2.php">Click here to go to this course</a></br>
		<?php
			echo '</br>';
			echo '3)';
			echo $row['Course3'] ;
			?><br><a href="http://localhost/login/Course3.php">Click here to go to this course</a></br>
		<?php
			echo '</br>';
			echo '4)';
			echo $row['Course4'] ;
			?><br><a href="http://localhost/login/Course4.php">Click here to go to this course</a></br>
		<?php
			echo '<br>';
			echo '5)'; 
			echo $row['Course5'] ;
			?><br><a href="http://localhost/login/Course5.php">Click here to go to this course</a></br>
		<?php
			echo '<br>';
			}
			?>
		<br>
	</body>
</html>