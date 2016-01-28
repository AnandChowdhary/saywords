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

			<p style="margin-bottom: 30px;"><strong>Words 3</strong></p>

			<?php

				$servername = "localhost";
				$username = "anand";
				$password = "anand";
				$dbname = "words2";

				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn -> connect_error) {
					die("Connection failed: " . $conn -> connect_error);
				} 

				$sql = "SELECT * FROM content ORDER BY id DESC";
				$result = $conn -> query($sql);

				if ($result -> num_rows > 0) {
					while($row = $result -> fetch_assoc()) {
				?>

				<a class="row" href="view.php?id=<?php echo $row['id'] ?>">
					<div class="col-md-3 date"><?php echo $row["date"] ?></div>
					<?php
						$semiinitial = explode("<h2>", urldecode($row["content"]));
						$initial = explode("</h2>", $semiinitial[1]);
						$final = $initial[0];
					?>
					<div class="col-md-9"><?php echo $final; ?></div>
				</a>

				<?php
					}
				} else {
					echo "0 results";
				}
				$conn -> close();

			?>

			<p style="margin-top: 30px;"><a href="write.php">Write</a> | <a href="logout.php">Log out</a></p>

		</div>

	</body>

</html>