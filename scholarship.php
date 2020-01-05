<html>
<head>

<link rel="stylesheet" type="text/css" href="scholarship.css">
</head>
<body>
    <header>
<div class="main">
  <div class="logo">
    <img src="logo2.png">
  </div>
  <ul><b>
  <li><a href="home.php">Home</a></li>
    <li><a href="form.php">NOC</a></li>
    <li  class="active"><a href="scholarship.php">Scholarship</a></li>
    <li><a href="index.php">Mess Menu</a></li>
    <li><a href="attendance.php">Attendance</a></li>
    <li><a href="contact.php">Contact Us</a></li>
  </b></ul>

<fieldset style = "width: 600px; margin:  400px ">
  <div class="new">
<form method="post" >  
     <div class="white">
    <div class="left1"><br><br>

Type of scholarship to be recieved:-<br>
<div class="left2" id="t1">

<input type="radio" name="govt" value="Government">Government<br>
<input type="radio" name="govt" value="Private">Private<br>
<br></div>

Brief description of scholarship.<br>
<textarea name="area" placeholder="In not more than 50 words" rows="10" cols="30">
</textarea>
<br><br>
<div id="t3">
    Amount to be recieved annually:-<br>
    <input type="radio" name="amt"  value="less than 2000"> less than 2000<br>
    <input type="radio" name="amt"  value="2000 to 5000">2000 to 5000<br>
    <input type="radio" name="amt"  value="5000 to 15000">5000 to 15000<br>
    <input type="radio" name="amt" value="more than 15000">more than 15000<br>
    <br>
</div>

 <input type="submit" name ="Upload" value ="Submit form">
</form>

<?php
include('connect.php');
if(isset($_POST['Upload']))
{
  $type= $_POST['govt'];
  $name=$_POST['area'];
  $amt=$_POST['amt'];
$query="INSERT INTO scholarform (Type, Description, Amount) VALUES ('$type','$name','$amt')";
if(mysqli_query($con, $query))
{
  echo "Form submitted successfully!";
}
else
{
  echo "Error in submitting form";
}
  }
?>


</body>
</html>
