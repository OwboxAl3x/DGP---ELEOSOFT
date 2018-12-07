<?php

class valoracionesModel {

    private $db;
    private $valoraciones;

    public function __construct(){

        $this->db = Conectar::conexion();
        $this->valoraciones = array();

    }

        public function rutaValoracion($nombre, $puntuacion, $descripcion){
        $result = $this->db->query("SELECT * FROM ruta WHERE nombre='".$nombre."';");
        
        if(!$result){
            return false;
        }
        if($result->num_rows>0){
            return false;
        }
        $result = $this->db->query("INSERT INTO ruta (nombre, puntuacion, descripcion) VALUES ('".$nombre."', '".$puntuacion."', '".$descripcion."');");
        
        if(!$result){
            return false;
        }
        return true;
    }


        public function lugarValoracion($nombre, $puntuacion, $descripcion){
        $result = $this->db->query("SELECT * FROM lugar WHERE nombre='".$nombre."';");
        
        if(!$result){
            return false;
        }
        if($result->num_rows>0){
            return false;
        }
        $result = $this->db->query("INSERT INTO lugar (nombre, puntuacion, descripcion) VALUES ('".$nombre."', '".$puntuacion."', '".$descripcion."');");
        
        if(!$result){
            return false;
        }
        return true;
    }
}
?>