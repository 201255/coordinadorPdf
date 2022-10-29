<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AfiliAcción</title>
    <link rel="icon" href="../images/favicon.ico">
    
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilos personalizados -->
    <link href="../css/estilos.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?php
        require("../config/conexion.php");
        //require("../controlador2.php");
    ?>
    <main>
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div class="wrapper">
                        <div class="logo">
                            <img src="../images/icoafiliaccion.svg" alt="">
                        </div>
                        <div class="text-center mt-4 name">
                            <img src="../images/logo2.png" alt="AfiliAcción">
                        </div>
                        <form  class="p-3 mt-3">
                            <div class="row">
                                <div class="col">
                                    <div class="p-4 mb-3 bg-light rounded">
                                        <ul class="list-group list-group-flush anyClass">
                                            <li class="list-group-item my-2">
                                                <div>
                                                    <form method="post"  class="form-inline">
                                                        <input id="rfc" type="text" name="rfc" class="form-control mr-sm-2 my-2" onkeyup="this.value = this.value.toUpperCase();" maxlength= "13" placeholder="RFC" />
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="list-group-item my-2">
                                                <div>
                                                    <form method="post"  class="form-inline">
                                                        <input type="text" NAME="Curp" class="form-control mr-sm-2 my-2" type="text" onkeyup="this.value = this.value.toUpperCase();"
                                                            maxlength="18" placeholder="CRUP" />
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="list-group-item my-2">
                                                <div>
                                                    <form method="post"  class="form-inline">
                                                        <input name=Paterno class="form-control mr-sm-2 my-2" type="text" onkeyup="this.value = this.value.toUpperCase();"
                                                            maxlength="35" placeholder="Apellido Paterno" />
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="list-group-item my-2">
                                                <div>
                                                    <form method="post"  class="form-inline">
                                                        <input name=Materno class="form-control mr-sm-2 my-2" type="text" onkeyup="this.value = this.value.toUpperCase();"
                                                            maxlength="35" placeholder="Apellido Materno" />
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="list-group-item my-2">
                                                <div>
                                                    <form method="post"  class="form-inline">
                                                        <input name=Nombre class="form-control mr-sm-2 my-2" type="text" onkeyup="this.value = this.value.toUpperCase();"
                                                            maxlength="35" placeholder="Nombre" />
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="list-group-item my-2">
                                                <div>
                                                    <form method="post"  class="form-inline">
                                                        <input name=Fecha class="form-control mr-sm-2 my-2" type="text" onkeyup="this.value = this.value.toUpperCase();"
                                                            maxlength="10" placeholder="Fecha Nacimiento" />
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="list-group-item my-2">
                                                <div>
                                                    <form method="post"  class="form-inline" method="post">
                                                        <input name=Sexo class="form-control mr-sm-2 my-2" type="text" maxlength="1"  pattern="[HM]]{1}" required onkeyup="this.value = this.value.toUpperCase();"
                                                            title="Sólo H o M" placeholder="Sexo"/>
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="list-group-item my-2">
                                                <div>
                                                    <form method="post"  class="form-inline">
                                                        <input name=Estado class="form-control mr-sm-2 my-2" type="text" onkeyup="this.value = this.value.toUpperCase();"
                                                            maxlength="25" placeholder="Estado" />
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="list-group-item my-2">
                                                <div>
                                                    <form method="post"  class="form-inline">
                                                        <input name=Municipio class="form-control mr-sm-2 my-2" type="text" onkeyup="this.value = this.value.toUpperCase();"
                                                            maxlength="50" placeholder="Municipio" />
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="list-group-item my-2">
                                                <div>
                                                    <form method="post"  class="form-inline">
                                                        <input name=Localidad class="form-control mr-sm-2 my-2" type="text" onkeyup="this.value = this.value.toUpperCase();"
                                                            maxlength="50" placeholder="Localidad" />
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="list-group-item my-2">
                                                <div>
                                                    <form method="post"  class="form-inline">
                                                        <input name=Domicilio class="form-control mr-sm-2 my-2" type="text" onkeyup="this.value = this.value.toUpperCase();"
                                                            maxlength="50" placeholder="Domicilio" />
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="list-group-item my-2">
                                                <div>
                                                    <form method="post"  class="form-inline">
                                                        <input name=Seccion class="form-control mr-sm-2 my-2" type="text" required pattern="[0-9]" title="Sólo números"
                                                            maxlength="4" placeholder="Sección"  />
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="list-group-item my-2">
                                                <div>
                                                    <form action="#" method="post"  class="form-inline">
                                                         <input name="btnAgendar" class="btn btn-primary btn mt-3" type="submit"  value="Agendar">
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="list-group-item my-2">
                                                <div>
                                                    <form class="form-inline">
                                                        <a href="../vistas/captura.html" class="btn btn-primary btn mt-3">Menu</a>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (!empty($_POST["btnAgendar"])) {
            $rfc =  $_POST["rfc"];
            $curp = (isset($_POST["Curp"]));
            $apaterno = (isset($_POST["Paterno"]));
            $amaterno = (isset($_POST["Materno"]));
            $nombre = (isset($_POST["Nombre"]));
            $fecha_nac = (isset($_POST["Fecha"]));
            $sexo = (isset($_POST["Sexo"]));
            $domicilio = (isset($_POST["Domicilio"]));
            $localidad = (isset($_POST["Localidad"]));
            $municipio = (isset($_POST["Municipio"]));
            $estado = (isset($_POST["Estado"]));
            $idseccion = (isset($_POST["Seccion"]));

            $sql = "INSERT INTO Simpatizantes(rfc,curp, apaterno, amaterno, nombre, fecha_nac, sexo, estado, municipio, localidad, domicilio, idseccion) VALUES ('$rfc','$curp','$apaterno','$amaterno','$nombre','$fecha_nac','$sexo','$estado','$municipio','$localidad','$domicilio','$idseccion')";

            if (mysqli_query($conn, $sql)) {
                echo "Registro creado satisfactoriamente\n";
                print("El valor de RFC es: " . $rfc);
            } else {
                echo "<br>" . "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        ?>
    </main>
</body>
</html>