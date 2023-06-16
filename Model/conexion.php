<?php

function conexion()
{  

    $DB_HOST=$_ENV["DB_HOST"];
    $DB_USER=$_ENV["DB_USER"];
    $DB_PASSWORD=$_ENV["DB_PASSWORD"];
    $DB_NAME=$_ENV["DB_NAME"];
    $DB_PORT=$_ENV["DB_PORT"];
    

    $conexion = mysqli_connect("$DB_HOST", "$DB_USER", " $DB_PASSWORD", " $DB_NAME" ,"$DB_PORT" );
    
    //if(resultado= $conexion)
    if ($conexion->connect_errno) {
        echo "error de conexion" . $conexion->connect_errno;
    //echo "Conexion exitosa";
    } else { 
        return $conexion;
    }
}

$objConexion = conexion();


?>
