<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="attendance.css">
</head>
<body  align="center">
<header>
<div class="main">
  <div class="logo">
    <img src="logo2.png">
  </div>
  <ul><b>
  <li ></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </b></ul>
  <h2>

<fieldset style = "width: 600px; margin:  400px ">
  <div class="new">
  <form method="post">

    <div class="white">
Registration Number<br>
<input type="text" name="reg" maxlength='8'><br><br>
Monday<br>
<input type="radio" name="atten1" value='1' >Present<br>
<input type="radio" name="atten1" value='0'>Absent<br><br>
Tuesday<br>
<input type="radio" name="atten2" value='1' >Present<br>
<input type="radio" name="atten2" value='0'>Absent<br><br>
Wednesday<br>
<input type="radio" name="atten3" value='1'>Present<br>
<input type="radio" name="atten3" value='0'>Absent<br><br>
Thursday<br>
<input type="radio" name="atten4" value='1' >Present<br>
<input type="radio" name="atten4" value='0'>Absent<br><br>
Friday<br>
<input type="radio" name="atten5" value='1' >Present<br>
<input type="radio" name="atten5" value='0'>Absent<br><br>
<input type ="submit" name="Upload" value="Submit" width="100px"><br><br>

<button style="height:50px;width:100px" name="submit" type="submit"><h2>Logout</h2></button><br>

<?php
if(isset($_POST["submit"]))
{
session_start();
session_destroy();
  header('Location: teacher.php');
}
?>

</form>
<?php
include('connect1.php');
session_start();
$TId=$_SESSION['y'];
//echo $TId;
if(isset($_POST['Upload']))
{
  $type1= $_POST['atten1'];
  $type2= $_POST['atten2'];
  $type3= $_POST['atten3'];
  $type4= $_POST['atten4'];
  $type5= $_POST['atten5'];
  $reg=$_POST['reg'];
  $per=(($type1+$type2+$type3+$type4+$type5)*100)/5;
  if ($TId=='MA12101')
  {
  $query="INSERT INTO attn1 (RegistrationNo,Monday,Tuesday,Wednesday,Thursday,Friday,Percentage) VALUES ($reg,$type1,$type2,$type3,$type4,$type5,$per)";
  }
  else if ($TId=='AM12201')
  {
  $query="INSERT INTO attn2 (RegistrationNo,Monday,Tuesday,Wednesday,Thursday,Friday,Percentage) VALUES ($reg,$type1,$type2,$type3,$type4,$type5,$per)";
  }
  else if ($TId=='PH12102')
  {
  $query="INSERT INTO attn3 (RegistrationNo,Monday,Tuesday,Wednesday,Thursday,Friday,Percentage) VALUES ($reg,$type1,$type2,$type3,$type4,$type5,$per)";
  }
  else if ($TId=='HS12201')
  {
  $query="INSERT INTO attn4 (RegistrationNo,Monday,Tuesday,Wednesday,Thursday,Friday,Percentage) VALUES ($reg,$type1,$type2,$type3,$type4,$type5,$per)";
  }
  else if ($TId=='CE12101')
  {
  $query="INSERT INTO attn5 (RegistrationNo,Monday,Tuesday,Wednesday,Thursday,Friday,Percentage) VALUES ($reg,$type1,$type2,$type3,$type4,$type5,$per)";
  }
  if(mysqli_query($con, $query))
{
  echo "Data stored successfully!";
}
else
{
  echo "Error in submitting data";
}
  }

?>

  </body>
  </html>