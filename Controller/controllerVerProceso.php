<?php
    require '../Model/conexion.php';
    if (!empty($_POST["Validar"])){
        if(empty($_POST["documento"])){
    
        echo '<div class="alerta"> Uno de los campos esta vacio</div>';
    
        }else{
            $documento=$_POST["documento"];
            
            $Sql = "SELECT * FROM colaborador WHERE documento ='$documento'";
            $colaborador = $conexion->query($Sql); 
    
            if($sql==1){
                echo '<div class="success">Ingrese su apelacion </div>';
            }else{
                echo '<div class="alerta">Error al relizar el registro </div>';
            }
    
            
        }
    }
?>