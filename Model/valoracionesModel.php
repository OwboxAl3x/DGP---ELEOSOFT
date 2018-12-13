<?php

class valoracionesModel {

    private $db;
    private $valoraciones;

    public function __construct(){

        $this->db = Conectar::conexion();
        $this->valoraciones = array();

    }

        public function rutaRealizadaValoracion ($idruta, $idusuario, $puntuacion, $comentario){

        $result = $this->db->query("UPDATE realiza SET puntuacion ='".$puntuacion."', comentario='".$comentario."' WHERE idruta='".$idruta."' and idusuario='".$idusuario."';");
        
        if(!$result){
            return false;
        }

        return true;
        
        }


        public function puntuacionTotalRuta ($idruta){

        	$result = $this->db->query ("UPDATE ruta SET idruta, puntuacion SELECT idruta, AVG(puntuacion) from realiza WHERE idruta='".$idruta."' group by idruta;");

        	if (!$result) {
            return false;
        }
        
        return true;
    
        }
        

        public function lugarVisitadoValoracion ($idlugar, $idusuario, $puntuacion, $comentario){

        $result = $this->db->query("UPDATE visita SET puntuacion ='".$puntuacion."', comentario='".$comentario."' 
        	WHERE idlugar='".$idlugar."' and idusuario='".$idusuario."';");
        
        if(!$result){
            return false;
        }

        return true;
        
        }


        public function puntuacionTotalLugar ($idlugar){

        	$result = $this->db->query ("UPDATE lugar SET idlugar, puntuacion SELECT idlugar, AVG(puntuacion) from visita WHERE idlugar='".$idlugar."' group by idlugar;");

        	if (!$result) {
            return false;
        }
        
        return true;
    
        }