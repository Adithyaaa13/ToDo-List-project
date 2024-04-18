<?php
require 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$task = $_POST['task'];
	$sql = "INSERT INTO tbl_task (task, completed) VALUES ('$task', 0)";
	$conn->query($sql);
	header('Location: index.php');
}
?>