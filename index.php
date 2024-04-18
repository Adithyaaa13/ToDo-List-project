<!DOCTYPE html>
<html>
<head>
	<title>To-Do List</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h1>To-Do List</h1>
	<form method="post" action="add.php">
		<input type="text" name="task" placeholder="Add a new task...">
		<button type="submit">Add</button>
	</form>
	<ul>
		<?php include 'tasks.php';?>
	</ul>
</body>
</html>