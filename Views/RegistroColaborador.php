<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

    <body class="body1">
        <form method="POST" class="form-box" >
        <h2 class="text-center">NUEVO COLABORADOR</h2>
        <br>
        <div class="text-center">
        <div class="text-center">
         <label for="name" class="form-label">Nombre</label>
         <input type="text"class="form-control" required name="nombre">
        </div>
        <div class="text-center">
          <label for="Apellido" class="form-label">Apellido</label>
         <input type="text" class="form-control" required name="apellido">
        </div>
        <div class="text-center">
         <label for="" class="form-label">Documento</label>
         <input type="documento" class="form-control" required name="documento">
        </div>

        <div class="text-center">
         <label for="tipoDocumento" class="form-label">Tipo Documento</label>
         <br>
         <select name="tipoDocumento" id="tipoDocumento" >
                <option value="Seleccionar" disabled selected>Seleccionar</option>
                <option value="TI">TI</option>    
                <option value="Pasaporte">Pasaporte</option>
                <option value="CI">CI</option>
            </select>
        </div>


        <div class="text-center">
         <label for="Email" class="form-label">Email</label>
         <input type="text" class="form-control" required name="email">
        </div>

        <div class="text-center">
         <label for="celular" class="form-label">Celular</label>
         <input type="text"  class="form-control" required name="celular">
        </div>
        <br>

        <div class="text-center">
        <label for="cargo" class="form-label">Cargo</label>
        <br>

        <select name="cargo" id="rol" >
                <option value="Seleccionar">Seleccionar</option>
                <option value="Director">Director</option>
                <option value="subDir">SubDir</option>    
                <option value="Coordinador">Coordinador</option>
                <option value="Supervisor">Supervisor</option>
                <option value="Operario">Operario</option>
        </select>
           
        </div>
        <br>
        <div class="text-center">
        <label for="area" class="form-label">Area</label>
        <br>

        <select name="area" id="rol" >
                <option value="Seleccionar" disabled selected>Seleccionar</option>
                <option value="Dueño">Dueño</option>    
                <option value="Administrativo">Administrativo</option>
                <option value="Legal">Legal</option>
                <option value="RRHH">RRHH</option>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Seguridad">Seguridad</option>
            </select>
           
        </div>
        <br>
        <div class="text-center" >
        <label for="rol" class="form-label">Rol</label>
        <br>
            <select name="rol" id="rol" >
                <option value="Seleccionar">Seleccionar</option>
                <option value="Administrador">Administrador</option>    
                <option value="Usuario">Usuario</option>
            </select>
        </div>  
        <br>

        <div class="text-center" >
        <label for="rol" class="form-label">Usuario</label>
        <br>
            
            <select name="usuario" id="">

                <option value="Seleccionar" disabled selected>Seleccionar</option>

                <?php
                
                include("../Controller/consultausuario.php");

                ?>

            </select>

        </div>  
        <br>



        </div>
                <div class="text-center">
                <input type="submit" name="Registro">
                </div>
     </form> 
        <?php

         include("../Controller/controllerRegistroColaborador.php"); 

         ?>
    
    </body>
</html>