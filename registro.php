<?php

$conexion = mysqli_connect('localhost','root','','admin01')
 or die("Problemas con la conexión");


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];
$ciudad = $_POST['ciudad'];
$estacionamiento = $_POST['lugar'];
$tipo = $_POST['tipo'];
$modelo = $_POST['modelo'];
$patente = $_POST['patente'];
$año = $_POST['año'];


    
   $sql = "INSERT INTO usuarios(nombre,apellido,email,telefono) 
   VALUES('$nombre','$apellido','$email','$telefono')";
    $resultado = mysqli_query($conexion,$sql);

    $sql= "INSERT INTO estacionamientos(fecha,ciudad,lugar)
    VALUES('$fecha','$ciudad','$estacionamiento')";

    $resultado= mysqli_query($conexion,$sql);

    $sql = "INSERT INTO autos(tipo,modelo,patente,año) 
    VALUES('$tipo','$modelo','$patente','$año')";
     $resultado = mysqli_query($conexion,$sql);

   

header('location:ciudades.html');
   
    ?>





    



