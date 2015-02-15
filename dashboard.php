<?php
	include "session.php";
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

		<div class="container">
			
			<header>
				<div class="logo"><i class="ion-heart"></i></diV>
				<a class="new-post button button-primary" href="/new"><i class="ion-plus-round"></i>New Post</a>
			</header>

			<main>
				<ul class="items">
					<?php
							$con = mysqli_connect("classrebelscom2.fatcowmysql.com", "anand", "anand", "words");
							if (mysqli_connect_errno()) {
								echo "<span style='font-weight:bold;color:#c33'>Error: </span>Failed to connect to MySQL: " . mysqli_connect_error();
							}
							$result = mysqli_query($con, "SELECT * FROM content ORDER BY id DESC");
							while($row = mysqli_fetch_array($result)) {
								echo '<li>';
									echo '<a class="item" href="read.php?id=' . $row["id"] . '"><span>' . $row["created_on"] . '</span>' . $row["title"] . '</a>';
									echo '<a data-tt="View" href="read.php?id=' . $row["id"] . '"><i class="ion-eye"></i></a>';
									echo '<a data-tt="Edit" href="edit.php?id=' . $row["id"] . '"><i class="ion-edit"></i></a>';
									echo '<a data-tt="Delete" href="delete.php?id=' . $row["id"] . '"><i class="ion-trash-a"></i></a>';
								echo '</li>';
							}
						?>
				</ul>
			</main>

			<footer>
				<p><a href="/logout">Logout</a></p>
			</footer>

		</div>

	</body>

</html>