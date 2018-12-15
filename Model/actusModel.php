<?php

class actusModel {

    private $db;
    public $actus;

    public function __construct(){

        $this->db = Conectar::conexion();
        $this->actus = array();

    }

    public function actualizarFecha($tipo)
    {
        $result = $this->db->query("UPDATE Actus SET fecha='".date("Y-m-d H:i:s")."' WHERE tipo='".$tipo."';");

        if (!$result) {
            return false;
        }

        return true;
    }

    public function selectActu($tipo)
    {
        $result = $this->db->query("SELECT * FROM Actus WHERE tipo = '".$tipo."';");

        if (!$result) {
            return false;
        }

        while($filas=$result->fetch_assoc()){
            $this->actus[]=$filas;
        }

        return $this->actus;

    }

}
?>