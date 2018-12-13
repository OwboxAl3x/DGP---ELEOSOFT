<?php

class usuariosModel{


    private $db;
    private $usuarios;

    public function __construct(){

        $this->db = Conectar::conexion();
        $this->usuarios = array();

    }

    public function mostrarUser()
    {
        $result = $this->db->query("SELECT * FROM Usuario WHERE rol=1;");

        if (!$result) {
            return false;
        }

        if ($result->num_rows<1) {
            return false;
        }

        while($filas=$result->fetch_assoc()){
            $this->usuarios[]=$filas;
        }

        return $this->usuarios;

    }
    public function mostrarAdmin()
    {
        $result = $this->db->query("SELECT * FROM Usuario WHERE rol=2;");

        if (!$result) {
            return false;
        }

        if ($result->num_rows<1) {
            return false;
        }

        while($filas=$result->fetch_assoc()){
            $this->usuarios[]=$filas;
        }

        return $this->usuarios;

    }
    

    public function desactivarUser($idUsuario)
    {
        $result = $this->db->query("UPDATE Usuario SET activo=0 WHERE idUsuario='".$idUsuario."';");

        if (!$result) {
            return false;
        }

        return true;
    }


    public function desactivarAdmin($idUsuario)
    {
        $result = $this->db->query("UPDATE Usuario SET activo=0 WHERE idUsuario='".$idUsuario."';");

        if (!$result) {
            return false;
        }

        return true;
    }


    public function activarUser($idUsuario)
    {
        $result = $this->db->query("UPDATE Usuario SET activo=1 WHERE idUsuario='".$idUsuario."';");

        if (!$result) {
            return false;
        }

        return true;
    }

    public function activarAdmin($idUsuario)
    {
        $result = $this->db->query("UPDATE Usuario SET activo=1 WHERE idUsuario='".$idUsuario."';");

        if (!$result) {
            return false;
        }

        return true;
    }

    public function borrarUser($idUsuario)
    {
        $result = $this->db->query("DELETE FROM Usuario WHERE idUsuario='".$idUsuario."';");

        if (!$result) {
            return false;
        }

        return true;
    }
    public function borrarAdmin($idUsuario)
    {
        $result = $this->db->query("DELETE FROM Usuario WHERE idUsuario='".$idUsuario."';");

        if (!$result) {
            return false;
        }

        return true;
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

    public function esAdmin($username, $pass){

        $result = $this->db->query("SELECT * FROM Usuario WHERE (login='".$username."') && (pass='".$pass."') && (rol=2);");

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


    public function selectUser($idUsuario)
    {
        $result = $this->db->query("SELECT * FROM usuario WHERE idUsuario = '".$idUsuario."';");

        if (!$result) {
            return false;
        }

        while($filas=$result->fetch_assoc()){
            $this->usuarios[]=$filas;
        }

        return $this->usuarios;

    }

}

?>
