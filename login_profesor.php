<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="loginCss/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="loginCss/style.css">
   <link rel="stylesheet" type="text/css" href="loginCss/estilo">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="loginCss/all.min.css"> 
   <link rel="stylesheet" href="loginCss/fontawesome.min.css">

   <link href="https://tresplazas.com/web/img/big_punto_de_venta.png" rel="shortcut icon">
   <title>Inicio de sesión</title>
</head>

<body>
   <img class="wave" src="img/background.jpg">
   <div class="container">
      <div class="img">
         <img src="img/colegio.jpg">
      </div>
      <div class="login-content">
         <form method="post" action="">
            <img src="img/profesor.jpg">
            <h2 class="title">BIENVENIDO</h2>
            <?php
            include("conexion.php");
            include("controlador.php");
            ?>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <h5>Usuario</h5>
                  <input id="usuario" type="text" class="input" name="usuario">
               </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <h5>Contraseña</h5>
                  <input type="password" id="input" class="input" name="password">
               </div>
            </div>
            <div class="view">
               <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
            </div>
            <input name="btningresar" class="btn" href='ini.php' type="submit" value="INICIAR SESION"> 
         </form>
      </div>
   </div>
   <script src="loginJs/fontawesome.js"></script>
   <script src="loginJs/main.js"></script>
   <script src="loginJs/main2.js"></script>
   <script src="loginJs/jquery.min.js"></script>
   <script src="loginJs/bootstrap.js"></script>
   <script src="loginJs/bootstrap.bundle.js"></script>
</body>
</html>