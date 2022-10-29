<!DOCTYPE html>
<html lang="es-Mx">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="MobileOptimized" content="width">
        <meta name="HandheldFriendly" content="true">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="AfiliAcción">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <link rel="shortcut icon" type="image/svg" href="./images/icoafiliaccion.svg">
        <link rel="apple-touch-icon" href="./images/icoafiliaccion.svg">
        <link rel="apple-touch-startup-image" href="./images/icoafiliaccion.svg">
        <link rel="icon" href="favicon.ico">
        <link rel="manifest" href="./manifest.json">
        
        <title>Afiliacción</title>
        <!-- Bootstrap core CSS -->
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Estilos personalizados -->
        <link href="./css/estilos.css" rel="stylesheet">
    </head>   
    <body class="bg-light">
            <?php
            require("./config/conexion.php");
            require("./controlador.php");
            ?>
            <main role="main">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="wrapper">
                                <div class="logo">
                                    <img src="./images/icoafiliaccion.svg" alt="">
                                </div>
                                <div class="text-center mt-4 name">
                                    <img src="./images/logo2.png" alt="AfiliAcción">
                                </div>
                                <form method="post" class="p-3 mt-3">
                                    <div class="form-field d-flex align-items-center">
                                        <span class="far fa-user"></span>
                                        <input type="text" name="userName" id="userName" placeholder="Usuario">
                                    </div>
                                    <div class="form-field d-flex align-items-center">
                                        <span class="fas fa-key"></span>
                                        <input type="password" name="password" id="pwd" placeholder="Contraseña">
                                    </div>
                                    <div>
                                          <!-- Entrar</input> -->
                                    </div>
                                    <input name="btningresar" class="btn btn-primary btn mt-3" type="submit"  value="Entrar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./script.js"></script>
    </body>
</html>