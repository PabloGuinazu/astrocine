<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cinema</title>
    <link rel="icon" type="image/jpg" href="img/antesicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Special+Elite&display=swap" rel="stylesheet">
    <link rel='stylesheet' href="css/normalize.css">

    <link rel='stylesheet' href="css/styles4.css">
</head>
    <header>
        <div class="barra">
            <a href="InicioCine.php">
                <img src="img/icon.png" alt="logotipo cine">
            </a>
            <h1>AstroCine</h1>
            <a href="logout.php">
                <img src="img/salir.png" alt="Salir">
            </a>
        </div>

    </header>

<body>


    <div class="info">
            <?php
            include 'conexion.php';
            $consulta = ("SELECT * FROM detalles where id=".$_GET['id']);
            $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
            while ($f = mysqli_fetch_array( $resultado )){
                ?>

                <div class="cartelera">
                <img src="img/<?php echo $f['imagen'];?>" alt="Avenges End Game">
                    <div class="contenido-cartelera centrar">
                    <p class="estilo-descripcion"><?php echo $f['nombre'];?></p>
                        <p class="disponibilidad">Estreno</p>
                        <a href="butacas.php?id=<?php echo $f['id'];?>" class="btn btn-rojo">Comprar</a>
                    </div>

                </div>
        
                <div style="text-align:left;" class="descripcionTotal">
                    <iframe src="https:<?php echo $f['videoy'];?>" width="640" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                    <p><textarea readonly name="comentario" rows="5" cols="50" value=""><?php echo $f['descripcion'];?></textarea></p>
                    <p></p>
                </div>
                
            </div>
            <?php
            }
        ?>


    </div>
    
</body>

</html>