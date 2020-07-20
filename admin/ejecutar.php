<?php
include "../conexion.php";
if($_POST['Caso']=="Eliminar"){
    mysqli_query($conexion,"DELETE FROM detalles where Id=".$_POST['Id']);
    unlink("../img/".$_POST['Imagen']);
    echo 'Eliminacion completada';
}
if($_POST['Caso']=="Modificar"){
    mysqli_query($conexion,"UPDATE detalles SET Nombre='".$_POST['Nombre']."' where Id=".$_POST['Id']);
    mysqli_query($conexion,"UPDATE detalles SET Descripcion='".$_POST['Descripcion']."' where Id=".$_POST['Id']);
    mysqli_query($conexion,"UPDATE detalles SET Videoy='".$_POST['Video']."' where Id=".$_POST['Id']);
    echo 'Modificacion completada';
}
?>