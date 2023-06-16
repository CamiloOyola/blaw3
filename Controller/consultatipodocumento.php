<?php 


require_once '../Model/conexion.php' ; 

$consulta = "SELECT idColaborador , tipoDocumento FROM colaborador" ;

$resultado = $objConexion->query($consulta) ;

while($fila = mysqli_fetch_assoc($resultado)){
    $idColaborador=$fila['idColaborador'];
    $tipoDocumento=$fila['tipoDocumento'];

    echo"<option value='$idColaborador'>$tipoDocumento</option>";                                                       
}





?>