<html>

<head>

<link rel="stylesheet" type="text/css" href="home.css">
</head>

<?php


session_start();
$con=mysqli_connect("localhost","root","","login");
if(mysqli_connect_errno($con))
{
    echo mysqli_connect_error();
}
$qsql = "SELECT * FROM details  WHERE student_id='$_SESSION[x]'";
if(!$qsql = mysqli_query($con,$qsql))
	{
		echo mysqli_error($con);
	}
	else
	{
		if(mysqli_num_rows($qsql)==1)
		{
			$rs = mysqli_fetch_array($qsql);
      $reg=$_SESSION['x'];
      $name=$rs[1];
      $contact=$rs[2];
      $email=$rs[3];
      $categ=$rs[4];
      $dob=$rs[5];
     // $name=$rs[1];
    }
    }


error_reporting(0);
ini_set('display_errors', 0);

?>


</head>
<body>
<header>
<div class="main">
  <div class="logo">
    <img src="logo2.png">
  </div>
  <ul><b>
  <li  class="active"><a href="home.php">Home</a></li>
    <li><a href="form.php">NOC</a></li>
    <li><a href="scholarship.php">Scholarship</a></li>
    <li><a href="index.php">Mess Menu</a></li>
    <li><a href="attendance.php">Attendance</a></li>
    <li><a href="contact.php">Contact Us</a></li>
  </b></ul>
  </div>
  <h2>
  <div class="white">
<fieldset style = "width: 600px; margin:  400px ">
  <div class="new">
    <div class="left2">
<br>
 Registration Number : <?php
 echo $reg; ?><br><br>

 Name : <?php
 echo $name; ?><br><br>

  Contact Number : <?php
 echo $contact; ?><br><br>
 
 Email ID : <?php
 echo $email; ?><br><br>

Category : <?php
 echo $categ; ?><br><br>
 
 Date of Birth : <?php
 echo $dob; ?><br><br>
</div>
<center>
<a href="details.php">Enter your details</a>
<br>
<button style="height:60px;width:200px" name="submit" type="submit"><h1><a href="login_page.php">Logout</a></h1><br></button>


  </header>

  
  </body>
  </html>
