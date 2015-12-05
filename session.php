<?php
	session_start();

	if ($_SESSION["code"] == "hello") {
		echo "";
	} else {
		header("Location: login.php");
	}

?>