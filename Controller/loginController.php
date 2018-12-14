<?php

//Llamada al modelo
include("./Model/usuariosModel.php");

$usuarioLogin = new usuariosModel();
$usuarioAdmin = new usuariosModel();
$usuarioRegistro = new usuariosModel();
$usuarioMostrar = new usuariosModel();
$adminMostrar = new usuariosModel();
$usuarioActivar = new usuariosModel();
$adminActivar = new usuariosModel();
$usuarioDesactivar = new usuariosModel();
$adminDesactivar = new usuariosModel();
$usuarioBorrar = new usuariosModel();
$adminBorrar = new usuariosModel();

if(isset($_GET['register'])){

    //Llamamos a la vista
    include("./View/register.php");

} else if (isset($_GET['admin'])) {

    if (isset($_GET['aniadeL'])){
        include("./View/aniadeLugar.php");
    } else if (isset($_GET['aniadeR'])){
        include("./View/aniadeRuta.php");
    }else if (isset($_GET['m_e_L'])){
        include("./View/m_e_L.php");
    }else if (isset($_GET['m_e_R'])){
        include("./View/m_e_R.php");
    }else if (isset($_GET['ver_sugerencias'])){
        include("./View/ver_sugerencias.php");
    }else if (isset($_GET['gestUs'])){
        include("./View/gestUs.php");
    }else if (isset($_GET['gestAd'])){
        include("./View/gestAd.php");
    }else {
        include("./View/panelAdmin.php");
    }

} else if (isset($_GET['login'])) {

    //Llamamos a la vista
    include("./View/login.php");
}

?>
