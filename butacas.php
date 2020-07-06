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
        <a href="Index.html">
            <img src="img/icon.png" alt="logotipo cine">
        </a>
        <nav class="navegacion">
            <a href="index.php">Inicio</a>
            <a href="#">Estrenos</a>
            <a href="#">Preventa</a>
        </nav>
        <a href="#">
            <img src="img/usuario_icon_superheroe.png" alt="Iniciar sesion">
        </a>
    </div>

</header>

<body>


    <div class="contenedor ">
        <div class="negro  centrar estilo-titulo">pantalla</div>
        <div class="zona-asientos gris">
            
            <div class="silla centrar">A1</div>
            <div class="silla centrar">A2</div>
            <div class="silla centrar">A3</div>
            <div class="silla centrar">A4</div>
            <div class="silla centrar">A5</div>
            <div class="silla centrar">B1</div>
            <div class="silla centrar">B2</div>
            <div class="silla centrar">B3</div>
            <div class="silla centrar">B4</div>
            <div class="silla centrar">B5</div>
            <div class="silla centrar">C1</div>
            <div class="silla centrar">C2</div>
            <div class="silla centrar">C3</div>
            <div class="silla centrar">C4</div>
            <div class="silla centrar">C5</div>

        </div>
        <br>
      <a href="butacas.php?id=<?php echo $f['id'];?>" class="btn btn-rojo">Confirmar</a>
    </div>
</body>

</html>