<?php 
$contrasena = "";
$usuario = "root";
$nombre_bd = "admin01";
$host_bd = "localhost";

try {
	$bd = new PDO (
		'mysql:host=localhost;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (PDOException $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>