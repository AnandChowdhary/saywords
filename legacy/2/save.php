<?php

	include "session.php";

	$id = $_POST["id"];
	$title = $_POST["title"];
	$updated_on = date("d-m-Y");
	$data = $_POST["data"];

	$result = mysqli_query($con, "UPDATE content SET title = '$title', updated_on = '$updated_on', data = '$data' WHERE id = '$id'");

	header("Location: index.php");

?>