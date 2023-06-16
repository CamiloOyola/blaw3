<?php

require "../Model/conexion.php";


/*
$Sentencia_Consulta ="SELECT idProceso, tipoProceso from proceso";


$resultadoCargos = $objConexion->query($Sentencia_Consulta);

*/

$id=$_REQUEST['id'];

$Sentencia_Consulta1 ="SELECT * FROM colaborador WHERE idColaborador =$id";

$resultado= $objConexion->query($Sentencia_Consulta1);


$colaborador= mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Colaborador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body class="body1">

     <!--header--menu
    <header>

    <div class="container__header1">
        <div class="logo">
            <a href="#">
                <img src="assets/imagenes/Logo1.png" alt="">
            </a>                
        </div>
        <div class="menu">
            <nav>
                <ul>
                    
                </ul>
            </nav>
            <a href="ListarCol.php" class="btn__Inicio">Colaboradores</a>                                  
        </div>
    </div>
    </header>-->
    <form method="POST" class="form-box" >
        <h2 class="text-center">EDITAR COLABORADOR</h2>
        <br>
    
        <input type="hidden" name="idColaborador" value="<?php echo $colaborador['idColaborador']?>"></input>

        <div class="text-center">
        <div class="nombre">
         <label for="" class="form-label">Nombre</label>
         <input type="text"class="form-control" name="nombre" id="nombre"  required value = "<?php echo $colaborador['nombre']?>">
        </div>
        <div class="apellido">
          <label for="">Apellido</label>
         <input type="text" class="form-control" name="apellido" id="apellido"  required value = "<?php echo $colaborador['apellido']?>">
        </div>
        <div class="documento">
         <label for="">Documento</label>
         <input type="text" class="form-control" name="documento" placeholder="documento" id="documento"  required value = "<?php echo $colaborador['documento']?>">
        </div>

        <div class="tipoDocumento">

         <label for="tipoDocumento">Tipo Documento</label>
         <br>
         <select name="tipoDocumento" id="tipoDocumento">
         <option value="Pasaporte"<?php echo ($colaborador['tipoDocumento'] == 'Pasaporte') ? ' selected' : ''; ?>>Pasaporte</option>
         <option value="CI"<?php echo ($colaborador['tipoDocumento'] == 'CI') ? ' selected' : ''; ?>>CI</option>
         <option value="TI"<?php echo ($colaborador['tipoDocumento'] == 'TI') ? ' selected' : ''; ?>>TI</option>
         </select>
        </div>


        <div class="email">
         <label for="">Email</label>
         <input type="text" class="form-control" name="email" placeholder="email" id="email"  required value = "<?php echo $colaborador['email']?>">
        </div>
        <div class="telefono">
         <label for="">Celular</label>
         <input type="text"  class="form-control" name="celular" placeholder="celular" id="celular"  required value = "<?php echo $colaborador['celular']?>">
        </div>
        <div class="cargo">
         <label for="">Cargo</label>
         <br>
         <select name="cargo" id="rol" >
                <option value="Director"<?php echo ($colaborador['cargo'] == 'Director') ? '  selected' : ''; ?>>Director</option>
                <option value="SubDir"<?php echo ($colaborador['cargo'] == 'SubDir') ? '  selected' : ''; ?>>SubDir</option>    
                <option value="Coordinador"<?php echo ($colaborador['cargo'] == 'Coordinador') ? '  selected' : ''; ?>>Coordinador</option>
                <option value="Supervisor"<?php echo ($colaborador['cargo'] == 'Supervisor') ? '  selected' : ''; ?>>Supervisor</option>
                <option value="Operario"<?php echo ($colaborador['cargo'] == 'Operario') ? '  selected' : ''; ?>>Operario</option>
                <option value="Calidad"<?php echo ($colaborador['cargo'] == 'Calidad') ? ' selected' : ''; ?>>Calidad</option>
        </select>

        </div>
        <div class="area">
         <label for="">Area</label>
         <br>
         <select name="area">
                <option value="Dueño"<?php echo ($colaborador['area'] == 'Dueño') ? '  selected' : ''; ?>>Dueño</option>
                <option value="Legal"<?php echo ($colaborador['area'] == 'Legal') ? '  selected' : ''; ?>>Legal</option>    
                <option value="RRHH"<?php echo ($colaborador['area'] == 'RRHH') ? '  selected' : ''; ?>>RRHH</option>
                <option value="Tecnologia"<?php echo ($colaborador['area'] == 'Tecnologia') ? '  selected' : ''; ?>>Tecnologia</option>
                <option value="Seguridad"<?php echo ($colaborador['area'] == 'Seguridad') ? '  selected' : ''; ?>>Seguridad</option>
                <option value="Administrativo"<?php echo ($colaborador['area'] == 'Administrativo') ? '  selected' : ''; ?>>Administrativo</option>
         </select>
        </div>

        <div class="rol">
         <label for="">Rol</label>
         <br>
         <select name="rol" id="">
         <option value="Administrador"<?php echo ($colaborador['rol'] == 'Administrador') ? '  selected' : ''; ?>>Administrador</option>
         <option value="Usuario"<?php echo ($colaborador['rol'] == 'Usuario') ? '  selected' : ''; ?>>Usuario</option>    
         </select>
        </div>
        <br>

        <div class="text-center" >
        <label for="rol" class="form-label">Usuario</label>
        <br>
            
            <select name="usuario" id="usuario">

                <?php
                
                include("../Controller/consultausuario.php");

                $SentenciaConsulta2 ="SELECT idAcceso,usuario  FROM acceso WHERE idAcceso = $colaborador[idColaborador]";

                $resultado2= $objConexion->query($SentenciaConsulta2);
                
                while($row = mysqli_fetch_assoc($resultado2)){

                    $idAcceso= $row['idAcceso'];
                    $usuario= $row['usuario'];

                   echo  "<option value='$idAcceso' selected >$usuario</option>";


                }
                
                ?>

            </select>

        </div>
        <br>  
        
        </div>
        <div class="text-center">
    
        <input type="submit" name= "enviar" value="enviar">

        </div>
    </form>
    <?php

        include("../Controller/actualizarColaborador.php")

    ?>
 </body>
</html>

