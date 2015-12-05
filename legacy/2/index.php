<?php

	session_start();

	if (isset($_SESSION["words"])) {
		header("Location: dashboard.php");
	}

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

		<div class="center-middle">
			<div class="logo"><i class="ion-heart"></i></diV>
			<p class="hero"><b>Words</b> doesn&rsquo;t come in the way<br>of you and your thoughts.</p>
			<form id="loginForm" method="post" action="checklogin.php">
				<input class="login" type="password" name="password" placeholder="Login">
				<input class="hide" type="submit">
				<div class="password-tt">Enter your password</div>
			</div>
		</div>

		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(".login").focus(function() {
					$(".password-tt").show();
				});
				$(".login").blur(function() {
					$(".password-tt").hide();
				});
				$(".login").keydown(function() {
					if ($(this).val().length == 7) {
						setTimeout(function() {
							$("#loginForm").submit();
						}, 1);
					}
				});
			});
		</script>

	</body>

</html>