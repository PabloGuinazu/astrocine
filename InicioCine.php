
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>AstroCine</title>
    <link rel="icon" type="image/jpg" href="img/antesicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Special+Elite&display=swap" rel="stylesheet">
    <link rel='stylesheet' href="css/normalize.css">
    <link rel='stylesheet' href="css/styles.css">

</head>
<header>
    <div class="barra">
        <a href="InicioCine.php">
            <img src="img/icon.png" alt="logotipo cine">
        </a>
        <nav class="navegacion">
            <a href="InicioCine.php">Inicio</a>
            <a href="#">Estrenos</a>
            <a href="#">Preventa</a>
            <a href="logout.php">Salir</a>
        </nav>
        <a href="#">
            <img src="img/usuario_icon_superheroe.png" alt="Iniciar sesion">
        </a>
    </div>

</header>

<body>
    <video src="video/Motion - 18246.mp4" autoplay loop poster="video/poster.png"></video>
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
                <img src="img/<?php echo $f['imagen'];?>" alt="Avenges End Game">
                <div class="contenido-cartelera centrar">
                    <h6 class="estilo-descripcion"><?php echo $f['nombre'];?></h6>
                    <p class="disponibilidad">Estreno</p>
                    <a href="descripcion.php?id=<?php echo $f['id'];?>" class="btn btn-rojo">Ver</a>
                </div>
            </div>
            <?php
    }
?>
            

          
        </div>

    </main>

    <div class="barra-baja">
    <nav class="navegacion">
                <a href="#">
                <img src="img/facebook.png" alt="Siguenos en facebook">
                <a href="#">
                <img src="img/twitter.png" alt="Siguenos en Twitter">
                <a href="#">
                <img src="img/instagram.png" alt="Siguenos en Instagram">
                
        </nav>
        
        
        <footer class="sinD">
    Todos los Derechos Reservados 2020 &copy;
    </footer>
    </div>
    
</body>

</html>