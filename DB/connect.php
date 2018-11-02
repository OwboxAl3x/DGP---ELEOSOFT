<?php
class Conectar{

    public static function conexion(){

        $conexion = new mysqli('localhost', 'Eleosoft', '3jY5iLVUP9zlqqJl', 'Eleosoft');
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;

    }

}