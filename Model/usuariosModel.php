<?php

class usuariosModel{

    private $db;
    private $usuarios;

    public function __construct(){

        $this->db = Conectar::conexion();
        $this->usuarios = array();

    }

    public function buscarUsuario($username, $pass){

        $result = $this->db->query("SELECT * FROM Usuario WHERE (Nombre='".$username."') && (Contrasenia='".$pass."');");

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