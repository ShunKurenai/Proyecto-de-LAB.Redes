<?php
    $amogus = new mysqli("localhost", "phpmyadmin", "RedesInformaticas", "amogus");

    $conssult ="id, nombre, apellido";

$resultado = mysqli_query($conexion, $conssult);


if($resultado->num_rows > 0){
    while($filas = $resultado->fetch_assoc()){
        echo "<h1>" . $filas["nombre"];
    }
}
?>