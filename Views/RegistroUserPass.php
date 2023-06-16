<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario/Contraseña</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

    <body class="body1">
    <form action="../Controller/controllerRegistroPass.php" method="POST" class="form-box" >
    <div class="text-center" id="logoIni">
                <img src="assets/imagenes/Simbolo.png" alt="">
                </div>

                <br>
                <br>
    <h2 class="text-center">NUEVO USUARIO Y CONTRASEÑA</h2>
    <br>
    <br>    
    <div class="div1">
        <div class="text-center">
         <i class="fa-solid fa-user"></i>
         <label for="">Usuario</label>
         <input type="text" class="form-control" name="usuario" placeholder="usuario">
        </div>
        <div class="text-center">
         <label for="">Contraseña</label>
         <input type="text" class="form-control" name="pass" placeholder="contraseña">
        </div>
    </div>
    <br>
                <div class="text-center">
                <button type="submit" value="RegistrarUyP">Registrar </button> 
                </div>
    </form>        
    </body>
</html>