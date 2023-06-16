<?php require '../Model/conexion.php'; //conexion alterna
    $objConexion = conexion();
    $sql = "SELECT * FROM colaborador ";
    $colaborador = $objConexion->query($sql); 
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
    <link rel="stylesheet" href="style.css?20232905">
    <title>Listar Col</title>
</head>
<body>
    

    <body class="body1">
    <h1 class="text-center">Colaboradores </h1>
    <br>
    <br>
    <p class="text-center">Aqui encontramos el regisgro individual de colaboradores favor inicie sus procesos disciplinarios para cada coloborador de nuestra compañia, con el fin de administrar
        nuestro recurso humano.
    </p>
    
    <div class="container">
    <!--
    <div class="row">
        <div class="clol-sm-4 offset-8" id="buscar">
        <input type="search" class="form-control me-2" name="Bdocumento" placeholder="Documento">
        <a href="VerProceso.php" class="btn btn-success w-100">buscar</a>
    </div>-->
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
                                    <th>Rol</th>
                                    <th>Proceso</th>
                                </tr>
                            </thead>

                <tbody>
                    <?php while($fila = mysqli_fetch_assoc($colaborador)){ ?>
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
                        <td>
                        
                            <a href="Proceso.php" class="btn btn-primary">Procesos</a>

                            <a href="editarCol.php?id=<?php echo $fila['idColaborador']?>" class="btn btn-danger">Editar</a>
                            
                        </td>

                    </tr>
                    <?php }; ?>
                    


                </tbody>
            </table>
        </div>    
    </div>
    </body>
    
</body>
</html>