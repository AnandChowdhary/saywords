<?php

	$email = $_POST["email"];
	$con = mysqli_connect("classrebelscom2.fatcowmysql.com", "anand", "anand", "hungryowl");
	$result = mysqli_query($con, "INSERT INTO emails (email) VALUES ('$email')");
	header("Location: http://hungryowl.in/ty.html");

?>