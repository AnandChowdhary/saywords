<?php include "session.php" ?>
<!doctype html lang="en">
<html>

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Words 3</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script src="//cdn.jsdelivr.net/medium-editor/latest/js/medium-editor.min.js"></script>
		<link rel="stylesheet" href="//cdn.jsdelivr.net/medium-editor/latest/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">
		

	</head>

	<body>

		<div class="container">

			<div class="editable">
				<h2>Title</h2>
				<p>Start writing here...</p>
			</div>

			<form action="publish.php" method="post">
				<textarea  style="display: none" id="contt" name="contt"></textarea>
				<input type="submit" value="Save" class="save-btn">
			</form>

			<p style="margin-top: 30px;"><a href="index.php">Home</a> | <a href="logout.php">Log out</a></p>

		</div>

		<script>var editor = new MediumEditor('.editable');</script>

		<script type="text/javascript">
			window.onload = function() {
				document.querySelector(".editable").addEventListener("keyup", function() {
					document.querySelector("#contt").innerHTML = this.innerHTML;
				});
				setInterval(function() {
					document.querySelector("#contt").innerHTML = document.querySelector(".editable").innerHTML;
				}, 5000);
			}
		</script>

	</body>

</html>