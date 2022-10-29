<?php
    //require("../config/conexion.php");
    include "./conexion.php";
    //$idseccion = $_POST["cveseccion"];
    $db =  connect();
    //$query = $db->query("SELECT * FROM Simpatizantes WHERE idseccion='$idseccion' ");
    $sql = $db->query("SELECT municipio FROM Simpatizantes ORDER BY idseccion = '1510' ASC LIMIT 1"); //'$idseccion'
    $resultado = $db->query($sql);
    //$fila = $resultado->fetch_assoc();
    echo htmlentities($fila['municipio']);
    mysqli_close($db);


/*var data = [
                    <?php foreach ($clientes as $c) : ?>["<?php echo $c->rfc; ?>", "<?php echo $c->nombre; ?>", "<?php echo $c->apaterno; ?>", "<?php echo $c->amaterno; ?>", "<?php echo $c->idseccion; ?>"],
                    <?php endforeach; ?>
                ];*/

$idseccion = 1510; //$_POST["cveseccion"];
$db =  connect();
$query = $db->query("SELECT * FROM Simpatizantes WHERE idseccion='$idseccion' ");
$clientes = array();
$n = 0;
while ($r = $query->fetch_object()) {
    $clientes[] = $r;
    $n++;
}
$fecha = new DateTime();
echo $fecha->format('U = Y-m-d H:i:s') . "\n";

mysqli_close($db);
