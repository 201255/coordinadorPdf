<?php
/*function conectar(){
    $user= "u411862740_root";
    $pass= "KjLZptK5SnD#H75"; 
    $server="localhost";
    $bd= "u411862740_bdafiliaccion"; 
    $con=mysqli_connect($server,$user,$pass,$bd);
    return $con;
}*/
$servername = "localhost";
$database = "bdafiliaccion";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

/*$conn = mysqli_connect($servername, $username, $password, $database);*/
// Check connection
/*if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);*/
?>