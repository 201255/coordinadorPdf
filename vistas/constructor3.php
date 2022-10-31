<?php
include "./conexion.php";


$idseccion = $_GET['muni']; //$_POST["cveseccion"];
$user = $_GET['user'];
$db =  connect();
$municipio = $db->query("SELECT municipio, colonia, userName, cvesec FROM simpatizantes WHERE cvesec ='$idseccion' and userName = '$user' ORDER BY cvesec ASC LIMIT 1");
$muni = array();
// $usert = array();
$n = 0;

$datos = array();
if($r = $municipio->fetch_assoc()) {

    $datos['municipio'] = $r['municipio'];
    $datos['colonia'] = $r['colonia'];
    $datos['userName'] = $r['userName'];
    $datos['cvesec'] = $r['cvesec'];
}
mysqli_close($db);

$db =  connect();
$query = $db->query("SELECT * FROM Simpatizantes WHERE cvesec ='$idseccion' and userName = '$user' ");
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