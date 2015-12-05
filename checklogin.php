<?php


	if ($_POST["pass"] == "somuch17") {
		session_start();
		$_SESSION["code"] = "hello";
		header("Location: index.php");
	} else {
		header("Location: login.php");
	}

?>