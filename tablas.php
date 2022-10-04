


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//db.onlinewebfonts.com/c/c03f80ccf879e6f840ca56279854945e?family=Helvetica+Neue" rel="stylesheet" type="text/css"/>     
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="tabla.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" media="(max-width: 800px)" href="example.css" />
    <title>Tabla de Registros</title>
</head>
<body>
    
    <h2 class="text-success text-decoration-underline" align="center">Datos de usuario</h2>
    <br>

    <form action="<?php $_SERVER['PHP_SELF']; ?> " method= "POST">
        <a>Nombre: </a> <input type="text" name="campo" id="campo">
        <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-primary"> 
        
        <button class= "btn btn-success" type="submit" href="modificar.php?id= <?php echo $row['id']; ?>">Actualizar</button>
    </form>

    <table class="table table-striped" style= "width: 100%;">
        
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>


                <th>Fecha</th>
                <th>Ciudad</th>
                <th>Estacionamiento</th>
                <th>Vehiculo</th>
                <th>Modelo</th>
                <th>Patente</th>
                <th>Año</th>
            </tr>
        </thead>

        <tbody>
            <?php 
           

            
          
            $resultado = mysqli_query($conexion,$sql);

           while($row = mysqli_fetch_assoc($resultado))
           { do {

            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
                <td><?php echo $row['telefono']; ?></td>
            <?php } ?>

            <?php 

                <td><?php echo $row['fecha']; ?></td>
                <td><?php echo $row['ciudad']; ?></td>
                <td><?php echo $row['lugar']; ?></td>
                <td><?php echo $row['tipo']; ?></td>             
                <td><?php echo $row['modelo']; ?></td>
                <td><?php echo $row['patente']; ?></td>
                <td><?php echo $row['año']; ?></td>
                
            </tr>
            <?php } ?>
        </tbody>

    </table>

  
</body>
</html>