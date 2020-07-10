<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cinema</title>
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
        </nav>
        <a href="#">
            <img src="img/usuario_icon_superheroe.png" alt="Iniciar sesion">
        </a>
    </div>

</header>

<body>
<?php
    include 'conexion.php';
    $consulta = "SELECT * FROM butacas";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    
        ?>

    <div class="contenedor ">
            <div class="negro  centrar estilo-titulo">pantalla</div>
            <div class="zona-asientos gris">
                <?php
                while ($f = mysqli_fetch_array( $resultado )){
                ?>
                
                <a href="carritoCompras.php?id=<?php echo $f['id'];?>"> 
                <div class="silla centrar sinD"><?php echo $f['ubicacion'];?></div>
                </a>

                <?php
        }
        ?>
            </div>
            <br>
       
    </div>
</body>

</html>