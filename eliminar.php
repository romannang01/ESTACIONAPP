<?php

$conexion = mysqli_connect("localhost","root","","admin01");

$id = $_GET['id'];

$sql= "DELETE nombre,apellido,email,telefono,estacionamientos.fecha,estacionamientos.lugar,estacionamientos.ciudad,autos.tipo,autos.modelo,autos.patente,autos.año FROM usuarios WHERE id = '$id'";

$resultado = mysqli_query($conexion,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/eliminar.css">

    <title>Eliminar</title>
</head>
<body>

<div align= "center" style= "margin-top:5cm">

<?php if($resultado) { ?>
				<h3>REGISTRO ELIMINADO</h3>
                <?php } ?>
</div>

</body>

<script>

    function alerta(){
        alert("Usuario eliminado");
    }
    </script>
</html>