<?php
if(isset($_POST['search'])){
    $keywords = $_POST['buscar'];



$conexion = mysql_connect("localhost","root","","admin01");
mysqli_select_db("admin01",$conexion);


$query = "SELECT nombre, apellido from users WHERE nombre like '%buscar%'";

$query_searched = mysql_query($query, $conexion);

$count_results = mysql_num_rows($query_searched);

if ($count_results > 0) {

    echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

    echo '<ul>';
    while ($row_searched = mysql_fetch_array($query_searched)) {
        //En este caso solo mostramos el titulo y fecha de la entrada
        echo '<li><a href="#">'.$row_searched['titulo'].' ('.$row_searched['fecha'].')</a></li>';
    }
    echo '</ul>';
}
else {
    //Si no hay registros encontrados
    echo '<h2>No se encuentran resultados con los criterios de búsqueda.</h2>';
}

}
?>