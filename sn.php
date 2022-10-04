
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//db.onlinewebfonts.com/c/3f610a59a3c8a0229084ea3e1312738c?family=Helvetica" rel="stylesheet" type="text/css"/>   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/formulario.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" media="(max-width: 800px)" href="example.css" />
    <script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
    <title>Tabla de Registros</title>
</head>
<body>
    <br>
    <br>
    <div class="row">
        <h1 style="text-align:center">ESTACIONAPP</h1>
    </div>
    <br>
    <br>


   <br>
   <br> 
<br>
<div class="container">
			
			
			
              <br>
              <br>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nombre: </b><input type="text" id="campo" name="campo">
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info">
				</form>
           
</div>
<br>
<br>
<div>
<table class="table table-striped" style= "width:85%; margin-left: 3cm;">
    <h2 align="center">Datos de usuario</h2>
    <thead>
    <tr>
        <th>ID</th> 
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Fecha</th>
        <th>Ciudad</th>
        <th>Estacionamiento</th>
        <th>Vehículo</th>
        <th>Modelo</th>
        <th>Año</th>

</tr>
</thead>

<tbody>
<?php
$conexion = mysqli_connect("localhost","root","","admin01");


$sql= "SELECT nombre,usuario,email from usuarios";
$sql = "SELECT * from estacionamientos";
$sql = "SELECT * from autos";

$resultado = mysqli_query($conexion,$sql);

while($row = mysqli_fetch_array($resultado)){
?>
    <tr>
    
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['apellido']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['fecha']; ?></td>
        <td><?php echo $row['ciudad']; ?></td>
        <td><?php echo $row['lugar']; ?></td>
        <td><?php echo $row['tipo']; ?></td>
        <td><?php echo $row['modelo']; ?></td>
        <td><?php echo $row['año']; ?></td>
        <td> <a href= "modificar.php?id= <?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
        <td><input type= "submit" class= "btn btn-warning" value= "Eliminar"></td>
       
    </tr>
    <?php } ?>
</tbody>

</table>
</body>
</html>