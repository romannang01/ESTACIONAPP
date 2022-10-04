<?php

// Variables
$hostDB = 'localhost';
$nombreDB = 'admin01';
$usuarioDB = 'root';
$contrasenyaDB = '';
// Conecta con base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
// Prepara SELECT
$miConsulta = $miPDO->prepare('SELECT * FROM estacionamiento;');
// Ejecuta consulta
$miConsulta->execute();
