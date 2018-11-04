<?php

//Conectar la base de datos
require("DB/connect.php");

//Recuperar sesion abierta
session_start();

//Libera las variables de SESION
//session_unset();

//Header de la aplicación
include("View/header.php");

//Si no se ha logueado ningun usuario
if (!isset($_SESSION['usuario'])){

    //Llamar al controlador de la página de login
    include("Controller/loginController.php");


} else if ($_SESSION['usuario'] == "nouser"){

    //Footer de la aplicación
    include("View/footer.php");

} else {

    //Footer de la aplicación
    include("View/footer.php");

}