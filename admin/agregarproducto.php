
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

</head>
<header>
    <div class="barra">
        <a href="../InicioCineAdmin.php">
            <img src="../img/icon.png" alt="logotipo cine">
        </a>
        <nav class="navegacion">
            <a href="../InicioCineAdmin.php">Inicio</a>
            <a href="../admin.php">Administracion</a>
            <a href="modificar.php">Gestionar</a>
        </nav>
        <a href="../logout.php">
            <img src="../img/salir.png" alt="Salir">
        </a>
    </div>

</header>

<body>
    <h1 class="centrar">Agregar nueva cartelera.</h1>
    <form action="altaproducto.php" method = "post" enctype="multipart/form-data">
		<fieldset>
			Nombre<br>
			<input type="text" name="nombre">
		</fieldset>
		<fieldset>
			Descripción<br>
			<input type="text" name="descripcion">
		</fieldset>
		<fieldset>
			Imagen<br>
			<input type="file" name="file">
		</fieldset>
		<fieldset>
			Video<br>
			<input type="text" name="video">
		</fieldset>
		<input type="submit" name="accion" value="Enviar" class="aceptar">
	</form>	
	
		</form>
        
</body>

</html>