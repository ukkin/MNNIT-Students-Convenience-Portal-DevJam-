<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="mess.css">
		<title>Give Choices</title>
	</head>
	<body>
		<header>
		<div class="main">
		<div class="logo">
			<img src="logo2.png">
		</div>
		<ul>
			<b>
				<li  ><a href="home.php">Home</a></li>
				<li><a href="form.php">NOC</a></li>
				<li><a href="scholarship.php">Scholarship</a></li>
				<li class="active"><a href="index.php">Mess Menu</a></li>
				<li><a href="attendance.php">Attendance</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</b>
		</ul>
		<?php
			session_start();
					include("connect.php");	
					
					if(isset($_POST['submit']))
					{	
						$cnt=1;
						
							$sqlDelete="delete from student_menu where student_id=$_SESSION[x]";
							$qsql=mysqli_query($con,$sqlDelete);
							error_reporting(0);
							ini_set('display_errors', 0);
						while($cnt!=8)
						{
							switch($cnt)
							{
								case 1:
										$sql="INSERT INTO student_menu(student_id,day,lunch_id,dinner_id) VALUES ('$_SESSION[x]','Monday','$_POST[lunch1]','$_POST[dinner1]')";
										break;
								case 2:
										$sql="INSERT INTO student_menu(student_id,day,lunch_id,dinner_id) VALUES ('$_SESSION[x]','Tuesday','$_POST[lunch2]','$_POST[dinner2]')";
										break;
								case 3:
										$sql="INSERT INTO student_menu(student_id,day,lunch_id,dinner_id) VALUES ('$_SESSION[x]','Wednesday','$_POST[lunch3]','$_POST[dinner3]')";
										break;
								case 4:
										$sql="INSERT INTO student_menu(student_id,day,lunch_id,dinner_id) VALUES ('$_SESSION[x]','Thursday','$_POST[lunch4]','$_POST[dinner4]')";
										break;
								case 5:
										$sql="INSERT INTO student_menu(student_id,day,lunch_id,dinner_id) VALUES ('$_SESSION[x]','Friday','$_POST[lunch5]','$_POST[dinner5]')";
										break;
								case 6:
										$sql="INSERT INTO student_menu(student_id,day,lunch_id,dinner_id) VALUES ('$_SESSION[x]','Saturday','$_POST[lunch6]','$_POST[dinner6]')";
										break;
								case 7:
										$sql="INSERT INTO student_menu(student_id,day,lunch_id,dinner_id) VALUES ('$_SESSION[x]','Sunday','$_POST[lunch7]','$_POST[dinner7]')";
										break;
							}
							if(!$qsql=mysqli_query($con,$sql))
							{
								echo mysqli_error($con);
							}
							else
							{
								echo "<script>alert('Choices Saved...')</script>";	
								header("Location: index.php");		
							}
							$cnt+=1;
						}
					}
			
			?>
		<header>
			<div class="white">
			<form method="post">
				<div clAss="left2">
					<table div class="new" border="4px" style="width:100%;height=50%">
						<tr>
							<th>DAY</th>
							<th>LUNCH<br>(sabzi)</th>
							<th>DINNER<br>(sabzi)</th>
							<th>TIMINGS</th>
						</tr>
						<?php
							$sql1="select distinct day from menu ";
							$rs=mysqli_query($con,$sql1);
							
							$dayCnt=0;
							$dinnerCnt=0;		
							$lunchCnt=0;		
							while($row=mysqli_fetch_array($rs))
							{
								$day=$row[0];
								//$lunchId=$row[2];
								//$dinnerId=$row[3];
									
								
							?>
						<tr>
							<td align="center"><span name="day<?php echo $dayCnt+=1 ?>"><?php echo $day?></span></td>
							<td align="center">
								<select name="lunch<?php echo $lunchCnt+=1 ?>">
								<?php
									$sql2="select l.lunch_id,l.item_name from `lunch-sabzi` l,`menu` m where m.lunch_id=l.lunch_id and m.day='$day'";
											
									$rsLunch=mysqli_query($con,$sql2);			
									while($rowLunch=mysqli_fetch_array($rsLunch))
									{
										$itemNameL=$rowLunch[1];
									?>
								<option value="<?php echo $rowLunch[0]?>"><?php echo $itemNameL?></option>
								<?php }?>
							</td>
							<td align="center">
								<select name="dinner<?php echo $dinnerCnt+=1 ?>">
								<?php
									$sql3="select d.dinner_id,d.item_name from `dinner_sabzi` d,`menu` m where m.dinner_id=d.dinner_id and m.day='$day'";
									$rsDinner=mysqli_query($con,$sql3);			
									while($rowDinner=mysqli_fetch_array($rsDinner))
									{
										$itemNameD=$rowDinner[1];
									?>
								<option value="<?php echo $rowDinner[0]?>"><?php echo $itemNameD?></option>
								<?php }?>
							</td>
							<td align="center"><b>Lunch:</b>12:30pm-2pm<br><b>Dinner:</b>8pm-9:30pm</td>
						</tr>
						<?php }?>
					</table>
					<button  name="submit">Save Your choice</button>
			</form>
			</div>
		</header>
	</body>
</html>