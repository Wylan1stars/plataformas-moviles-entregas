<?php
include 'conexionBD.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'
and contrasena='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    echo '
    <script>
     alert("Ingreso correctamente");
     window.location = "index.html"
    </script>
    ';
    exit;
}else{
    echo '
    <script>
     alert("Usuario o contraseña no existe");
     window.location = "registro.php"
    </script>
    ';
    exit;
}

?>