<?php

	session_start();

	if (isset($_SESSION["words"])) {

		$con = mysqli_connect("localhost", "root", "", "words");

		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error() . ". You should probably yell at me, love.";
		}

	} else {
		if (isset($now)) {
			header("Location: index.php?prev=" . $now);
		} else {
			header("Location: index.php");
		}
	}

?>