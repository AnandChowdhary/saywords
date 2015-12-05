<?php

	include "session.php";

				$servername = "localhost";
				$username = "anand";
				$password = "anand";
				$dbname = "words2";

				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn -> connect_error) {
					die("Connection failed: " . $conn -> connect_error);
				}

	$result = mysqli_query($conn, "INSERT INTO deleted SELECT * FROM content WHERE id = " . $_GET['id']);
	$result2 = mysqli_query($conn, "DELETE FROM content WHERE id = " . $_GET['id']);

	header("Location: index.php");

?>