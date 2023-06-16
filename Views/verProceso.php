<?php require '../Model/conexion.php'; //conexion alterna
   
    $objConexion = conexion();
        //$sql = "SELECT e.empIdentificacion, e.empNombre, e.empCorreo, e.empFechaIngreso, c.carNombre, c.carSueldo FROM empleado e, cargos c where (e.empCargo = c.idCargo)";
    $sql1 = "SELECT c.* , p.tipoProceso FROM colaborador c, proceso p WHERE (c.accesoId = p.idProceso)";
    $resultado = $objConexion->query($sql1);
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
      <!--meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--boostrap y css-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title></title>
</head>
<body>         

<h1 class="text-center">Procesos</h1>
<p class="text-center">Aqui encontramos el regisgro individual de cada coloborador de nuestra compañia, con el fin de administrar
 nuestro recurso humano.
</p>
<div class="container">
<div class="row">
<div class="row caja">        
<div class="col-sm-12">
<table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Documento</th>
                        <th>Tipo Documento</th>
                        <th>Email</th>
                        <th>Celular</th>
                        <th>Cargo</th>
                        <th>Area</th>
                        <th>rol</th>
                        <th>Recurso</th>
                    </tr>
                </thead>

    <tbody>
        <?php while($fila = $resultado->fetch_object()):?>
        <tr>
            <td><?php echo $fila['nombre'];?></td>
            <td><?php echo $fila['apellido'];?></td>
            <td><?php echo $fila['documento'];?></td>
            <td><?php echo $fila['tipoDocumento'];?></td>
            <td><?php echo $fila['email'];?></td>
            <td><?php echo $fila['celular'];?></td>
            <td><?php echo $fila['cargo'];?></td>
            <td><?php echo $fila['area'];?></td>
            <td><?php echo $fila['rol'];?></td>
            <td align="center" > 
            <a href="editarEmp.php?idEmpleado=<?php echo $colaborador->$idColaborador?>"><img  scr="" width="29" height="24"></a> 
            </td>
            <td align="center" > 
            <a href="descargo.php?idEmpleado=<?php echo $colaborador->$idColaborador?>"><img  scr="" width="29" height="24"></a> 
            </td>
            <td align="center" > 
            <a href="eliminar.php?idEmpleado=<?php echo $colaborador->$idColaborador?>"><img  scr="" width="29" height="24"></a> 
            </td>


        </tr>
        <?php endwhile; ?>
        


    </tbody>
</table>




</body>

        
</html>