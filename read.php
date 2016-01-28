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
		<meta name="description" content="Words doesn't come in the way of you and your thoughts.">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="icon" type="image/png" href="icon.png">
		<link rel="apple-touch-icon-precomposed" href="icon.png">

		<link rel="stylesheet" type="text/css" href="//anandchowdhary.com/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="//anandchowdhary.com/css/skeleton.css">
		<link rel="stylesheet" type="text/css" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" type="text/css" href="styles.css">

		<script src="//use.typekit.net/rpy8gxl.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>

	</head>

	<body>

	<?php

		while($row = mysqli_fetch_array($result)) {

	?>

		<div class="container">
			
			<header class="fixed">
				<div class="container">
					<div class="logo"><i class="ion-heart"></i></diV>
					<a class="new-post button button-primary" href=<?php echo 'edit.php?id=' . $row["id"] ?> style="cursor: pointer"><i class="ion-edit"></i>Edit</a>
					<a class="cancel-post button" style="cursor: pointer" href="/dashboard"><i class="ion-chevron-left"></i>Back</a>
					</div>
			</header>

			<main class="writer">
				<div class="writer-header"><?php echo $row["title"]; ?></div>
				<div class="writer-content"><?php echo htmlspecialchars_decode($row["data"]); ?></div>
			</main>

	<?php

		}

	?>

			<footer>
				<p><a href="/logout">Logout</a></p>
			</footer>

		</div>

	</body>

</html>