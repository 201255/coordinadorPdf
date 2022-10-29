<?php

if (!empty($_POST["btningresar"])) {
    
    if (empty($_POST["userName"]) and empty($_POST["password"])){
        echo '<div class = "alert alert-danger"> Los Campos estan vacios</div>';
    }else {
        $userName=$_POST["userName"];
        $password=$_POST["password"];
        $sql=$conn->query(" select * from Login where userName='$userName' and pass='$password' ");
        if ($datos=$sql->fetch_object()) {
            header("location: ./vistas/captura.html");
            
        }else {
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
        }
    }
    mysqli_close($conn);
}
?>