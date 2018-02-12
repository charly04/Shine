<?php
class Conectar{
    public static function conexion(){
        $servername = "localhost";
        $username = "root";
        $password = "1234";
        $dbname = "shine";

        $conexion = new mysqli($servername, $username, $password, $dbname);
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
