<?php 
function Conectar()
{
	$conn = null;
	$host = "localhost";
	$db = "hydrabd";
	$user = "root";
	$password = "";
	try{
		$conn = new PDO("mysql:host=".$host.";dbname=".$db, $user, $password);

	}catch(PDOException $e)
	{
		echo ":( Error de conexión".$e;
		exit;
	}
	return $conn;
}

 ?>