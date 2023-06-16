<?php

function conexion()
{

    $conexion = mysqli_connect("localhost", "root", "", "blaw2");
    
    //if(resultado= $conexion)
    if ($conexion->connect_errno) {
        echo "error de conexion" . $conexion->connect_errno;
    //echo "Conexion exitosa";
    } else { 
        return $conexion;
    }
}

$objConexion = conexion();







/* Conexion inicial

//conectar Mysql
$conexion = mysqli_connect("localhost", "root", "admin", "blaw");

//Probar conexion
if (mysqli_connect_errno()) {
    echo "Fallo al conectar a MySQL: (" . mysqli_connect_error . ") " . mysqli_connect_error();
}else{
    echo "conexion successful";
}

---------------------
<?php
$host = 'localhost'; //  servidor de base de datos 
$db = 'blaw'; // nombre de tu base de datos
$user = 'root'; // usuario de MySQL
$password = 'admin'; // contraseña de MySQL

$conexion = new mysqli($host, $user, $password, $db);

if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}
}*/


?>