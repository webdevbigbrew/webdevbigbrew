<?php
	include('conn.php');
	include('open.js');
 
	$name=$_POST['name'];
	$email=$_POST['email'];
	$date=$_POST['date'];
	$time=$_POST['time'];
 
	mysqli_query($conn,"insert into `rsvt` (name,email,date,time) values ('$name','$email','$date','$time')");
	header('location:reservation.php');
      //<a href="index.php">Back</a>


?>