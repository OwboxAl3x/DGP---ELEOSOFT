<?php
class Conectar{

    public static function conexion(){
        // Entorno de pruebas locales

        $conexion = new mysqli('localhost', 'Eleosoft', '3jY5iLVUP9zlqqJl', 'Eleosoft');
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;

        /*
        // Entorno de pruebas remoto
        $conexion = new mysqli('db4free.net', 'eleosoft', 'eleosoft', 'eleosoft_db', '3306');
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;*/

    }

}