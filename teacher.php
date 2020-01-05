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

//session_start();

//$host="localhost";
//$password="";
//$db="login form";
  
  //session_start();	
if(isset($_SESSION["y"]))
{
	header('Location: home.php');
}

if(isset($_POST["submit"]))
{
	//if($_POST["usertype"]==1)
	$sql = "SELECT * FROM teacher WHERE course='$_POST[y]' AND pass ='$_POST[ps]'";

	if(!$qsql = mysqli_query($con,$sql))
	{
		echo mysqli_error($con);
	}
	else
	{
		if(mysqli_num_rows($qsql)==1)
		{
			session_start();
			$rs = mysqli_fetch_array($qsql);
			$_SESSION["y"] = $rs['course'];			
			$_SESSION["password"] = $rs['pass'];			
			//$_SESSION["user_type"] = $rs[type];
			echo $_SESSION["y"];
			header('Location: DaywiseEntry.php');
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
  <ul><b>
  <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </b></ul>


<fieldset style = "width: 600px; margin:  400px ">
<form method="POST" action="#">
    <div class="new">
        <div class="white">
    <div class="left1"><br>
   
  </div>

  <div class="container">
         <div class="left3"><h2> Teacher's Login</h2><br></div>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="y" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="ps" required>
        <div class="black">
          .<br><button type="submit" name="submit">Login</button>
    </div>
<div class="left6">
    <b><br><br>
    For Students's login <a href="login_page.php">Click here </a> 

   
  </div>
</form>
</body>
</html>