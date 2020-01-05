<?php
$con = mysqli_connect("localhost","root","","login");
if(mysqli_connect_errno($con))
{
	echo mysqli_connect_error();
}
?>