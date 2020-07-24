
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>AstroCine</title>
    <link rel="icon" type="image/jpg" href="img/antesicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Special+Elite&display=swap" rel="stylesheet">
    <link rel='stylesheet' href="css/normalize.css">
    <link rel='stylesheet' href="css/styles3.css">

</head>
<header>
    <div class="barra">
        <a href="InicioCineCopia.php">
            <img src="img/icon.png" alt="logotipo cine">
        </a>
        <h1>AstroCine</h1>
        <a href="logout.php">
            <img src="img/salir.png" alt="Salir">
        </a>
    </div>

</header>

<body>
    <video src="video/Particulas.mp4" autoplay loop poster="video/Fondo.png"></video>
    <main class=" contenedor">
        <h1 class="centrar estilo-titulo">Disfruta de tu pelicula favorita</h1>

        <div class="contenedor-carteleras">

<?php
    include 'conexion.php';
    $consulta = "SELECT * FROM detalles";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    while ($f = mysqli_fetch_array( $resultado )){
        ?>

        
                    <div class="cartelera">
                        <a href="descripcion.php?id=<?php echo $f['id'];?>"><img src="img/<?php echo $f['imagen'];?>" class="imgC" alt="AVENGERS END GAME"></a>
                    
                           
                    </div>
            <?php
    }
?>
            

          
        </div>

    </main>

    <div class="barra-baja">
    <nav class="navegacion">
                <a href="https://www.facebook.com/AstrocineOficial-103305874804749">
                <img src="img/facebook.png" alt="Siguenos en facebook"></a>
                
                <a href="https://twitter.com/AstroCineOfici1/status/1285088926928121856">
                <img src="img/twitter.png" alt="Siguenos en Twitter"></a>
                
                <a href="https://www.instagram.com/astrocineoficial/?hl=es-la">
                <img src="img/instagram.png" alt="Siguenos en Instagram"></a>
                
        </nav>
        
        
     <div class="sinD">   
    <p>Todos los Derechos Reservados 2020 &copy </p>
    </div>
    </div>
    
</body>

</html>