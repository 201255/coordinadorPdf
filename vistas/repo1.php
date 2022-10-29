<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AfiliAcción</title>
    <link rel="icon" href="../images/favicon.ico">
    <title>Reporte 1</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link href="../css/estilos.css" rel="stylesheet">

    <!--<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">-->
    <script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
    <!--<script src="../bootstrap/js/bootstrap.min.js"></script>-->
    <script src="../jspdf/dist/jspdf.min.js"></script>
    <script src="../js/jspdf.plugin.autotable.min.js"></script>

</head>

<body class="bg-light">
    <br>
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
                                                <form method="post" class="form-inline" id="formulario">
                                                    <div class="card-body">
                                                        <input id="cveseccion" type="text" name="cveseccion" class="form-control mr-sm-2 my-2" onkeyup="this.value = this.value.toUpperCase();" maxlength="4" placeholder="Clave de Sección" />
                                                    </div>

                                                    <div class="card-body">
                                                        <input type="submit" id="GenerarPDF" value="PDF" class="btn btn-default">
                                                        <br>
                                                    </div>
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
    </main>
    <?php
    //require("../config/conexion.php");
    include "./conexion.php";
    ?>


    <script>
        $("#formulario").submit(function() {
            var pdf = new jsPDF();
            var vseccion = $("#cveseccion").val();

            $.ajax({
                url: "constructor.php/?muni=" + vseccion,
                dataType: "json",
                context: document.body
            }).done(function(resultado) {


                var muni = resultado.municipio;
                var colo = resultado.colonia;

                pdf.setFontSize(12);
                pdf.text(10, 10, "Simpatizantes por Sección");
                pdf.setFontSize(8);
                pdf.text(10, 15, "Municipio ");
                pdf.text(24, 15, muni);
                pdf.text(10, 18, "Localidad ");
                pdf.text(24, 18, colo);
                pdf.setFontSize(12);
                var columns = ["RFC", "Nombres", "Apellido Paterno", "Apellido Materno", "Sección"];

                var data = [];
                var temporal = [];

                $.each(resultado.clientes, function(key, value) {
                    temporal = [value['rfc'], value['nombre'], value['apaterno'], value['amaterno'], value['cvesec']];
                    data.push(temporal);

                });


                pdf.autoTable(columns, data, {
                    margin: {
                        top: 25
                    }
                });

                pdf.save('MiTablaCliente.pdf');




            });
            return false;


        });
    </script>
</body>

</html>