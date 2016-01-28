<?php

	include "session.php";

	$title = htmlspecialchars($_POST["title"], ENT_QUOTES);
	$created_on = date("d-m-Y");
	$updated_on = date("d-m-Y");
	$data = htmlspecialchars($_POST["data"], ENT_QUOTES);

	$result = mysqli_query($con, "INSERT INTO content (id, title, created_on, updated_on, data) VALUES ('', '$title', '$created_on', '$updated_on', '$data')");

	header("Location: index.php");

?>