<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 00</title>
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
             * Ejercicio 00.Mostrar el contenido de las variables superglobales y phpinfo().
             */
        
            echo '<h1><a href=".."><=</a>   PROYECTO TEMA 5 - EJERCICIO 0</h1>';
            
            echo '<h3>Contenido de las variables superglobales: <h3>';
            echo '<h4>Variable $GLOBALS: </h4>';
            echo '<pre>';
            print_r($GLOBALS);
            echo '</pre>';
            
            echo '<h4>Variable $_SERVER: </h4>';
            echo '<pre>';
            print_r($_SERVER);
            echo '</pre>';
            
            echo '<h4>Variable $_SESSION: </h4>';
            echo '<pre>';
            
            echo '</pre>';
            
            echo '<h4>Variable $_FILES: </h4>';
            echo '<pre>';
            print_r($_FILES);
            echo '</pre>';
            
            echo '<h4>Variable $_ENV: </h4>';
            echo '<pre>';
            print_r($_ENV);
            echo '</pre>';
            
            echo '<h4>Variable $_REQUEST: </h4>';
            echo '<pre>';
            print_r($_REQUEST);
            echo '</pre>';
            
            echo '<h3>PHPInfo: <h3>';
            phpinfo();
        ?>
    </body>
</html>

