<?php
include('update_task.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Task</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h1>Update Task</h1>
	<form method="post" action="update_task.php">
		<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
		<input type="text" name="task" value="<?php echo $task;?>" required>
		<button type="submit">Update</button>
	</form>
</body>
</html>