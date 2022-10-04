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
<div class= "container" style="margin-top:5cm">
    
    <h3 align= "center">¿Desea eliminar este registro?</h3>
    <div class="row">
        <?php
        if($resultado){
    <button type="submit" class= "btn btn-primary" style= "width: 20px">Sí</button>
}else{
     <a href="registrar.php"> <button type="submit" class="btn btn-light">No</button></a>
}
</div>

</div>

</body>
</html>