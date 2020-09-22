<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>AstroCine</title>
    <link rel="icon" type="image/jpg" href="img/antesicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Special+Elite&display=swap" rel="stylesheet">
    <link rel='stylesheet' href="css/normalize.css">
    <link rel='stylesheet' href="css/styles4.css" type="text/css">

</head>
<header>
    <div class="barra">
         <a href="InicioCineAdmin.php">
            <img src="img/icon.png" alt="logotipo cine">
        </a>
        <nav class="navegacion">
            <a href="InicioCineAdmin.php">Inicio</a>
            <a href="admin/modificar.php">Gestionar</a>
            <a href="./admin/agregarproducto.php" >Agregar</a>
            
        </nav>
        <a href="logout.php">
            <img src="img/salir.png" alt="Salir">
        </a>
    </div>

</header>

<body>
    <h1 class="centrar">Administracion.</h1>
    
    <table>
        <tr>
            <td>Imagen</td>
            <td>Nombre</td>
            <td>Video</td>
            <td>Descripcion</td>
        </tr>
        <?php
            include 'conexion.php';
            $consulta= "SELECT * FROM detalles";
            $re = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
            while ($f = mysqli_fetch_array($re)){
                
                    echo '<tr>
                        <td><img src="img/'.$f['imagen'].'"/></td>
                        <td>'.$f['nombre'].'</td>
                        <td>'.$f['videoy'].'</td>
                        <td>'.$f['descripcion'].'</td>
                        
                    </tr>';
            }
        ?>
    </table>
        
</body>

</html>