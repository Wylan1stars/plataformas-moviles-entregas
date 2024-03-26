<?php
       
       include 'conexionBD.php';

       $usuario = $_POST['usuario'];
       $email = $_POST['email'];
       $contrasena = $_POST['contrasena'];

       $query = "INSERT INTO usuarios(usuario, email, contrasena) 
                 VALUES('$usuario', '$email', '$contrasena')";

       //verificar que el email no se repita
       $verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' ");

       if(mysqli_num_rows($verificar_email) > 0){
              echo'
              <script>
              alert("Este email ya esta regsitrado");
              window.location= "registro.php"
              </script>
              '; 
              exit();
       }

         //verificar que el nombre de usario no se repita
         $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

         if(mysqli_num_rows($verificar_usuario) > 0){
                echo'
                <script>
                alert("Este email ya esta regsitrado");
                window.location= "registro.php"
                </script>
                '; 
                exit();
         }

       $ejecutar = mysqli_query($conexion, $query);

       if($ejecutar){
              echo '
              <script>
              alert("Usuario registrado exitosamente");
              window.location= "index.html";
              </script>
              ';
       }else{
              echo '
              <script>
              alert("intentalo nuevamente");
              window.location= "registro.php";
              </script>
              ';
       }


       mysqli_close($conexion);


?>