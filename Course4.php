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
		<ul>
			<b>
				<li ><a href="home.php">Home</a></li>
				<li><a href="form.php">NOC</a></li>
				<li><a href="scholarship.php">Scholarship</a></li>
				<li><a href="messmenu.php">Mess Menu</a></li>
				<li  class="active"><a href="attendance.php">Attendance</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</b>
		</ul>
		<h2>
		<div class="white">
		<br>
		<table border="1px" style="width:100%;height=50%" div class="new">
		<tr >
		<tr>
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
				include("connect.php");
				session_start();
				$regi=$_SESSION['x'];
				$take="SELECT Monday from attn4 where RegistrationNo=$regi";
				$res=mysqli_query($con,$take);
				while($row=mysqli_fetch_array($res))
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
				?></td>
			<td><?php
				$take="SELECT Tuesday from attn4 where RegistrationNo=$regi";
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
				?></td>
			<td><?php
				$take="SELECT Wednesday from attn4 where RegistrationNo=$regi";
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
				?></td>
			<td><?php
				$take="SELECT Thursday from attn4 where RegistrationNo=$regi";
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
				?></td>
			<td><?php
				$take="SELECT Friday from attn4 where RegistrationNo=$regi";
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
			<td> <?php
				$take="SELECT Monday, Tuesday, Wednesday,Thursday, Friday from attn4 where RegistrationNo=$regi";
				$res=mysqli_query($con,$take);
				$c=0;
				while($row=mysqli_fetch_array($res))
				{
				    $c=$row['Monday']+$row['Tuesday']+$row['Wednesday']+$row['Thursday']+$row['Friday'];    
				}
				echo ($c/5)*100;
				?>
	</body>
</html>