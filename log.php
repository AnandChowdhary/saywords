<?php

	date_default_timezone_set("Asia/Kolkata");
	
	$ip = $_SERVER["REMOTE_ADDR"];
	$leadte = date("d-m-Y");
	$letime = date("G:i:s");

	include "session.php";

	$result = mysqli_query($con, "INSERT INTO log (ip, date, time) VALUES ('$ip', '$leadte', '$letime')");

?>