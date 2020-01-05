<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mess.css">

	<title></title>
</head>
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
  <div class="white">


	<?php
		include("dbconnect.php");	
	?>
	<header>
        <h1><center>NEXT WEEK MENU</center></h1>
   		  	<div clAss="left2">
<br>
  		<table class="new" border="4px" style="width:100%;height=50%">
		<tr>
			<th>Day</th>
			<th>Lunch</th> 
			<th>Dinner</th>
			<th>Timings</th>
		</tr>
	   
	<?php

				$ass_arrL = array('Monday' => array(0,0),'Tuesday' => array(0,0),'Wednesday' => array(0,0),'Thursday' => array(0,0),'Friday' => array(0,0),'Saturday' => array(0,0),'Sunday' => array(0,0));

				/*$sqlLunch="select day,lunch_id,max(lunchCount) from (select day,lunch_id,count(lunch_id) as lunchCount from `student_menu` group by day,lunch_id) as MaxLunchCount group by day order by lunch_id";*/
				$queryL = "select day,lunch_id,count(lunch_id) as lunchCount from `student_menu` group by day,lunch_id";
				$resultL=mysqli_query($con,$queryL);	

				while ($rowsL = mysqli_fetch_array($resultL)) {
					$day = $rowsL['day'];
					$l_c = $rowsL['lunchCount'];
					$id = $rowsL['lunch_id'];
					

					if($ass_arrL[$day][0] < $l_c)
					{
						$ass_arrL[$day][0] = $l_c;
						$ass_arrL[$day][1] = $id;
					}
				}
				$varL1 = $ass_arrL['Monday'][1];  
				$vl1 = "select item_name from `lunch-sabzi` where lunch_id='$varL1'";
				$rl1=mysqli_query($con,$vl1);
				$l1 = mysqli_fetch_array($rl1);
				$L1=$l1[0];

				$varL2 = $ass_arrL['Tuesday'][1];
				$vl2 = "select item_name from `lunch-sabzi` where lunch_id='$varL2'";
				$rl2=mysqli_query($con,$vl2);
				$l2 = mysqli_fetch_array($rl2);
				$L2=$l2[0];

				$varL3 = $ass_arrL['Wednesday'][1];
				$vl3 = "select item_name from `lunch-sabzi` where lunch_id='$varL3'";
				$rl3=mysqli_query($con,$vl3);
				$l3 = mysqli_fetch_array($rl3);
				$L3=$l3[0];

				$varL4 = $ass_arrL['Thursday'][1];
				$vl4 = "select item_name from `lunch-sabzi` where lunch_id='$varL4'";
				$rl4=mysqli_query($con,$vl4);
				$l4 = mysqli_fetch_array($rl4);
				$L4=$l4[0];

				$varL5 = $ass_arrL['Friday'][1];
				$vl5 = "select item_name from `lunch-sabzi` where lunch_id='$varL5'";
				$rl5=mysqli_query($con,$vl5);
				$l5 = mysqli_fetch_array($rl5);
				$L5=$l5[0];

				$varL6 = $ass_arrL['Saturday'][1];
				$vl6 = "select item_name from `lunch-sabzi` where lunch_id='$varL6'";
				$rl6=mysqli_query($con,$vl6);
				$l6 = mysqli_fetch_array($rl6);
				$L6=$l6[0];

				$varL7 = $ass_arrL['Sunday'][1];
				$vl7 = "select item_name from `lunch-sabzi` where lunch_id='$varL7'";
				$rl7=mysqli_query($con,$vl7);
				$l7 = mysqli_fetch_array($rl7);
				$L7=$l7[0];

				$ass_arrD = array('Monday' => array(0,0),'Tuesday' => array(0,0),'Wednesday' => array(0,0),'Thursday' => array(0,0),'Friday' => array(0,0),'Saturday' => array(0,0),'Sunday' => array(0,0));

				$queryD = "select day,dinner_id,count(dinner_id) as dinnerCount from `student_menu` group by day,dinner_id";
				$resultD=mysqli_query($con,$queryD);	

				while ($rowsD = mysqli_fetch_array($resultD)) {
					$day = $rowsD['day'];
					$d_c = $rowsD['dinnerCount'];
					$id = $rowsD['dinner_id'];
					

					if($ass_arrD[$day][0] < $d_c)
					{
						$ass_arrD[$day][0] = $d_c;
						$ass_arrD[$day][1] = $id;
					}
				}


				$varD1 = $ass_arrL['Monday'][1];  
				$vd1 = "select item_name from dinner_sabzi where dinner_id='$varD1'";
				$rd1=mysqli_query($con,$vd1);
				$d1 = mysqli_fetch_array($rd1);
				$D1=$d1[0];

				$varD2 = $ass_arrL['Tuesday'][1];
				$vd2 = "select item_name from `dinner_sabzi` where dinner_id='$varD2'";
				$rd2=mysqli_query($con,$vd2);
				$d2 = mysqli_fetch_array($rd2);
				$D2=$d2[0];

				$varD3 = $ass_arrL['Wednesday'][1];
				$vd3 = "select item_name from `dinner_sabzi` where dinner_id='$varD3'";
				$rd3=mysqli_query($con,$vd3);
				$d3 = mysqli_fetch_array($rd3);
				$D3=$d3[0];

				$varD4 = $ass_arrL['Thursday'][1];
				$vd4 = "select item_name from `dinner_sabzi` where dinner_id='$varD4'";
				$rd4=mysqli_query($con,$vd4);
				$d4 = mysqli_fetch_array($rd4);
				$D4=$d4[0];

				$varD5 = $ass_arrL['Friday'][1];
				$vd5 = "select item_name from `dinner_sabzi` where dinner_id='$varD5'";
				$rd5=mysqli_query($con,$vd5);
				$d5 = mysqli_fetch_array($rd5);
				$D5=$d5[0];

				$varD6 = $ass_arrL['Saturday'][1];
				$vd6 = "select item_name from `dinner_sabzi` where dinner_id='$varD6'";
				$rd6=mysqli_query($con,$vd6);
				$d6 = mysqli_fetch_array($rd6);
				$D6=$d6[0];

				$varD7 = $ass_arrL['Sunday'][1];
				$vd7 = "select item_name from `dinner_sabzi` where dinner_id='$varD7'";
				$rd7=mysqli_query($con,$vd7);
				$d7 = mysqli_fetch_array($rd7);
				$D7=$d7[0];
				
