<?php

	echo "INICIAR CONEXAO MYSQL";
	$conn = mysql_connect('localhost:70/phpmyadmin', 'root', 'vertrigo');
	$db = mysql_select_db('jaquelinegauer');


?>