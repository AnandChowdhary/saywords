<?php

	$now = $_GET['id'];
	include "session.php";
	$result = mysqli_query($con, "SELECT * FROM content WHERE id = " . $_GET['id']);

?>

<!doctype html>
<html lang="en">

	<head>

		<title>Words</title>

		<meta charset="utf-8">
		<meta name="author" content="Anand Chowdhary">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="icon" type="image/png" href="http://pbs.twimg.com/profile_images/443647446430646273/3KPu2McK.png">
		<link rel="apple-touch-icon-precomposed" href="http://pbs.twimg.com/profile_images/443647446430646273/3KPu2McK.png">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="styles.css">

		<!--[if lt IE 9]>
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>

		<div class="container">

			<div class="col-md-7">

			<?php

				while($row = mysqli_fetch_array($result)) {
					echo '<h1>' . $row["title"] . '</h1>';
					echo '<textarea disabled>' . $row["data"] . '</textarea>';
					echo '<p class="posted-on">Published on ' . $row["created_on"] . '. Last modified on ' . $row["updated_on"] . '</p>';
				}

			?>

			<p>&nbsp;</p><p><a href="index.php">&larr; Back Home</a></p>

			</div>

		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="elastic.js"></script>
		<script type="text/javascript">

			$(function() {
				$("textarea").elastic();
			});

		</script>

	</body>

</html>