<!DOCTYPE html>
<html>
<head>
	<title>lesson-7</title>
	<style>

	</style>
</head>
<body>

<ul>
		<li>
			<strong>Name: </strong> <?= $task['title']; ?>
		</li>
		<li>
			<strong>Due date: </strong> <?= $task['due']; ?>
		</li>
		<li>
			<strong>Responsible: </strong> <?= $task['assigned_to']; ?>
		</li>
		<li>
			<strong>Status: </strong> <?=  $task['completed'] ? 'Completed' : 'Incomplete';  ?>
		</li>
</ul>



</body>
</html>