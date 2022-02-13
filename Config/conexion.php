<?php
    include('configuracion.php');

    Class Conexion{

        function RealizarConexion(){        
            try{
                $datos = new PDO("mysql:host=".HOST_NAME.";dbname=".DATABASE, USER_NAME, PASS);
                $datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $datos;
            }catch(PDOException $ex){
                echo $ex->getMessage();
                echo "Error en la conexión".$ex->getMessage();
            }
        }
    }

?>