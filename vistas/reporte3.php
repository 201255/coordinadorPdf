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
    //require("../config/conexion.php");
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
                        <div class="row">
                            <div class="col">
                                <div class="p-4 mb-3 bg-light rounded">
                                    <ul class="list-group list-group-flush anyClass">
                                        <li class="list-group-item my-2">
                                            <div>
                                                <form method="post" class="form-inline">
                                                    <input id="nomLider" type="text" name="nomLider" class="form-control mr-sm-2 my-2" onkeyup="this.value = this.value.toUpperCase();" maxlength="35" placeholder="Lider Seccional" />

                                                    <input type="text" NAME="cveSeccion" class="form-control mr-sm-2 my-2" type="text" onkeyup="this.value = this.value.toUpperCase();" maxlength="4" placeholder="Clave de Sección" />

                                                    <input name="btnImprimir" class="btn btn-primary btn mt-3" type="submit" value="Imprimir">

                                                    <a href="../vistas/captura.html" class="btn btn-primary btn mt-3">Menu</a>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        /*if (!empty($_POST["btnAgendar"])) {
            if (empty($_POST["rfc"]) or empty($_POST["Curp"])) {
                echo '<div class= "alert alert-danger"> Los Campos Estan Vacios</div>';
            } else {
                $rfc =  $_POST["rfc"];
                $curp = $_POST["Curp"];
                $apaterno = $_POST["Paterno"];
                $amaterno = $_POST["Materno"];
                $nombre = $_POST["Nombre"];
                $fecha_nac = $_POST["Fecha"];
                $sexo = $_POST["Sexo"];
                $domicilio = $_POST["Domicilio"];
                $localidad = $_POST["Localidad"];
                $municipio = $_POST["Municipio"];
                $estado = $_POST["Estado"];
                $numtelefono = $_POST["Telefono"];
                $cveElectoral = $_POST["CveElectoral"];
                $idseccion = $_POST["Seccion"];

                $sql = "INSERT INTO Simpatizantes(rfc,curp, apaterno, amaterno, nombre, fecha_nac, sexo, estado, municipio, localidad, domicilio,numtelefono,cveElectoral,idseccion) VALUES ('$rfc','$curp','$apaterno','$amaterno','$nombre','$fecha_nac','$sexo','$estado','$municipio','$localidad','$domicilio','$numtelefono','$cveElectoral','$idseccion')";

                if (mysqli_query($conn, $sql)) {
                    echo "Registro creado satisfactoriamente\n";
                } else {
                    echo "<br>" . "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }

            mysqli_close($conn);
        }*/
        ?>
    </main>
</body>

</html>