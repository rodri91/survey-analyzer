<?php
	include('connection.php');

	 $query = "SELECT * FROM respuestas";
	// $result = mysqli_query($link,$query);

	$myArray = array();
	if ($result = mysqli_query($link,$query)) {
	    while($row = $result->fetch_object()) {
	            $myArray[] = $row;
	    }
	    echo json_encode($myArray);
	} else {
		echo "error";
	}

	mysqli_close($link);
	mysqli_close($result);
