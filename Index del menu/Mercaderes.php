<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <div id="header">
        <ul class="nav">
           <img src="../Imagenes/Dark_Souls_Logo.png" alt="">
            <li><a href="">DARK SOULS</a>
               <ul>
                   <li><a href="">DLC</a>
                       <ul>
                           <li><a href="">Artorias of the Abyss</a></li>
                       </ul>
                   </li>
                   <li><a href="">Personajes</a>
                       <ul>
                           <li><a href="Mercaderes.html">Mercaderes</a></li>
                           <li><a href="../Index del menu/Jefes.html">Jefes</a></li>
                           <li><a href="../Index del menu/Enemigos.html">Enemigos</a></li>
                       </ul>
                   </li>
                   <li><a href="">Magias</a>
                       <ul>
                           <li><a href="../Index del menu/Hechizos.html">Hechizos</a></li>
                           <li><a href="">Milagros</a></li>
                           <li><a href="">Piromancias</a></li>
                       </ul>
                   </li>
                   <li><a href="">Equipamiento</a>
                       <ul>
                           <li><a href="">Armas</a></li>
                           <li><a href="">Escudos</a></li>
                           <li><a href="">Armaduras</a></li>
                           <li><a href="">Anillos</a></li>
                           <li><a href="">Objetos</a></li>
                       </ul>
                   </li>
                   <li><a href="">Lugares</a>
                       <ul>
                           <li><a href="">Refugio de los no muertos</a></li>
                           <li><a href="">Santuario de Enlace de fuego</a></li>
                           <li><a href="">Burgo de los no muertos</a></li>
                           <li><a href="">Parroquia de los no muertos</a></li>
                           <li><a href="">Jardin tenebroso</a></li>
                           <li><a href="">Mas lugares</a></li>
                       </ul>
                   </li>
                   <li><a href="">Pactos</a>
                       <ul>
                           <li><a href="">Blanca Via</a></li>
                           <li><a href="">Camino del dragpon</a></li>
                           <li><a href="">Cazador de los bosques</a></li>
                           <li><a href="">Espada de la Luna oscura</a></li>
                           <li><a href="">Espectro Oscuro</a></li>
                           <li><a href="">Guardis de la princesa</a></li>
                           <li><a href="">Guerrero de la Luz solar</a></li>
                           <li><a href="">Siervo del Rey del cementerio</a></li>
                           <li><a href="">Sirviente del caos</a></li>
                       </ul></li>
                   <li><a href="">Clases</a></li>
               </ul>
            </li>
        </ul>
   </div>
   <br>
   <br>
   <br>
   <br>
    <Header>
        <h1 class="cent">Mercaderes de Dark Souls</h1>
    </Header>
    <main>
        <img class="centrar ordenar" src="../Imagenes/Andre_de_Astora.png" alt="">
        <div>
        <?php
                $conexion = new mysqli("localhost", "phpmyadmin", "RedesInformaticas", "barreto");

                $conssult ="SELECT `ID`, `Nombre`, `Ubicacion`, `Objetos_venta`, `Descripcion`, `Lore` FROM `npc` WHERE 1";
                            
            $resultado = mysqli_query($conexion, $conssult);
                            
                            
            if($resultado->num_rows > 0){
                while($filas = $resultado->fetch_assoc()){
                    echo "<h1>" . $filas["Nombre"] . "</h1>" . "<h4>". $filas["Descripcion"] . "</h4>" ;
                }
            }
        ?>
        </div>
        <br>
        <br>
        <br>
        <br>
        <img class="centrar ordenar" src="../Imagenes/Anochecer.png" alt="">
        <div>
        <?php
                $conexion = new mysqli("localhost", "phpmyadmin", "RedesInformaticas", "barreto");

                $conssult ="SELECT `ID`, `Nombre`, `Ubicacion`, `Objetos_venta`, `Descripcion`, `Lore` FROM `npc` WHERE 1";
                            
            $resultado = mysqli_query($conexion, $conssult);
                            
                            
            if($resultado->num_rows > 0){
                while($filas = $resultado->fetch_assoc()){
                    echo "<h1>" . $filas["Nombre"] . "</h1>" . "<h4>". $filas["Descripcion"] . "</h4>" ;
                }
            }
        ?>
        </div>
        