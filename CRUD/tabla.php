



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/style/city.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    <title>Registro de Usuarios</title>
</head>
<body>

    <style>
        p input {
            margin-left: 10px;
        }
        p {
            
            text-align:left;
        }
       table{
        margin-left: 5cm;
      
       }
        body{
            width: 80%;
        }

      
       .cont{
        margin-top: 1cm;
       }
    </style>

    <div class="p-4 text-primary" align="center" >
        <h2>CRUD de Usuarios</h2>
    </div>


<p>
    <input type= "text" name="buscar">
    <a href= "buscar.php" class="btn btn-success" align= "left">Buscar Nombre</a>
    </p>
<br>
<br>
    <div class="table table-striped" style="display: flex; flex-direction:row;">

        <table class="table align-middle">
            <thead>
            <tr>

            
                <th scope="col">Fecha</th>
                <th scope="col">Patente</th>
                <th scope="col">Tipo</th>
                <th scope="col">Modelo</th>
                <th scope="col">Año</th>
                <th scope="col">Llegada</th>
                <th scope="col">Salida</th>
                

            </tr>
        </thead>

        <tbody>
      



<?php


    
  
    $conexion=mysqli_connect("localhost","root","","admin01") or
    die("Problemas con la conexión");
    

    
   $registros = mysqli_query($conexion,"SELECT * FROM estacionamiento")
    or die("Problemas en el select".mysqli_error($conexion));
 
   
   

        foreach ($registros as $row){
            echo '<tr>';

              echo '<td scope="row">' .$row['fecha']. '</td>'; 
              echo '<td scope="row">' .$row['patente']. '</td>'; 
              echo '<td scope="row">' .$row['tipo']. '</td>'; 
              echo '<td scope="row">' .$row['modelo']. '</td>'; 
              echo '<td scope="row">' .$row['año']. '</td>'; 
              echo '<td scope="row">' .$row['llegada']. '</td>'; 
              echo '<td scope="row">' .$row['salida']. '</td>';               

          echo  '</tr>';
            
        }
        mysqli_close($conexion);
    
        ?>
        </tbody>
        </table>
 
    </div>


<br>
<br>
<br>


<br>
<br>
<br>
<br>



</body>
</html>