<?php include "session.php" ?>
<?php

				$servername = "localhost";
				$username = "anand";
				$password = "anand";
				$dbname = "words2";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn -> connect_error) {
		die("Connection failed: " . $conn -> connect_error);
	} 

		$sql = "INSERT INTO content (content, date, status)
	VALUES ('" . urlencode($_POST["contt"]) . "', '" . date("d-m-Y") . "', 'published')";

	if ($conn->query($sql) === TRUE) {
		header("Location: index.php");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn -> close();

?>