<?php
require 'conn.php';

$id = $_GET['id'];
$sql = "DELETE FROM tbl_task WHERE id = $id";
$conn->query($sql);
header('Location: index.php');
?>