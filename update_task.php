<?php
require 'conn.php';

$id = $_POST['id'];
$task = $_POST['task'];

$sql = "SELECT * FROM tbl_task WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$task = $row["task"];
}

$sql = "UPDATE tbl_task SET task = '$task' WHERE id = $id";
$conn->query($sql);
header('Location: index.php');
?>
