<?php

class sugerenciasModel {

    private $db;
    private $sugerencias;

    public function __construct(){

        $this->db = Conectar::conexion();
        $this->sugerencias = array();

    }

    public function sugeLugarPendientes()
    {
        $result = $this->db->query("SELECT * FROM sugerencialugar WHERE estado=1 ORDER BY fecha;");

        if (!$result) {
            return false;
        }

        if ($result->num_rows<1) {
            return false;
        }

        while($filas=$result->fetch_assoc()){
            $this->sugerencias[]=$filas;
        }

        return $this->sugerencias;

    }
    //Activo una sugerencia de ruta
    public function activarRuta($idsugeruta)
    {
        $result = $this->db->query("UPDATE SugerenciaRuta SET estado=2 WHERE IDSugeruta='".$idsugeruta."';");
        
        if (!$result) {
            return false;
        }
        
        return true;
    }
    
    public function activarLugar($idsugelugar)
    {
        $result = $this->db->query("UPDATE SugerenciaLugar SET estado=2 WHERE IDSugelugar='".$idsugelugar."';");
        
        if (!$result) {
            return false;
        }
        
        return true;
    }
    
    //Denego una sugerencia de ruta
    public function denegarRuta($idsugeruta)
    {
        $result = $this->db->query("UPDATE SugerenciaRuta SET estado=3 WHERE IDSugeruta='".$idsugeruta."';");
        
        if (!$result) {
            return false;
        }
        
        return true;
    }
    //Denego una sugerencia de lugar
    public function denegarLugar($idsugelugar)
    {
        $result = $this->db->query("UPDATE SugerenciaLugar SET estado=3 WHERE IDSugelugar='".$idsugelugar."';");
        
        if (!$result) {
            return false;
        }
        
        return true;
    }

    //Borra una fila de la tabla Sugerencias de rutas
    public function sugeRutaBorra($idsugeruta)
    {
        $result = $this->db->query("DELETE FROM SugerenciaRuta WHERE IDSugeruta='".$idsugeruta."';");

        if (!$result) {
            return false;
        }

        return true;
    }

    //Borra una fila de la tabla Sugerencias de lugar
    public function sugeLugarBorra($idsugelugar)
    {
        $result = $this->db->query("DELETE FROM SugerenciaLugar WHERE IDSugelugar='".$idsugelugar."';");

        if (!$result) {
            return false;
        }

        return true;
    }
    
    //Muestra todos las sugerencias de lugar ordenado por estado
    public function sugeLugar()
    {
        $result = $this->db->query("SELECT * FROM SugerenciaLugar  ORDER BY estado;");

        if (!$result) {
            return false;
        }

        if ($result->num_rows<1) {
            return false;
        }

        while($filas=$result->fetch_assoc()){
            $this->sugerencias[]=$filas;
        }

        return $this->sugerencias;

    }

    public function sugeRuta()
    {
        $result = $this->db->query("SELECT * FROM SugerenciaRuta  ORDER BY estado;");

        if (!$result) {
            return false;
        }

        if ($result->num_rows<1) {
            return false;
        }

        while($filas=$result->fetch_assoc()){
            $this->sugerencias[]=$filas;
        }

        return $this->sugerencias;

    }

    public function sugeRutasPendientes()
    {
        $result = $this->db->query("SELECT * FROM sugerenciaruta WHERE estado=1 ORDER BY fecha;");

        if (!$result) {
            return false;
        }

        if ($result->num_rows<1) {
            return false;
        }

        while($filas=$result->fetch_assoc()){
            $this->sugerencias[]=$filas;
        }

        return $this->sugerencias;

    }

    //Añade la nueva sugerencia de lugar y ruta

    public function NuevaSugeLugar($name, $descripcion, $latitud, $longitud){

        $consulta = $this->db->query("SELECT * FROM sugerencialugar WHERE nombre='".$name."';");

        if(!$consulta){
            return false;
        }

        if($consulta->num_rows>0){
            return false;
        }

        $consulta = $this->db->query("INSERT INTO sugerencialugar (nombre, descripcion, latitud, longitud) VALUES ('".$name."', '".$descripcion."', '".$latitud."', '".$longitud."');");
        
        if(!$consulta){
            return false;
        }

        return true;

    }

    public function NuevaSugeRuta($name, $descripcion){

        $consulta = $this->db->query("SELECT * FROM sugerenciaruta WHERE nombre='".$name."';");

        if(!$consulta){
            return false;
        }

        if($consulta->num_rows>0){
            return false;
        }

        $consulta = $this->db->query("INSERT INTO sugerenciaruta (nombre, descripcion) VALUES ('".$name."', '".$descripcion."');");
        
        if(!$consulta){
            return false;
        }

        return true;

    }

}

?>