<?php
class Conectar{

    public static function conexion(){

        $conexion = new mysqli('localhost', 'Eleosoft', '3jY5iLVUP9zlqqJl', 'Eleosoft');  // LOCAL
        //$conexion = new mysqli('db4free.net', 'eleosoft', 'eleosoft', 'eleosoft_db', '3306');  // REMOTO
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;

    }

}