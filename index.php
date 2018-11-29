<?php

//Conectar la base de datos
require("DB/connect.php");

//Recuperar sesion abierta
session_start();

//Header de la aplicación
include("View/header.php");

if (isset($_GET['fuera'])){
    //Libera las variables de SESION
    //session_unset();
    header("location:index.php");
}

// Menu superior
include("View/NavBar.php");

//Si no se ha logueado ningun usuario
if (isset($_GET['login']) or (isset($_GET['register']))) {

    //Llamar al controlador de la página de login
    include("Controller/loginController.php");

} else {
    // Ver pagina principal
    include("View/home.php");
}
echo '<script>console.log("Debugger Master")</script>';

//Footer de la aplicación
include("View/footer.php");