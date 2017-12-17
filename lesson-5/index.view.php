<!DOCTYPE html>
<html>
<head>
	<title>lesson-6</title>
	<style type="text/css">
		header {
			background: rgba(255,255,155,100); ;
			padding: 2em;
			text-align: left;
		}
	</style>
</head>
<body>

	<header>

		<h1>
			<?php 

				foreach ($names as $name) {
					echo "<li> $name </li>";
				}

			 ?>

		</h1>

	</header>



</body>
</html>