?>

				<tr>
			<td align="center">Monday</td>
			<td align="center"><?php echo $L1 ?></td>
			<td align="center"><?php echo $D1 ?></td>






			<td align="center"><b>Lunch:</b>12:30pm-2pm<br><b>Dinner:</b>8pm-9:30pm</td>
				</tr>
				<tr>
			<td align="center">Tuesday</td>
			<td align="center"><?php echo $L2 ?></td>
			<td align="center"><?php echo $D2 ?></td>





			<td align="center"><b>Lunch:</b>12:30pm-2pm<br><b>Dinner:</b>8pm-9:30pm</td>
				</tr>
				<tr>
			<td align="center">Wednesday</td>
			<td align="center"><?php echo $L3 ?></td>
			<td align="center"><?php echo $D3 ?></td>




			<td align="center"><b>Lunch:</b>12:30pm-2pm<br><b>Dinner:</b>8pm-9:30pm</td>
				</tr>
				<tr>
			<td align="center">Thursday</td>
			<td align="center"><?php echo $L4 ?></td>
			<td align="center"><?php echo $D4 ?></td>



			<td align="center"><b>Lunch:</b>12:30pm-2pm<br><b>Dinner:</b>8pm-9:30pm</td>
				</tr>
				<tr>
			<td align="center">Friday</td>
			<td align="center"><?php echo $L5 ?></td>
			<td align="center"><?php echo $D5 ?></td>


			<td align="center"><b>Lunch:</b>12:30pm-2pm<br><b>Dinner:</b>8pm-9:30pm</td>
				</tr>
				<tr>
			<td align="center">Saturday</td>
			<td align="center"><?php echo $L6 ?></td>
			<td align="center"><?php echo $D6 ?></td>

			<td align="center"><b>Lunch:</b>12:30pm-2pm<br><b>Dinner:</b>8pm-9:30pm</td>
				</tr>
				<tr>
			<td align="center">Sunday</td>
			<td align="center"><?php echo $L7 ?></td>
			<td align="center"><?php echo $D7 ?></td>
			<td align="center"><b>Lunch:</b>12:30pm-2pm<br><b>Dinner:</b>8pm-9:30pm</td>
				</tr>
				<!-- /* echo "Monday :  $var1 "; 
				echo "Tuesday : $var2 "; <br>
				echo "Wednesday : $var3 "; <br>
				echo "Thursday : $var4 "; <br>
				echo "Friday : $var5 "; <br>
				echo "Saturday : $var6 "; <br>
				echo "Sunday : $var7 ";*/
					
				/*$sqlDinner="select day,dinner_id,max(dinnerCount) from (select day,dinner_id,count(dinner_id) as dinnerCount from `student_menu` group by day,dinner_id) as MaxDinnerCount group by day order by dinner_id";
				$rsDinner=mysqli_query($con,$sqlDinner);				
					
				while(($rowLunch=mysqli_fetch_array($rsLunch)) && ($rowDinner=mysqli_fetch_array($rsDinner)))
				{
					$dayL=$rowLunch[0];
					$lunchId=$rowLunch[1];
					$dinnerId=$rowDinner[1];
					
					$sql1="select item_name from `lunch-sabzi` where lunch_id='$lunchId' limit 1";
					$rs1=mysqli_query($con,$sql1);			
					$itemNameL=mysqli_fetch_array($rs1)[0];
					
					$sql2="select item_name from dinner_sabzi where dinner_id=$dinnerId limit 1";
					$rs2=mysqli_query($con,$sql2);
					$itemNameD=mysqli_fetch_array($rs2)[0];
						
			*/ -->
				
		  
   
   </table>
   	</div>
<ul><b>
	<div class="abc">
  <li  ><a href="index.php">Back</a></li>
    <li><a href="choice.php">Give Choices</a></li>

</div></b>
</ul>
   </header>



</body>
</html>