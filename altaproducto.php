<?php
    $idp=$_POST['idp'];
    $nomb=$_POST['productop'];
    $precio=$_POST['preciop'];
    include("conex.php");
    $conn=conectar();
    $consulta="INSERT INTO `ventas` (`id_producto`, `Marca`, `Modelo`, `Año Fabricado`) VALUES ('$pat', '$marca', '$modelo', '$año')";
    if(mysqli_query($conn, $consulta)) {
        echo"<p> Producto Registrado.";
        echo "<p><a href='index.html'>Añadir Camion</a>";
    } else {
        echo"Error: ".mysqli_error($conn);
    }
?>