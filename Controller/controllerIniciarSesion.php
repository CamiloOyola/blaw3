<?php
    session_start();

    include ('../Model/conexion.php');
    $objConexion= conexion();

        

       if(isset($_POST['usuario']) && ($_POST['pass'])){

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars ($data);
        return $data;
    }
    
   $Usuario = validate($_POST['usuario']);
   $Clave = validate($_POST['pass']);


    if (empty($Usuario)){
        header("location: ../Views/IniciarSesion.php?error=El Usuario Es Requerido");
        exit();
        }elseif (empty($Clave)){
            header("location: ../Views/IniciarSesion.php?error=La Clave Es Requerida");
            exit();
        }else{

            $Clave = md5($Clave);

            $Sql = "SELECT * FROM acceso WHERE usuario ='$Usuario' AND pass='$Clave'";

           
            $result = $objConexion->query($Sql);

            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['usuario'] === $Usuario && $row['pass'] === $Clave ){
                    $_SESSION['usuario'] = $row ['usuario'];
                    $_SESSION['pass'] = $row ['pass'];
                    $_SESSION['idAcceso'] = $row ['idAcceso'];

                    header("Location: ../Views/IniciarSesion.php");
                    exit();            
                }else{
                    header("Location: ../Views/IniciarSesion.php?error= El usuario o la contraseña son incorrectos");
                    exit();
                }
            }else {
                header("Location: ../Views/IniciarSesion.php?error= El usuario o la contraseña son incorrectos");
                exit();
            }
        }
    }else {
        header("Location: ../Views/ListarCol.php");
    exit();
}