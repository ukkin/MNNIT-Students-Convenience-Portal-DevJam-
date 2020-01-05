<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="mess.css">
</head>
<?php
	session_start();
	include("dbConnect.php");
	if(isset($_SESSION["id"]))
	{
		$name=$_SESSION["id"];
		echo "Hello ";
		echo $_SESSION['id']; 
	}
?>
	


<body>
  <header>
  	<div class="main">
  <div class="logo">
    <img src="logo2.png">
  </div>
  	<ul><b>
  <li  ><a href="home.php">Home</a></li>
    <li><a href="form.php">NOC</a></li>
    <li><a href="scholarship.php">Scholarship</a></li>
    <li class="active"><a href="index.php">Mess Menu</a></li>
    <li><a href="attendance.php">Attendance</a></li>
    <li><a href="contact.php">Contact Us</a></li>
  </b></ul></div>
  	a.<br><br>
  <div class="white">

<br>
  		  	<h1><center>THIS WEEK'S MENU<br></h1><br>
  		<table div class="new" align="center" border="4px" style="width:100%;height=50%">
			<tr>
				<th>Day</th>
				<th>Lunch</th> 
				<th>Dinner</th>
				<th>Timings</th>
			</tr>
			<?php
		$sql1="select * from menu group by day order by menu_id";
		$rs=mysqli_query($con,$sql1);			
		while($row=mysqli_fetch_array($rs))
		{
			$day=$row[1];
			$lunchId=$row[2];
			$dinnerId=$row[3];
				
			
		?>
		<div class="white">
   		<tr> 
   					<td align="center"><?php echo $day?></td>
			<?php
			
			$sql2="select item_name from `lunch-sabzi` where lunch_id='$lunchId' limit 1";
			$rsLunch=mysqli_query($con,$sql2);			
			//while($rowLunch=mysqli_fetch_array($rsLunch))
			//{
				$itemNameL=mysqli_fetch_array($rsLunch)[0];
			?>
			<td align="center"><?php echo $itemNameL?></td>
			
			<?php
			$sql3="select * from `dinner_sabzi` where dinner_id='$dinnerId' limit 1";
			$rsDinner=mysqli_query($con,$sql3);			
			while($rowDinner=mysqli_fetch_array($rsDinner))
			{
				$itemNameD=$rowDinner[1];
			?>
			
			<td align="center"><?php echo $itemNameD?></td>
			<td align="center"><b>Lunch:</b>12:30pm-2pm<br><b>Dinner:</b>8pm-9:30pm</td>
		</tr>
		
		<?php }}?>
	</table>
		</div><br>
			<ul><b>
<li  ><a href="next_week.php" >NEXT.WEEK</a></li>
		</table>
	</b></ul>
  </header>
</body>
</html>