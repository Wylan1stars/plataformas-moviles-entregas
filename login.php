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
           
    </head>
    
    <body>
        
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <form action="login_usuario_be.php" method="POST" id="loginform">

                        <input type="text" name="usuario" placeholder="Usuario" required>
                        
                        <input type="password" placeholder="Contraseña" name="contrasena" required>
                        
                        <button type="submit" title="Ingresar" name="Ingresar">Iniciar</button>
                        
                    </form>
                    <div class="pie-form">
                        <a href="registro.php">¿No tienes Cuenta? Registrate</a>
                    </div>
                </div>
                
            </div>
        </div>
            
    </body>
</html>