<!doctype html>
<html lang="en">

	<head>

		<title>New Post &mdash; Words</title>

		<meta charset="utf-8">
		<meta name="author" content="Anand Chowdhary">
		<meta name="description" content="Words doesn't come in the way of you and your thoughts.">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="icon" type="image/png" href="icon.png">
		<link rel="apple-touch-icon-precomposed" href="icon.png">

		<link rel="stylesheet" type="text/css" href="//anandchowdhary.com/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="//anandchowdhary.com/css/skeleton.css">
		<link rel="stylesheet" type="text/css" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

		<script type="text/javascript" src="libs/FileSaver.min.js"></script>
		<script type="text/javascript" src="libs/Blob.min.js"></script>
		<script type="text/javascript" src="libs/screenfull.min.js"></script>
		<script type="text/javascript" src="utils.js"></script>
		<script type="text/javascript" src="editor.js"></script>
		<script type="text/javascript" src="ui.js"></script>

		<link rel="stylesheet" type="text/css" href="zen.css">
		<link rel="stylesheet" type="text/css" href="fonts.css">
		<link rel="stylesheet" type="text/css" href="styles.css">

		<script src="//use.typekit.net/rpy8gxl.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>

	</head>

	<body>

		<div class="container">
			
			<header class="fixed">
				<div class="container">
					<div class="logo" style="line-height: 52px"><i class="ion-heart"></i></diV>
					<a class="new-post button button-primary" style="cursor: pointer"><i class="ion-edit"></i>Publish</a>
					<a class="cancel-post button" style="cursor: pointer" href="/dashboard"><i class="ion-close-round"></i>Cancel</a>
					</div>
			</header>

		<div class="text-options">
			<div class="options">
				<span class="no-overflow">
					<span class="lengthen ui-inputs">
						<button class="url useicons">&#xe005;</button>
						<input class="url-input" type="text" placeholder="Type or Paste URL here"/>
						<button class="bold">b</button>
						<button class="italic">i</button>
						<button class="quote">&rdquo;</button>
					</span>
				</span>
			</div>
		</div>

		<section class="writer">
			
			<header contenteditable="true" class="header">
				Title
			</header>

			<article contenteditable="true" class="content">

				<p>Start writing here...</p>

			</article>

		</section>

		<form action="newsave.php" id="saveForm" method="post" style="display:none">
			<input name="title" id="title">
			<input name="data" id="data">
			<input type="submit" value="Save" class="savebtn button-primary">
		</form>

		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script type="text/javascript">
			ZenPen.editor.init();
			ZenPen.ui.init();
		</script>
		<script type="text/javascript">
			$(function() {
				$(".header").keyup(function() {
					$("#title").val($(this).html());
				});
				$(".content").keyup(function() {
					$("#data").val($(this).html());
				});
				$(".new-post").click(function() {
					$("#saveForm").submit();
				});
			});
		</script>

	</body>

</html>