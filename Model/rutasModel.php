<?php

class rutasModel {

    private $db;
    private $rutas;

    public function __construct(){

        $this->db = Conectar::conexion();
        $this->rutas = array();

    }

    public function realizaRuta($login){

        $result = $this->db->query("Select U.IDusuario, U.nombre
                                    From usuario U
                                    INNER JOIN realiza R
                                    ON U.idusuario = R.Idusuario
                                    WHERE IDusuario ='".$login."';");
        if (!$result) {
            return false;
        }

        if ($result->num_rows<1) {
            return false;
        }

        return true;
    }
}
?>