<?php

if (!empty($_POST["RegistrarUyP"])){
    if(empty($_POST["usuario"]) or empty($_POST["pass"])){
        echo '<div class="alerta"> Uno de los campos esta vacio</div>';

    }else{

        extract($_REQUEST);

        $objConexion = conexion();

        $Usuario=$_POST["usuario"];
        $Clave=$_POST["pass"];
        $sql="INSERT INTO acceso(usuario, pass)values('$Usuario', '$Clave')";
        $resultado = $objConexion->query($sql);

        if($resultado){
            echo '<div class="success">Usuario y Contraseña registrados correctamente </div>';
        }else{
            echo '<div class="alerta">Error al relizar el registro </div>';
        }        
    }
}

/*
if (!empty($_POST["RegistrarUyP"])){
    if(empty($_POST["usuario"]) or empty($_POST["pass"])){
        echo '<div class="alerta"> Uno de los campos esta vacio</div>';

    }else{
        $Usuario=$_POST["usuario"];
        $Clave=$_POST["pass"];
        $sql=$conexion->query("insert into acceso(usuario, pass)values('$Usuario', '$Clave')");

        if($sql==1){
            echo '<div class="success">Usuario y Contraseña registrados correctamente </div>';
        }else{
            echo '<div class="alerta">Error al relizar el registro </div>';
        }        
    }
}*/

?>