<?php

	include "session.php";

	$result = mysqli_query($con, "INSERT INTO deleted SELECT * FROM content WHERE id = " . $_GET['id']);
	$result2 = mysqli_query($con, "DELETE FROM content WHERE id = " . $_GET['id']);

	header("Location: index.php");

?>