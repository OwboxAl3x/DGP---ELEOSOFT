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

}

?>