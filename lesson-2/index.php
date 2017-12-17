
<!DOCTYPE html>
<html>
<head>
	<title>lesson-2</title>
	<style type="text/css">
		header {
			background: grey ;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>

	<header>

		<h1>
			<?php echo "hello, " .  htmlspecialchars($_GET['name']); ?>

		</h1>

	</header>



</body>
</html>