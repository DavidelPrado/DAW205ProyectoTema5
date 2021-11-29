<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 01</title>
        <style>
            a{
                text-decoration: none;
                color: grey;
            }
            h1{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
            /*
             * @author: David del Prado Losada
             * @version: v1.Realizacion del ejercicio
             * Created on: 24/11/2021
             * Ejercicio 01.Desarrollo de un control de acceso con identificación del usuario basado en la función header().
             */
        
            echo '<h1><a href=".."><=</a>   PROYECTO TEMA 5 - EJERCICIO 01</h1>';
            
            if($_SERVER['PHP_AUTH_USER']!='admin' || $_SERVER['PHP_AUTH_PW']!='paso'){
                header('WWW-Authenticate: Basic realm="Prueba"');
                header('HTTP/1.0 401 Unauthorized');
                echo "El usuario no reconocido.";
                exit;
            }else{
                echo "<p>Usuario: {$_SERVER['PHP_AUTH_USER']}</p>";
                echo "<p>Contraseña: {$_SERVER['PHP_AUTH_PW']}</p>";
            }
        ?>
    </body>
</html>

