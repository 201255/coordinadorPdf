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

    <!--<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">-->
    <script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
    <!--<script src="../bootstrap/js/bootstrap.min.js"></script>-->
    <script src="../jspdf/dist/jspdf.min.js"></script>
    <script src="../js/jspdf.plugin.autotable.min.js"></script>
</head>

<body class="bg-light">
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
                                                        <input id="nomlider" type="text" name="nomlider" class="form-control mr-sm-2 my-2" onkeyup="this.value = this.value.toUpperCase();" maxlength="35" placeholder="Lider Seccional" />
                                                    </div>

                                                    <div class="card-body">
                                                        <input type="submit" id="GenerarPDF" value="PDF" class="btn btn-default">
                                                        <br>
                                                    </div>
                                                    <!-- <input id="nomLider" type="text" name="nomLider" class="form-control mr-sm-2 my-2" onkeyup="this.value = this.value.toUpperCase();" maxlength="35" placeholder="Lider Seccional" />

                                                    <input type="text" id= "cveseccion" name="cveseccion" class="form-control mr-sm-2 my-2" type="text" onkeyup="this.value = this.value.toUpperCase();" maxlength="4" placeholder="Clave de Sección" />

                                                    <input name="btnImprimir" class="btn btn-primary btn mt-3" type="submit" value="Imprimir">

                                                    <a href="../vistas/captura.html" class="btn btn-primary btn mt-3">Menu</a> -->
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
            var vlider = $("#nomlider").val();

            $.ajax({
                url: `constructor2.php/?user=${vlider}&muni=${vseccion}`,
                dataType: "json",
                context: document.body
            }).done(function(resultado) {


                var muni = resultado.municipio;
                var colo = resultado.colonia;
                var user = resultado.userName;
                var cve = resultado.cvesec;

                pdf.setFontSize(12);
                pdf.text(10, 10, "Simpatizantes por Sección");
                pdf.setFontSize(8);
                pdf.text(10, 15, "Lider Seccional ");
                pdf.text(30, 15, user);
                pdf.text(10, 18, "Clave Seccion ");
                pdf.text(30, 18, cve);
                pdf.setFontSize(12);
                var columns = ["Clave Electoral", "Nombres", "Apellido Paterno", "Apellido Materno","Fecha Captura"];

                var data = [];
                var temporal = [];

                $.each(resultado.clientes, function(key, value) {
                    temporal = [value['cveElectoral'], value['nombre'], value['apaterno'], value['amaterno'], value['fecha_sistema']];
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