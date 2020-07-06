<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CinemaPrueba</title>
    <link rel="icon" type="image/jpg" href="img/antesicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Special+Elite&display=swap" rel="stylesheet">
    <link rel='stylesheet' href="css/normalize.css">

    <link rel='stylesheet' href="css/styles1.css">
</head>
<header>
    <div class="barra">
        <nav class="navegacion">
            <a href="inicio.php">Estrenos</a>
            <a href="inicio.php">Iniciar Sesion</a>
            <a href="inicio.php">Registrarse</a>
        </nav>
    </div>

</header>

<body>
<video src="video/Particulas.mp4" autoplay loop poster="video/Fondo.png"></video>
    
    <div class=" contenedor ">
    <h1 class="centrar estilo-titulo">Disfruta de tu pelicula favorita</h1>
        <div class="contenedor-carteleras">

            <?php
                include 'conexion.php';
                $consulta = "SELECT * FROM detalles";
                $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
                while ($f = mysqli_fetch_array( $resultado )){
            ?>

                    
                    <div class="cartelera">
                    <a href="descripcion.php?id=<?php echo $f['id'];?>"><img src="img/<?php echo $f['imagen'];?>" alt="AVENGERS END GAME"></a>
                    
                           
                    </div>
            <?php
                 }
            ?>
            </div>

          
    

    </div>
  
</body>

</html>