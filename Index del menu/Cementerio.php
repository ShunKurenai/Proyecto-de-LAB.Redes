<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="header">
        <ul class="nav">
           <img src="../Imagenes/Dark_Souls_Logo.png" alt="">
            <li><a href="">DARK SOULS</a>
               <ul>
                   </li><li><a href="">DLC</a>
                       <ul>
                           <li><a href="../Index del menu/DLC.php">Artorias of the Abyss</a></li>
                       </ul>
                   </li>
                   <li><a href="">Personajes</a>
                       <ul>
                           <li><a href="../Index del menu/Mercaderes.php">Mercaderes</a></li>
                           <li><a href="../Index del menu/Jefes.php">Jefes</a></li>
                           <li><a href="../Index del menu/Enemigos.php">Enemigos</a></li>
                       </ul>
                   </li>
                   <li><a href="">Magias</a>
                       <ul>
                           <li><a href="../Index del menu/Hechizos.php">Hechizos</a></li>
                           <li><a href="../Index del menu/Milagros.php">Milagros</a></li>
                           <li><a href="../Index del menu/Piromansias.php">Piromancias</a></li>
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
                           <li><a href="../Index del menu/Blanca.php">Blanca Via</a></li>
                           <li><a href="../Index del menu/Dragon.php">Camino del dragpon</a></li>
                           <li><a href="../Index del menu/Cazador.php">Cazador de los bosques</a></li>
                           <li><a href="../Index del menu/Luna.php">Espada de la Luna oscura</a></li>
                           <li><a href="../Index del menu/Espectro.php">Espectro Oscuro</a></li>
                           <li><a href="../Index del menu/Guardias.php">Guardis de la princesa</a></li>
                           <li><a href="../Index del menu/Guerrero.php">Guerrero de la Luz solar</a></li>
                           <li><a href="../Index del menu/Cementerio.php">Siervo del Rey del cementerio</a></li>
                           <li><a href="../Index del menu/Sirviente.php">Sirviente del caos</a></li>
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
    <header>
        <h1 class="cent">Pactos de Dark souls</h1>
    </header>
    <main>
    <div>
        <?php
                $conexion = new mysqli("localhost", "root", "", "barreto");

                $conssult ="SELECT `ID`, `Nombre`, `Requisitos`, `Beneficios`, `Penalizaciones`, `Ubicacion`, `Descripcion`, `Imagenes` FROM `pactos` WHERE id=8";
                            
            $resultado = mysqli_query($conexion, $conssult);
                            
                            
            if($resultado->num_rows > 0){
                while($filas = $resultado->fetch_assoc()){
                    echo " <div class:\"hola\"> <img class=\"centrar\" src=\"../Imagenes/Pactos/Ciervo del rey del cementerio/" . $filas["Imagenes"] . "\"" . "alt=\"\"> <h1>" . $filas["Nombre"] . "</h1>" . "<h3>". $filas["Requisitos"] . "</h3>" . "<h3>". $filas["Beneficios"] . "</h3>" . "<h3>". $filas["Penalizaciones"] . "</h3>" . "<h3>". $filas["Ubicacion"] . "</h3>" . "<h3>". $filas["Descripcion"] . "</h3>" . "</div>" ;
                }
            }
        ?>
        </div>
    </main>
</body>
</html>