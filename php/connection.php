<?php
	$host = localhost;
	$username = "root_user";
	$password = "root";
	$database = "clima_laboral";

	$link = new mysqli('localhost',$username,$password,$database);
	if($link->connection_error) {
				die("DB connection failed:" . $link->connection_error);
			}
	//@mysql_select_db($database) or die("Unable to select database");
?>