<!DOCTYPE html>
<html>
<head>
	<title>lesson-6</title>
</head>
<body>
	
	
	<ul> 
		<?php foreach ($person as $key => $value) : ?>
			<li>
				<strong><?= $key; ?></strong> <?= $value; ?>
			</li>
		<?php endforeach; ?>	
	</ul>


</body>
</html>

