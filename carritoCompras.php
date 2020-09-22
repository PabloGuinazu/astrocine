<?php
    session_start();
    include 'conexion.php'; 
    if(isset($_SESSION['carrito'])){
        if(isset($_GET['id'])){
        $arreglo=$_SESSION['carrito'];
        $encontro=false;
        $numero=0;
        for($i=0;$i<count($arreglo);$i++){
            if($arreglo[$i]['Id']==$_GET['id']){
                $encontro=true;
                $numero=$i;
            }
        }
        if($encontro==true){
            $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
            $_SESSION['carrito']=$arreglo;
        }else{
            $ubicacion="";
            $precio=0;
            $re=mysqli_query($conexion,"select * from butacas where id=".$_GET['id']);
            while ($f=mysqli_fetch_array($re)) {
                $ubicacion=$f['ubicacion'];
                $precio=$f['precio'];
        }
        $datosNuevos=array('Id'=>$_GET['id'],
         'Ubicacion'=>$ubicacion,
         'Precio'=>$precio,
         'Cantidad'=>1);

         array_push($arreglo, $datosNuevos);
         $_SESSION['carrito']=$arreglo;
        }
    }

    }else{
        if(isset($_GET['id'])){
            $ubicacion="";
            $precio=0;
            $re=mysqli_query($conexion,"select * from butacas where id=".$_GET['id']);
            while ($f=mysqli_fetch_array($re)) {
                $ubicacion=$f['ubicacion'];
                $precio=$f['precio'];
        }
        $arreglo[]=array('Id'=>$_GET['id'],
         'Ubicacion'=>$ubicacion,
         'Precio'=>$precio,
         'Cantidad'=>1);
         $_SESSION['carrito']=$arreglo;
        }
    }
?>
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
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/scripts.js" ></script>
    
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


    <div class="contenedor ">
        <?php
            $total=0;
            if(isset($_SESSION['carrito'])){
                $datos=$_SESSION['carrito'];
                $total=0;
                for($i=0;$i<count($datos);$i++){

                    ?>
                        <div class="producto">
                            <span><?php echo $datos[$i]['Ubicacion'];?></span><br>
                            <span>Precio: <?php echo $datos[$i]['Precio'];?></span><br>
                            <span>Cantidad: 1 </span><br>

                            <a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Id']?>">Eliminar</a><br>
                        </div>
                    <?php

                    $total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
                }
            }else{
                echo '<h2>No has añadido ninguna entrada</h2>';
            }
            echo '<h2>Total: '.$total.'</h2>';
        ?>

            <a href="butacas.php" class="btn btn-azul">Volver atras</a>
            <?php
            if($total!=0){ 
                ?>
            <!-- <a href="InicioCine.php" class="btn btn-rojo">Comprar</a> -->
            
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="upload" value="1">
                <input type="hidden" name="business" value="astrocineoficial@gmail.com">
                <input type="hidden" name="currency_code" value="USD">
                
                <?php
                    for($i=0;$i<count($datos);$i++){
                ?>
                <input type="hidden" name="item_name_<?php echo $i+1;?>" value="Entada: <?php echo $datos[$i]['Ubicacion'];?>">
                <input type="hidden" name="amount_<?php echo $i+1;?>" value="200"> <!--aqui iba precio-->
                <?php
                    }
                ?>
                
                <input type="submit" value="comprar" class="btn btn-rojo">
            </form>
            <?php
            }
            ?>
            
    </div>
    
</body>

</html>