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

    public function mostrarRutas(){
        $result = $this->db->query("SELECT * FROM Ruta ORDER BY NOMBRE");

        if (!$result){
            return false;
        }

        while($filas=$result->fetch_assoc()){
            $this->rutas[]=$filas;
        }

        return $this->rutas;

    }

    public function registrarRuta($name, $descripcion, $puntuacion){

        $consulta = $this->db->query("SELECT * FROM Ruta WHERE nombre='".$name."';");

        if(!$consulta){
            return false;
        }

        if($consulta->num_rows>0){
            return false;
        }

        $consulta = $this->db->query("INSERT INTO Ruta (nombre, descripcion, puntuacion) VALUES ('".$name."', '".$descripcion."', '".$puntuacion."');");

        if(!$consulta){
            return false;
        }

        return true;

    }

    public function editarRuta($idRuta, $name, $descripcion, $puntuacion){

        $result = $this->db->query("UPDATE Ruta SET nombre='".$name."', descripcion='".$descripcion."', puntuacion='".$puntuacion."' WHERE idRuta='".$idRuta."';");

        if (!$result) {
            return false;
        }

        return true;

    }

    public function eliminaRuta($idRuta)
    {
        $result = $this->db->query("UPDATE Ruta SET activo=0 WHERE idRuta='".$idRuta."';");

        if (!$result) {
            return false;
        }

        return true;
    }

    public function activarRuta($idRuta)
    {
        $result = $this->db->query("UPDATE Ruta SET activo=1 WHERE idRuta='".$idRuta."';");

        if (!$result) {
            return false;
        }

        return true;
    }
    public function desactivarRuta($idRuta)
    {
        $result = $this->db->query("UPDATE Ruta SET activo=0 WHERE idRuta='".$idRuta."';");

        if (!$result) {
            return false;
        }

        return true;
    }

    public function selectRuta($id)
    {
        $result = $this->db->query("SELECT * FROM Ruta WHERE idruta = '".$id."';");

        if (!$result) {
            return false;
        }

        while($filas=$result->fetch_assoc()){
            $this->rutas[]=$filas;
        }

        return $this->rutas;

    }

}
?>
