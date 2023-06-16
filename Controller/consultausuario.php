<?php

require_once '../Model/conexion.php' ; 

$consulta = "SELECT idAcceso , usuario FROM acceso" ;

$resultado = $objConexion->query($consulta) ;

while($fila = mysqli_fetch_assoc($resultado)){
    $idAcceso=$fila['idAcceso'];
    $usuario=$fila['usuario'];
    echo"<option value='$idAcceso'>$usuario</option>";
}




?>