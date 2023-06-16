<?php

require_once '../Model/conexion.php';

if(isset($_POST['enviar'])){

    $id=$_POST['idColaborador'];

    $nombre = $_POST['nombre'] ; 

    $apellido = $_POST['apellido']; 
    
    $documento = $_POST['documento'] ; 
    
    $tipoDocumento = $_POST['tipoDocumento'] ; 
    
    $email=$_POST['email'];
    
    $celular=$_POST['celular'];
    
    $cargo=$_POST['cargo'];
    
    $area=$_POST['area'];

    $usuario=$_POST['usuario'];

    $consulta =" UPDATE colaborador SET nombre= '$nombre' , apellido = '$apellido', 
    documento= '$documento', tipoDocumento= '$tipoDocumento',  email = '$email' , celular= '$celular', cargo= '$cargo', area= '$area' , accesoId = '$usuario' WHERE idColaborador = $id ";

    $resultado = $objConexion->query($consulta);


    if($resultado)
    {

        
        echo '<script>window.location.href= "../Views/ListarCol.php";</script>'; 



    }else{

        echo "<h3>Ha ocurrido un error: " . mysqli_error($objConexion) . "</h3>";

    }

}

?>