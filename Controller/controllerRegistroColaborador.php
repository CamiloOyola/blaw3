<?php

    require_once '../Model/conexion.php'; //conexion alterna

    if(isset($_POST['Registro'])){

        $objConexion = conexion();

        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $documento=$_POST["documento"];
        $tipoDocumento=$_POST["tipoDocumento"];
        $email=$_POST["email"];
        $celular=$_POST["celular"];
        $cargo=$_POST["cargo"];
        $area=$_POST["area"];
        $rol=$_POST["rol"];
        $usuario=$_POST["usuario"];


        $sql="INSERT INTO colaborador(nombre, apellido, documento, tipoDocumento, email, celular, cargo, area, rol, accesoId)
        values('$nombre', '$apellido', '$documento', '$tipoDocumento', '$email', '$celular', '$cargo', '$area', '$rol' , '$usuario')";

        echo $sql ; 

        $resultado = $objConexion->query($sql);


        if($resultado){

            echo '<div class="success">Usuario registrado correctamente </div>';


        }else{

            echo '<div class="alerta">Error al relizar el registro</div>' .  mysqli_error($objConexion);
        }


    }


/*

if (!empty($_POST["#"])){
    if(empty($_POST["nombre"])or empty($_POST["apellido"])or empty($_POST["documento"]) or empty($_POST["tipoDocumento"]) or empty($_POST["email"]) 
    or empty($_POST["celular"]) or empty($_POST["cargo"]) or empty($_POST["area"])){
    echo '<div class="alerta"> Uno de los campos esta vacio</div>';
    }else{
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $documento=$_POST["documento"];
        $tipoDocumento=$_POST["tipoDocumento"];
        $email=$_POST["email"];
        $celular=$_POST["celular"];
        $cargo=$_POST["cargo"];
        $area=$_POST["area"];
        $sql=$conexion->query("insert into colaborador(nombre, apellido, documento, tipoDocumento, email, celular, cargo, area)
        values('$nombre', '$apellido', '$documento', '$tipoDocumento', '$email', '$celular', '$cargo', '$area')");
        if($sql==1){
            echo '<div class="success">Usuario registrado correctamente </div>';
        }else{
            echo '<div class="alerta">Error al relizar el registro </div>';
        }        
    }
}*/
?>