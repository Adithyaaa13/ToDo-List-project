<?php

$conn = mysqli_connect("localhost","root","", "todolist");

if ($conn) {
	echo "success";
}
else{
    echo "failure";
}
?>