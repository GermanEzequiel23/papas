<?php
    include('conex.php');
    if(isset ($_POST['enviar'])) {
        $conn=conectar();
        $cant=$_POST['cant'];
        $id=$_POST['opcion'];
        $consulta="INSERT INTO `ventas` (`cantidad`, `id_producto`) VALUES ('$cant', '$id')";
        mysqli_query($conn, $consulta);
        $consulta="SELECT `precio` FROM `productos` WHERE `id_producto` = '$id'";
        $resultado = mysqli_query($conn, $consulta); 
        $precio=$resultado->fetch_array();
        $total=$precio['precio']*$cant;
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $fecha=date('d-m-Y H:i:s');
        $consulta="INSERT INTO `carrito` (`total`, `fecha_hora`) VALUES ('$total', '$fecha')";
        mysqli_query($conn, $consulta);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MoyanoStuff</title>
</head>
<body>
    <header class="cabeza">
        <img src="fries.png">
        <h1>Welcome to MoyanoStuff</h1>
    </header>
    <form method="post" action="process.php">
        <div class="pedido">
            <form>
                <select name="opcion">
                    <option value="1">Hamburguesa $300</option>
                    <option value="2">Papas Fritas $250</option>
                </select>
                <p>Cantidad:
                <input type="text" name="cant">
                </p>
                <center><input type="submit" name="enviar"></center> 
            </form>
        </div>
    </form>
    <div class="historial">
        <form>
            <center><h2>Pedidos ahora</h2></center>
            <center><input type="submit" name="detener" value="DETENER"></center>
        </form>
        </div>
    </section>
</body>
</html>