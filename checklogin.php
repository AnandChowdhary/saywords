<?php

	$password = $_POST["password"];

	if ($password == "password") {

		session_start();
		$_SESSION["words"] = 1;

		include "log.php";
		header("Location: dashboard.php");

	} else {

		header("Location: index.php");

	}

?>