<?php
if (!empty($_POST["Ingresar"])) {
    if (empty($_POST["Ingresar"]) and empty($_POST["password"])) {
        echo "Los campos estan vacios";
    } else {
        $usuario=$_POST["usuario"];
        $contraseña=$_POST["password"];
        $sql=$conexion->query("select * from usuario where usuario='$usuario' and contraseña='$contraseña' ");
        if ($datos=$sql->fetch_object()) {
            header("location:index.html");
        } else {
            echo "No se encontro el usuario";
        }
        
    }
    
}
?>