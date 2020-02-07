<?php
$conn=mysqli_connect( "127.0.0.1","root","","Practicas");

$consulta = "SELECT name,age FROM users";

if ($resultado = $conn->query($consulta)) {

    /* obtener el array de objetos */
    while ($fila = $resultado->fetch_row()) {
        echo "Nombre: " . $fila[0] . "  Edad: " . $fila[1] . "<br/>"; 
    }

    /* liberar el conjunto de resultados */
    $resultado->close();
}


?>