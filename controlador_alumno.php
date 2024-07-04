<?php
    if(!empty($_POST["btningresar"])){
        if(empty($_POST["usuario"])and empty($_POST["password"])){
            echo '<div clas="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
        }else{
            $usuario=$_POST["usuario"];
            $clave=$_POST["password"];
            $sql = $conexion->prepare("SELECT * FROM usuario WHERE usuario = :usuario AND clave = :clave");
            $sql->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            $sql->bindParam(':clave', $clave, PDO::PARAM_STR);
            $sql->execute();
            if ($dato = $sql->fetch(PDO::FETCH_OBJ)) {
                header("Location: ./vistaUsuario/panel.php");
                exit();
            } else {
                echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
            }
        }
    }
?>