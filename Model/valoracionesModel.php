<?php

class valoracionesModel {

    private $db;
    private $valoraciones;

    public function __construct(){

        $this->db = Conectar::conexion();
        $this->valoraciones = array();

    }


         public function rutaRealizadaValoracion ($idruta, $idusuario, $puntuacion, $descripcion){

        $result = $this->db->query("UPDATE realiza SET puntuacion ='".$puntuacion."', comentario='".$descripcion."' 
            WHERE IDruta='".$idruta."' and IDusuario='".$idusuario."';");

        $result = $this->db->query ("UPDATE ruta SET puntuacion = (SELECT AVG(puntuacion) from realiza WHERE IDruta='".$idruta."')");
        
        if(!$result){
            return false;
        }

        return true;
        
        }


        
        public function lugarVisitadoValoracion ($idlugar, $idusuario, $puntuacion, $descripcion){

        $result = $this->db->query("UPDATE visita SET puntuacion ='".$puntuacion."', comentario='".$descripcion."' 
        	WHERE IDlugar='".$idlugar."' and IDusuario='".$idusuario."';");

        $result = $this->db->query ("UPDATE lugar SET puntuacion = (SELECT AVG(puntuacion) from visita WHERE IDlugar='".$idlugar."')");
        
        if(!$result){
            return false;
        }

        return true;
        
        }


}

?>