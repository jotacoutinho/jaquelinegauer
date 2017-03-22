<?php
	
		mysql_connect("localhost:70/phpmyadmin", "root", "vertrigo") or die(mysql_error());
   		mysql_select_db("jaquelinegauer") or die(mysql_error());

		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];

		try
		{
			$sql = "INSERT INTO clients VALUES('$id', '$name', '$email'";
			$result = mysql_query($sql) or die(mysql_error());	
			echo "1";
		}
		catch(Exception $ex)
		{

			echo "0";
		}
		
?>