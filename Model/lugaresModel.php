<?php

class lugaresModel {

    private $db;
    private $lugares;

    public function __construct(){

        $this->db = Conectar::conexion();
        $this->lugares = array();

    }

    public function selectLugar($id)
    {
        $result = $this->db->query("SELECT * FROM Lugar WHERE idLugar = '".$id."';");

        if (!$result) {
            return false;
        }

        while($filas=$result->fetch_assoc()){
            $this->lugares[]=$filas;
        }

        return $this->lugares;

    }

    public function selectLugarPorNombre($name)
    {
        $result = $this->db->query("SELECT * FROM Lugar WHERE nombre = '".$name."';");

        if (!$result) {
            return false;
        }

        while($filas=$result->fetch_assoc()){
            $this->lugares[]=$filas;
        }

        return $this->lugares;

    }

    public function eliminaLugar($idLugar)
    {
        $result = $this->db->query("UPDATE lugar SET activo=0 WHERE idLugar='".$idLugar."';");

        if (!$result) {
            return false;
        }

        return true;
    }

    public function activarLugar($idLugar)
    {
        $result = $this->db->query("UPDATE Lugar SET activo=1 WHERE idLugar='".$idLugar."';");

        if (!$result) {
            return false;
        }

        return true;
    }

    public function descactivarLugar($idLugar)
    {
        $result = $this->db->query("UPDATE Lugar SET activo=0 WHERE idLugar='".$idLugar."';");

        if (!$result) {
            return false;
        }

        return true;
    }

    public function mostrarLugares(){
        $result = $this->db->query("SELECT * FROM Lugar ORDER BY IDlugar");

        if (!$result){
            return false;
        }

        while($filas=$result->fetch_assoc()){
            $this->lugares[]=$filas;
        }

        return $this->lugares;

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

    public function registrarLugar($name, $ubicacion, $descripcion, $puntuacion){

        $consulta = $this->db->query("SELECT * FROM Lugar WHERE nombre='".$name."';");

        if(!$consulta){
            return false;
        }

        if($consulta->num_rows>0){
            return false;
        }

        $consulta = $this->db->query("INSERT INTO Lugar (nombre, ubicacion, descripcion, puntuacion) VALUES ('".$name."', '".$ubicacion."', '".$descripcion."', '".$puntuacion."');");
        
        if(!$consulta){
            return false;
        }

        return true;

    }

    public function editarLugar($idLugar, $name, $ubicacion, $descripcion, $puntuacion){

        $result = $this->db->query("UPDATE lugar SET nombre='".$name."', ubicacion='".$ubicacion."', descripcion='".$descripcion."', puntuacion='".$puntuacion."' WHERE idLugar='".$idLugar."';");

        if (!$result) {
            return false;
        }

        return true;

    }

}

?>