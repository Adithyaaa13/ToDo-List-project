<ul>
	<?php
	require 'conn.php';

	$sql = "SELECT * FROM tbl_task";
	$result = $conn->query($sql);

	while($row = $result->fetch_assoc()) {
		echo "<li". ($row["completed"]? " class='completed'" : ""). ">". $row["task"]. "<button onclick=\"window.location.href='complete.php?id=". $row["id"]. "'\">Complete</button><button onclick=\"window.location.href='update.php?id=". $row["id"]. "'\">Update</button><button onclick=\"window.location.href='delete.php?id=". $row["id"]. "'\">Delete</button></li>";
	}
	?>
</ul>