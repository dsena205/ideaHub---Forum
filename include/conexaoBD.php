<?php

	$server_name = 'localhost';
	$user_name = 'root';
	$password = '';
	$db_name = 'PERGUNTAS';

	$connection = mysqli_connect($server_name,$user_name,$password,$db_name);

	mysqli_set_charset($connection,"utf8");

	if (mysqli_connect_error()) {
		echo "Erro ao conectar com o banco de dados" . mysqli_connect_error();
	}