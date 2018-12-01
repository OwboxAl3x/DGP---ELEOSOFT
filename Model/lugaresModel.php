<?php

class lugaresModel {

    private $db;
    private $lugares;

    public function __construct(){

        $this->db = Conectar::conexion();
        $this->lugares = array();

    }

    public function buscarLugar($name){

        $result = $this->db->query("SELECT * FROM Lugar WHERE nombre='".$name."';");

        if (!$result) {
            return false;
        }

        if ($result->num_rows<1) {
            return false;
        }

        return true;

    }

    public function registrarLugar($name, $ubicacion, $descripcion){

        $consulta = $this->db->query("SELECT * FROM Lugar WHERE nombre='".$name."';");

        if(!$consulta){
            return false;
        }

        if($consulta->num_rows>0){
            return false;
        }

        $consulta = $this->db->query("INSERT INTO Lugar (nombre, ubicacion, descripcion) VALUES ('".$name."', '".$ubicacion."', '".$descripcion."');");

        if(!$consulta){
            return false;
        }

        return true;

    }

    public function editarLugar($idLugar, $name, $ubicacion, $descripcion){

        $result = $this->db->query("UPDATE lugar SET nombre='".$name."', ubicacion='".$ubicacion."', descripcion='".$descripcion."' WHERE idLugar='".$idLugar."';");

        if (!$result) {
            return false;
        }

        return true;

    }

}

?>