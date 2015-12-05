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

	</head>

	<body>

		<div class="container">

			<?php

				$servername = "localhost";
				$username = "anand";
				$password = "anand";
				$dbname = "words2";

				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "SELECT * FROM content WHERE id = " . $_GET["id"];
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
				?>

				<div class="editable">
					<?php echo urldecode($row["content"]); ?>
				</div>

				<?php
					}
				} else {
					echo "0 results";
				}
				$conn->close();

			?>

			<p style="margin-top: 30px;"><a href="index.php">Home</a>  | <a href="delete.php?id=<?php echo $_GET['id'] ?>">Delete</a>  | <a href="logout.php">Log out</a></p>

		</div>

	</body>

</html>