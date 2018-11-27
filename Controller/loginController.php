<?php

//Llamada al modelo
include("../Model/usuariosModel.php");

$usuarioLogin = new usuariosModel();
$usuarioRegistro = new usuariosModel();

if(isset($_GET['register'])){

    //Llamamos a la vista
    include("../View/register.php");

} else {

    //Llamamos a la vista
    include("../View/login.php");

}

?>