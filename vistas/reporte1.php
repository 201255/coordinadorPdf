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
    /*require("../config/conexion.php");

    $query = $conn->query("SELECT * FROM Simpatizantes WHERE idseccion=1510");
    $clientes = array();
    $n = 0;
    while ($r = $query->fetch_object()) {
        $clientes[] = $r;
        $n++;
    }*/
    require("../config/conexion.php");
    if (!empty($_POST["btnImprimir"])) {

        if (empty($_POST["cveSeccion"])) {
            echo '<div class = "alert alert-danger"> Los Campos estan vacios</div>';
        } else {
            $idseccion = $_POST["cveSeccion"];
            $sql = $conn->query("SELECT * FROM reporte1 WHERE idseccion='$idseccion'");
            $clientes = array();
            $n = 0;
            while ($r = $sql->fetch_object()) {
                $clientes[] = $r;
                $n++;
            }
        }
    }
    mysqli_close($conn);
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
                                                    <input id="cveSeccion" type="text" name="cveSeccion" class="form-control mr-sm-2 my-2" onkeyup="this.value = this.value.toUpperCase();" maxlength="4" placeholder="Clave de Sección" />

                                                    <input name="btnImprimir" id="btnImprimir" class="btn btn-primary btn mt-3" type="submit" value="Imprimir">

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
        <script>
            $("#btnImprimir").click(function() {
                var pdf = new jsPDF();
                pdf.text(20, 20, "Simpatizantes por Sección");

                var columns = ["RFC", "Nombres", "Apellido Paterno", "Apellido Materno", "Sección"];
                var data = [
                    <?php foreach ($clientes as $c) : ?>["<?php echo $c->rfc; ?>", "<?php echo $c->nombre; ?>", "<?php echo $c->apaterno; ?>", "<?php echo $c->amaterno; ?>", "<?php echo $c->idseccion; ?>"],
                    <?php endforeach; ?>
                ];

                pdf.autoTable(columns, data, {
                    margin: {
                        top: 25
                    }
                });

                pdf.save('MiTablaCliente.pdf');

            });
        </script>
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="../jspdf/dist/jspdf.min.js"></script>
    <script src="../js/jspdf.plugin.autotable.min.js"></script>
</body>

</html>