<?php
session_start();
include "../conexion.php"; 
    $arreglo=$_SESSION['carrito'];
    $numeroventa=0;
    $re=mysqli_query($conexion,"select * from compras order by numeroventa DESC limit 1") or die(mysql_error());
    while ($f=mysqli_fetch_array($re)){
        $numeroventa=$f['numeroventa'];
    } 
    if($numeroventa==0){
        $numeroventa=1;
    }else{
        $numeroventa=$numeroventa+1;
    }
    for($i=0; $i<count($arreglo);$i++){
        $rs = mysqli_query($conexion,"insert into compras (numeroventa,nombre,precio,cantidad,subtotal) values(
        ".$numeroventa.",
        '".$arreglo[$i]['Ubicacion']."',
        '".$arreglo[$i]['Precio']."',
        '".$arreglo[$i]['Cantidad']."',
        '".($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])."'
        )")or die(mysqli_error($conexion));
    }
    unset($_SESSION['carrito']);
    header("Location: ../admin.php")

    ?>