<?php
	include 'conn.php';
	
	$sql    = "SELECT * FROM b_cities WHERE isActive = 1";
	$result = mysqli_query($con,$sql);

	while ($row  = mysqli_fetch_row($result)) {
		echo "<option value='" .$row[1]. "'>" .$row[2]. "</option>";
	}

	mysqli_close($con);
?>