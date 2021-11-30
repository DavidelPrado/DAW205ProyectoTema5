<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 02</title>
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
             * @version: v2.Realizacion del ejercicio
             * Created on: 29/11/2021
             * Ejercicio 02.Desarrollo de un control de acceso con identificación del usuario basado en la función header() y en el uso de una tabla “Usuario” de la base de datos. (PDO).
             */
        
            echo '<h1><a href=".."><=</a>   PROYECTO TEMA 5 - EJERCICIO 02</h1>';
            
            //Incluir el archivo de conexión con la base de datos
            require_once "../config/confDBPDO.php";
            
            if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])){
                header('WWW-Authenticate: Basic realm="Prueba"');
                header('HTTP/1.0 401 Unauthorized');
                echo "Usuario no reconocido.";
                exit;
            }else{
                try{
                    //Conectar a la base de datos
                    $DAW205DBDepartamentos = new PDO(HOST, USER, PASSWORD);
                    //Cambiar el atributo ERRMODE para que muestre la excepcion en caso de error
                    $DAW205DBDepartamentos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                    //Inicializar variables donde guardo el usuario y la contraseña
                    $usuario=$_SERVER['PHP_AUTH_USER'];
                    $password=$_SERVER['PHP_AUTH_PW'];

                    $consulta="SELECT T01_CodUsuario, T01_Password FROM T01_Usuario WHERE T01_CodUsuario='{$usuario}'";
                    $resultado=$DAW205DBDepartamentos->prepare($consulta);
                    $resultado->execute();
                    
                    if($resultado->rowCount() > 0){
                        $oUsuario = $resultado->fetchObject();
                        //Encripto la contraseña
                        $passwordEncriptada = hash('sha256', ($usuario.$password));
                        if(($oUsuario->T01_CodUsuario!=$usuario)&&($oUsuario->T01_Password!=$passwordEncriptada)){
                            header('WWW-Authenticate: Basic realm="Contenido restringido"');
                            header("HTTP/1.0 401 Unauthorized");
                            exit;
                        }else{
                            echo "<p>Usuario: {$_SERVER['PHP_AUTH_USER']}</p>";
                            echo "<p>Contraseña: {$_SERVER['PHP_AUTH_PW']}</p>";
                        }
                    }
                }catch(PDOException $excepcion){
                    //Si hay un error revertir los cambios
                    $DAW205DBDepartamentos->rollBack();
                    $errorExcepcion=$excepcion->getCode();
                    $mensajeExcepcion=$excepcion->getMessage();

                    //Mostrar el mensaje de la excepcion
                    echo '<p>Error: '.$mensajeExcepcion.'</p>';
                    //Mostrar el codigo de la excepcion
                    echo '<p>Codigo de error: '.$errorExcepcion.'</p>';
                }finally{
                    //Cerrar conexión
                    unset($DAW205DBDepartamentos);
                }
            }
            
            
        ?>
    </body>
</html>

