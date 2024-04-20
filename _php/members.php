<?php 
	include 'conn.php';
	
	$sql    = '
        SELECT 
            CONCAT(COUNT(a.id)," Members"),
            (SELECT 
                CONCAT(COUNT(a.id)," registered today") AS `count`
            FROM
                b_subscribers a
            WHERE
                DATE(a.dateCreated) = DATE(NOW()))
        FROM
            b_subscribers a
    ';
	$result = mysqli_query($con,$sql);

	while ($row  = mysqli_fetch_row($result)) {
        echo '' .
        '<div class="font-weight-medium">' . $row[0] . '</div>'.
        '<div class="text-muted">' . $row[1] . '</div>';
	}

	mysqli_close($con);
?>