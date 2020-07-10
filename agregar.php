
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

    
            <div>
                    <form>
                        <label>Nombre:</label><br>
                        <input type="text"  name="txtnom"><br>
                        <label>Descripcion:</label><br>
                        <input type="text"  name="txtdesc"><br>
                        <label>Imagen:</label><br>
                        <input type="text"  name="txtimg"><br>
                        <label>Enlace:</label><br>
                        <input type="text"  name="txtvideo"><br>
                        <input type="submit" name="" value="agregar">
                        <a href="lista.php">Volver</a>
                    </form>

             </div>
             <?php
                include 'conexion.php';
                $nom=$_GET['txtnom'];
                $des=$_GET['txtdesc'];
                $ima=$_GET['txtimg'];
                $vid=$_GET['txtvideo'];
                if ($nom!=null || $des!=null || $ima!=null || $vid!=null){
                    $sql="insert into detalles(nombre,descripcion,imagen,videoy)value('".$nom."','".$des."','".$ima."','".$vid."')";
                    mysqli_query($sql);
                    if($nom=1){
                        header("location:lista.php");
                    }
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
        
        Todos los Derechos Reservados 2020 &copy;
        
    </div>
</body>

</html>