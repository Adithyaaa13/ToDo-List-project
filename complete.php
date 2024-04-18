<?php
require 'conn.php';

$id = $_GET['id'];
$sql = "UPDATE tbl_task SET completed = 1 WHERE id = $id";
$conn->query($sql);
header('Location: index.php');
?>
