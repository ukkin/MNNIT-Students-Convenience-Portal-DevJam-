<html>
	<head>
		<link rel="stylesheet" type="text/css" href="form.css">
	</head>
	<body>
		<header>
			<div class="main">
				<div class="logo">
					<img src="logo2.png">
				</div>
				<ul>
					<b>
						<li><a href="home.php">Home</a></li>
						<li class="active"><a href="form.php">NOC</a></li>
						<li><a href="scholarship.php">Scholarship</a></li>
						<li><a href="index.php">Mess Menu</a></li>
						<li><a href="attendance.php">Attendance</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</b>
				</ul>
				<fieldset style = "width: 600px; margin:  400px ">
					<div class="new">
						<form method="post">
							<div class="white">
								<div class="left1">
									<br><br>
									<b>Hosting college : </b>
									<select  name="college" >
										<option value="MNNIT Allahabad">MNNIT Allahabad</option>
										<option value="IIT Kanpur">IIT Kanpur</option>
										<option value="IIT Delhi">IIT Delhi</option>
										<option value="IIT Kharagpur">IIT Kharagpur</option>
										<option value="IIT Roorkee">IIT Roorkee</option>
										<option value="MNIT Jaipur">MNIT Jaipur</option>
										<option value="NIT Nagpur">NIT Nagpur</option>
									</select>
									<br><br>
									<b>Types of events to take part in : </b><br><br>
									<div class="left2">
										<input type="checkbox" name="1" value="Dramatics"> Dramatics<br>
										<input type="checkbox" name="2" value="Sports"> Sports<br>
										<input type="checkbox" name="3" value="Music"> Music<br>
										<input type="checkbox" name="4" value="Athletics"> Athletics<br>
										<input type="checkbox" name="5" value="Technical"> Technical<br>
										<input type="checkbox" name="6" value="Dance"> Dance<br>
										<input type="checkbox" name="7" value="Arts"> Arts<br>
										<input type="checkbox" name="8" value="Literary"> Literary<br><br>
									</div>
									<b>Name of events </b>:<br>  
									<textarea rows="4" cols="50" name="comment" placeholder="All the events you will be taking part are to be mentioned here...." style="color:black;" ></textarea>
									<br><br>
									<b>Date of Event : </b><br>
									<div class="left2">
										<input type="date" id="date" name="from"> <br>
										<div class="left3">
											<div class="left4">
												TO
											</div>
											<input type="date" id="date" name="to">
										</div>
										<br><br>
									</div>
									<b>Comments : </b><br>
									<textarea rows="4" cols="50" name="comment1" placeholder="Describe in brief why you should be considered as suitable candidate to get NOC...."></textarea>
									<br><br>
									<input type ="checkbox" name="code of conduct" style="width:17px;height:17px;" required>I ACCEPT THE CODE OF CONDUCT<br>
									<h5>
									<br>
									By accepting Code of Conduct, You promise that no act of <br>disobedience will be performed on your behalf, and indulging<br> in any such activities will solely be your responsibility and<br> you will be held liable for it<br><br>
									<input type ="submit" name="Upload" value="Submit Form"><br><br><br><br>
								</div>
							</div>
						</form>
					</div>
				</fieldset>
			</div>
			<?php
				include('connect.php');
				
				if(isset($_POST['Upload']))
				{
				  $college= $_POST['college'];
				  $drams=$_POST['1'];
				  $sports=$_POST['2'];
				  $music=$_POST['3'];
				  $athl=$_POST['4'];
				  $tech=$_POST['5'];
				  $dance=$_POST['6'];
				  $arts=$_POST['7'];
				  $lit=$_POST['8'];
				  $eventn=$_POST['comment'];
				  $sdate= $_POST['from'];
				  $edate=$_POST['to'];
				  $cmt=$_POST['comment1'];
				  $id = $_SESSION[x];
				  
				$query="INSERT INTO noc (College, Dramatics, Sports, Music, Athletics, Technical, Dance, Arts, Literary, Eventname, Startdate, Enddate, Comment , student_id) VALUES ('$college','$drams','$sports','$music','$athl','$tech','$dance','$arts','$lit','$eventn', '$sdate', '$edate', '$cmt' , '$id')";
				echo "<script>$query</script>";
				if(mysqli_query($con, $query))
				{
				  echo "<script>alert('Form submitted successfully!')</script>";
				}
				else
				{
				  echo "<script>alert('Error in submitting form')</script>";
				}
				  }
				?>
		</header>
	</body>
</html>