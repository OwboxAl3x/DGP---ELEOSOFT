<?php

class rutasModel {

    private $db;
    public $rutas;
    public $rutasAparecen;

    public function __construct(){

        $this->db = Conectar::conexion();
        $this->rutas = array();
        $this->rutasAparecen = array();

    }

    public function realizaRuta($login, $ID){

        $result = $this->db->query("Select U.IDusuario, U.nombre
                                    From usuario U
                                    INNER JOIN realiza R
                                    ON U.IDusuario = R.IDusuario
                                    WHERE IDusuario ='".$login."'
                                    and IDruta ='".$ID."';");
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

    public function buscarRuta($name){

        $consulta = $this->db->query("SELECT * FROM Ruta WHERE nombre='".$name."';");

        if(!$consulta){
            return false;
        }

        while($filas=$consulta->fetch_assoc()){
            $this->rutas[]=$filas;
        }

        return $this->rutas;
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

    public function aniadirLugaresRuta($idRuta, $idLugar, $pos)
    {
        $result = $this->db->query("INSERT INTO aparece(IDruta, IDlugar, posicion) VALUES ('".$idRuta."', '".$idLugar."', '".$pos."');");

        if (!$result) {
            return false;
        }

        return true;
    }

    public function selectLugaresRuta($idRuta)
    {

        $result = $this->db->query("SELECT IDlugar FROM aparece WHERE idruta = '".$idRuta."';");

        if (!$result) {
            return false;
        }

        while($filas=$result->fetch_assoc()){
            $this->rutasAparecen[]=$filas;
        }

        return $this->rutasAparecen;

    }

    public function apareceLugarEnRuta($idRuta, $idLugar)
    {

        $result = $this->db->query("SELECT IDlugar FROM aparece WHERE idruta = '".$idRuta."' and idlugar = '".$idLugar."';");

        if (!$result) {
            return false;
        }

        if($result->num_rows<1){
            return false;
        }

        return true;

    }

    public function borrarAparece($idRuta, $idLugar){

        $result = $this->db->query("DELETE FROM Aparece WHERE idLugar='".$idLugar."' and idRuta='".$idRuta."';");

        if (!$result) {
            return false;
        }

        return true;

    }

    public function borrarTodosAparece($idRuta){

        $result = $this->db->query("DELETE FROM Aparece WHERE idRuta='".$idRuta."';");

        if (!$result) {
            return false;
        }

        return true;

    }

}
?>
