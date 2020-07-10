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

<?php
require "conexion.php";
if (isset($_POST['submit'])){

    $nueva_cartelera = array(
        "nombre" => $_POST['nombre'],
        "descripcion" => $_POST['descripcion'],
        "imagen" => $_POST['imagen'],
        "videoy" => $_POST['videoy']
    );
    $sql = "INSERT INTO detalles ( nombre, descripcion, imagen, videoy)
        values (:nombre, :descripcion, :imagen, :videoy)";

        try{
            $statement = $conexion ->prepare($sql);
            $statement->execute($nueva_cartelera);
        } catch(PDOException $error){
            echo $error->getMessage();
        }
}
?>

<?php if (isset($_POST['submit']) && $statement) : ?>
    <blockquote><?php echo $_POST['nombre']; ?> se añadio correctamente.</blockquote>
<?php endif; ?>

<h2>Añade una cartelera</h2>
<form method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">

    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" id="descripcion">
    
    <label for="imagen">Imagen</label>
    <input type="text" name="imagen" id="imagen">

    <label for="video">video</label>
    <input type="text" name="video" id="video">

    <input type="submit" name="submit" value="Agregar">
</form>

<a href="index.php">Volver</a>





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