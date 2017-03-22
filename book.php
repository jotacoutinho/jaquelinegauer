<?php
	
		include_once('db.php');

		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];

		if(mysql_query("INSERT INTO clients VALUES('$id', '$name', '$email'"))
			echo "SUCCESS";
		else
			echo "ERROR";

?>