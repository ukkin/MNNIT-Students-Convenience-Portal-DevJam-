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
  <li ><a href="home.php">Home</a></li>
    <li><a href="form.php">NOC</a></li>
    <li><a href="scholarship.php">Scholarship</a></li>
    <li><a href="messmenu.php">Mess Menu</a></li>
    <li  class="active"><a href="attendance.php">Attendance</a></li>
    <li><a href="contact.php">Contact Us</a></li>
  </b></ul>
  <h2>
<div class="white"><br>

        <table border="1px" style="width:100%;height=50%" div class="new">
<tr >
<th>Monday</th>
<th>Tuesday</th>
<th>Wednesday</th>
<th>Thursday</th>
<th>Friday</th>
<th>Percentage</th>
</tr>
<tr>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>
<tr>
<td><?php
include("connect1.php");
session_start();

error_reporting(0);
ini_set('display_errors', 0);
//echo $_SESSION['x'];
$regi=$_SESSION['x'];
//$_SESSION['user']=1;
$take="SELECT Monday from att1 where RegistrationNo=$regi";
$res=mysqli_query($con,$take);
$row=mysqli_fetch_array($res);
while($row)
{
    if ($row['Monday']==1)
    {
        echo "Present";
    }
    else
    {
        echo "Absent";
    }
}
?>
</td>
<td><?php
$take="SELECT Tuesday from att1 where RegistrationNo=$regi";
$res=mysqli_query($con,$take);
while($row=mysqli_fetch_array($res))
{
    if ($row['Tuesday']==1)
    {
        echo "Present";
    }
    else
    {
        echo "Absent";
    }  
}
?>
</td>

<td><?php
$take="SELECT Wednesday from att1 where RegistrationNo=$regi";
$res=mysqli_query($con,$take);
while($row=mysqli_fetch_array($res))
{
    if ($row['Wednesday']==1)
    {
        echo "Present";
    }
    else
    {
        echo "Absent";
    }  
}

?>
</td>

<td><?php
$take="SELECT Thursday from att1 where RegistrationNo=$regi";
$res=mysqli_query($con,$take);
while($row=mysqli_fetch_array($res))
{
    if ($row['Thursday']==1)
    {
        echo "Present";
    }
    else
    {
        echo "Absent";
    }  
}
?>
</td>

<td><?php
$take="SELECT Friday from att1 where RegistrationNo=$regi";
$res=mysqli_query($con,$take);
while($row=mysqli_fetch_array($res))
{
    if ($row['Friday']==1)
    {
        echo "Present";
    }
    else
    {
        echo "Absent";
    }  
}
?>
</td>
<td> 
<?php
$take="SELECT Monday, Tuesday, Wednesday,Thursday, Friday from att1 where RegistrationNo='20184079'";
$res=mysqli_query($con,$take);
while($row=mysqli_fetch_array($res))
{
    $c=$row['Monday']+$row['Tuesday']+$row['Wednesday']+$row['Thursday']+$row['Friday'];    
}
echo ($c/5)*100;


?>
</td>
</body>
</html>
