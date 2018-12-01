<?php

//Conectar la base de datos
require("DB/connect.php");

//Recuperar sesion abierta
session_start();

//Header de la aplicación
if (isset($_GET['admin'])){
    include("View/header2.php");
} else {
    include("View/header.php");
}

if (isset($_GET['fuera'])){
    //Libera las variables de SESION
    session_unset();
    header("location:index.php");
}

// Menu superior
if (isset($_GET['admin'])){
    include("View/NavBar2.php");
} else {
    include("View/NavBar.php");
}


//Si no se ha logueado ningun usuario
if (isset($_GET['login']) or (isset($_GET['register'])) or (isset($_GET['admin']))) {

    //Llamar al controlador de la página de login
    include("Controller/loginController.php");

} else if (isset($_GET['route'])) {

    //Llamar al controlador de la página de login
    include("View/route.php");

}  else {
    // Ver pagina principal
    include("View/home.php");
}
echo '<script>console.log("Debugger Master")</script>';

//Footer de la aplicación
include("View/footer.php");