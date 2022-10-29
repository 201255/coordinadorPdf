<?php

$servername = "localhost";
$database = "bdafiliaccion";
$username = "root";
$password = "KjLZptK5SnD#H75";
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully \n";


if (!empty($_POST["btnAgendar"])) {
        $rfc =  (isset($_POST["rfc"]));
        $curp = (isset($_POST["Curp"]));
        $apaterno= (isset($_POST["Paterno"]));
        $amaterno= (isset($_POST["Materno"]));
        $nombre= (isset($_POST["Nombre"]));
        $fecha_nac= (isset($_POST["Fecha"]));
        $sexo= (isset($_POST["Sexo"]));
        $domicilio = (isset($_POST["Domicilio"]));
        $localidad = (isset($_POST["Localidad"]));
        $municipio = (isset($_POST["Municipio"]));
        $estado= (isset($_POST["Estado"]));
        $idseccion= (isset($_POST["Seccion"]));
       
        $sql = "INSERT INTO Simpatizantes(rfc,curp, apaterno, amaterno, nombre, fecha_nac, sexo, estado, municipio, localidad, domicilio, idseccion) VALUES ('$rfc','$curp','$apaterno','$amaterno','$nombre','$fecha_nac','$sexo','$estado','$municipio','$localidad','$domicilio','$idseccion')";

        if(mysqli_query($conn,$sql)){
            echo "Registro creado satisfactoriamente\n";
            print ("El valor de RFC es: " . $rfc);
        }else{
            echo "<br>" . "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    mysqli_close($conn);
    }
        

        /*$sql=$conn->query("insert into Simpatizantes (cveElectoral, curp, apaterno, amaterno, nombre, fecha_nac, sexo, estado, municipio, localidad, domicilio, idseccion) values ('$cveElectoral','$curp','$apaterno','$amaterno','$nombre','$fecha_nac','$sexo','$estado','$municipio','$localidad','$domicilio','$idseccion')");
        if ($sql==1) {
            echo '<div class="alert alert-success ">Registro Exitoso</div>';
            
        }else {
            echo '<div class="alert alert-danger">Registro Fallido</div>';
        }*/
?>