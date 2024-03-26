<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title> Formulario de Acceso </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="author" content="Videojuegos & Desarrollo">
        <meta name="description" content="Muestra de un formulario de acceso en HTML y CSS">
        <meta name="keywords" content="Formulario Acceso, Formulario de LogIn">
        
        
        
        <link rel="stylesheet" href="style.css">
        
        <style type="text/css">
            
        </style>
        
        <script type="text/javascript">
        
        </script>
        
    </head>
    
    <body>
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        Registrate
                    </div>
                    <form action="registro_usuario_be.php" method="POST" id="loginform">
                        <input type="text" name="usuario" placeholder="Usuario" required>
                        
                        <input type="email" name="email" placeholder="Email" required>
                        
                        <input type="password" placeholder="Contraseña" name="contrasena" required>
                        
                        <button type="submit" title="Ingresar" name="Ingresar">Registrarse</button>
                    </form>
                    <div class="pie-form">
                        <a href="login.php">¿Ya tienes Cuenta? iniciar sesion</a>
                    </div>
                </div>
                
            </div>
        </div>
            
    </body>
</html>