<?php

//Llamada al modelo
include("./Model/usuariosModel.php");

$usuarioLogin = new usuariosModel();
$usuarioAdmin = new usuariosModel();
$usuarioRegistro = new usuariosModel();
$usuarioEliminar = new usuariosModel();


if(isset($_GET['register'])){

    //Llamamos a la vista
    include("./View/register.php");

} else if (isset($_GET['admin'])) {

    include("./View/panelAdmin.php");

    if (isset($_GET['aniadeL'])){
        include("./View/aniadeLugar.php");
    } else if (isset($_GET['aniadeR'])){
        include("./View/aniadeRuta.php");
    }else if (isset($_GET['m_e_L'])){
        include("./View/m_e_L.php");
    }

} else if (isset($_GET['login'])) {

    //Llamamos a la vista
    include("./View/login.php");
}

?>