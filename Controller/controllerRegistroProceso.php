<?php

require "../Model/conexion.php";

if (!empty($_POST["RegistrarProceso"])){
    if(empty($_POST["tipoProceso"])or empty($_POST["categoria"])or empty($_POST["fechaHechos"])or empty($_POST["evidencia"])or empty($_POST["observacionP"])){
        echo '<div class="alerta"> Uno de los campos esta vacio</div>';
    }else{

        extract($_REQUEST);

        $objConexion = conexion();


        $tipoProceso = $_REQUEST['tipoProceso'] ; 

        $categoria = $_REQUEST['categoria'] ;
        
        $fechaHechos = $_REQUEST['fechaHechos'] ; 
        
        $evidencia = $_REQUEST['evidencia'] ;
        
        $observacionP = $_REQUEST['observacionP'] ; 
        
        $sql = "INSERT INTO proceso(tipoProceso, categoria, fechaHechos, evidencia, observacionP) values('$tipoProceso' , '$categoria' ,$fechaHechos' , '$evidencia' , '$observacionP')"; 
        
        $resultado = $objConexion->query($sql);

        

        if ($resultado) {
            echo "Descargo registrado con exito";
        } else {
            
        echo '<div class="alerta">Error al relizar el registro </div>';
        echo mysqli_errno($objConexion); 
        }
    }
}

