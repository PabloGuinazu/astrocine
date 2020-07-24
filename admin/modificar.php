<?php
	session_start();
	include "../conexion.php";
	if(isset($_SESSION['carrito'])){
	}else{
		// header("Location: ./index.php?Error=Acceso denegado");
	}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>AstroCine</title>
    <link rel="icon" type="image/jpg" href="../img/antesicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Special+Elite&display=swap" rel="stylesheet">
    <link rel='stylesheet' href="../css/normalize.css">
    <link rel='stylesheet' href="../css/styles.css" type="text/css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../js/modificar.js" ></script>

</head>
<header>
    <div class="barra">
            <a href="../InicioCineAdmin.php">
            <img src="../img/icon.png" alt="logotipo cine">
        </a>
        <nav class="navegacion">
            <a href="../InicioCineAdmin.php">Inicio</a>
            <a href="../admin.php">Administracion</a>
            <a href="agregarproducto.php" >Agregar</a>
        </nav>
        <a href="../logout.php">
            <img src="../img/salir.png" alt="Salir">
        </a>
    </div>

</header>

<body>
    <h1 class="centrar">Modificar</h1>
    
    <table width="100%">
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Descripcion</td>
            <td>Video</td>
            <td>Eliminar</td>
            <td>Modificar</td>

        </tr>
        <?php
            $consulta= "SELECT * FROM detalles";
            $re = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
            while ($row = mysqli_fetch_array($re)){
                
                echo '
				<tr>
					<td>
						<input type="hidden" value="'.$row[0].'">'.$row[0].'
						<input type="hidden" class="imagen" value="'.$row[3].'">
					</td>
					<td><input type="text" class="nombre" value="'.$row[1].'"></td>
					<td><input type="text" class="descripcion" value="'.$row[2].'"></td>
					<td><input type="text" class="video" value="'.$row[4].'"></td>
					<td><button class="eliminar" data-id="'.$row[0].'">Eliminar</button></td>
					<td><button class="modificar" data-id="'.$row[0].'">Modificar</button></td>
                </tr>
                ';
            }
        ?>
    </table>
        </div>
</body>

</html>