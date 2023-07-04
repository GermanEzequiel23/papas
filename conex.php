<?php
    function conectar()
    {
        $host="localhost"; //indicio en donde esta mi base de datos
        $usuario="root"; //Usuario de la bd
        $clave=""; //Clave de la BD
        $dbnombre="test"; //Nombre de la BD
        echo"<br>";
        $conn=mysqli_connect($host, $usuario, $clave, $dbnombre); //Funcion para conectarme a la BD
        
        if(mysqli_connect_errno()) //Pregunta si me conecte a la BD
        { 
            echo"Conexion NO establecida".mysqli_connect_error(); //No se pudo conectar, numero de error
        }
        else {
            echo""; //Se pudo conectar a la BD
        }
        return $conn;
    }
?>