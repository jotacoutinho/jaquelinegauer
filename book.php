<?php

		echo "INICIAR CONEXAO MYSQL";
	
		mysql_connect("http://localhost:70", "root", "vertrigo") or die(mysql_error());
   		mysql_select_db("jaquelinegauer") or die(mysql_error());

		$id = $_POST['clientId'];
		$name = $_POST['clientName'];
		$email = $_POST['clientEmail'];

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