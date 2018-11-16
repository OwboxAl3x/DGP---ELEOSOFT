<?php

class usuariosModel{

    private $db;
    private $usuarios;

    public function __construct(){

        $this->db = Conectar::conexion();
        $this->usuarios = array();

    }

    public function buscarUsuario($username, $pass){

        $result = $this->db->query("SELECT * FROM Usuario WHERE (login='".$username."') && (pass='".$pass."');");

        if (!$result) {
            return false;
        }

        if ($result->num_rows<1) {
            return false;
        }

        return true;

    }

    public function registrar($username, $pass, $email, $nombre){

        $consulta = $this->db->query("SELECT * FROM Usuario WHERE (login='".$username."') or (email='".$email."');");

        if(!$consulta){
            return false;
        }

        if($consulta->num_rows>0){
            return false;
        }

        $consulta = $this->db->query("INSERT INTO Usuario (IDusuario, login, nombre, email, pass) VALUES (NULL, '".$username."', '".$nombre."', '".$email."', '".$pass."');");

        if(!$consulta){
            return false;
        }

        return true;

    }

}

?>