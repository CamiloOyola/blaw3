<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="style.css?20232905">-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

    <!--header--menu-->
    <!--
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
                    <div class="text-center">
                    <a href="RegistroColaborador.php" class="btn__Inicio">Registrar</a> 
                    </div>                                          
                </div>
            </div>
            </header>-->

    <body class="body1">
        <form action="../Controller/controllerIniciarSesion.php" method="POST" class="form-box">

            <div class="text-center" id="logoIni">
                <img src="assets/imagenes/Simbolo.png" alt="">
            </div>

            <br>
            <br>

            <h1>INICIAR SESION</h1>
            <br>
            <br>

            <?php
            if (isset($_GET['error'])) {
                ?>
                <p class="error">
                    <?php
                    echo $_GET['error']
                        ?>
                </p>
                <?php
            }

            ?>

            <div class="text-left">
                <i class="fa-solid fa-user"></i>
                <label class="form-label">Usuario</label>
                <input type="text" class="form-control" name="usuario" placeholder="Usuario">
            </div>

            <div class="text-left">
                <i class="fa-solid fa-unlock"></i>
                <label class="form-label">Clave</label>
                <input type="password" class="form-control" name="pass" placeholder="Clave">
            </div>
            <!--<button type="submit">Iniciar Sesion</button> <a href ="OlvidoPass.php">Recordar</a>
                boton original por si las moscas-->

            <br>
            <div class="text-center">
                <button type="submit">Iniciar Sesion</button>
                <br>
                <br>
                <a href="OlvidoPass.php" class="btn__Inicio">Olvido Contraseña</a>
            </div>
        </form>

        <br>

    </body>

</body>

</html>