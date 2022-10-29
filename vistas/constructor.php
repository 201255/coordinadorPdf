<?php
include "./conexion.php";


$idseccion = $_GET['muni']; //$_POST["cveseccion"];
$db =  connect();
$municipio = $db->query("SELECT municipio, colonia FROM simpatizantes WHERE cvesec = '$idseccion' ORDER BY cvesec ASC LIMIT 1");
$muni = array();
$n = 0;

$datos = array();
if($r = $municipio->fetch_assoc()) {

    $datos['municipio'] = $r['municipio'];
    $datos['colonia'] = $r['colonia'];
   
}
mysqli_close($db);

$db =  connect();
$query = $db->query("SELECT * FROM Simpatizantes WHERE cvesec='$idseccion' ");
$clientes = array();
$n = 0;
while ($r = $query->fetch_object()) {
    $clientes[] = $r;
    $n++;
}
$datos['clientes'] = $clientes;
echo json_encode($datos);

mysqli_close($db);

?>