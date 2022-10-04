<?php
class Database 
{
private static $dbName = 'admin01'; 
private static $dbHost = 'localhost';
private static $dbUsername = 'root';
private static $dbUserPassword = '';

private static $conexion = null;

public function __construct() {
die('Init-Función no permitida');
}

public static function connect() {
// Permitir solo una conexión para la totalidad del acceso
if ( null == self::$conexion )
{
  try
  {
    self::$conexion = new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
  }
  catch(PDOException $e)
  {
    die($e->getMessage());
  }
} 
return self::$conexion;
}

public static function disconnect()
{
self::$conexion = null;
}
}