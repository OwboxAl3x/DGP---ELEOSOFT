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

include("Controller/lugaresController.php");
include("Controller/rutasController.php");
include("Controller/sugerenciasController.php");
include("Controller/actusController.php");
include("Controller/valoracionController.php");


//Si no se ha logueado ningun usuario
if (isset($_GET['login']) or (isset($_GET['register'])) or (isset($_GET['admin']))) {

    //Llamar al controlador de la página de login
    include("Controller/loginController.php");


} else if (isset($_GET['route'])) {

    include("View/route.php");

} else if (isset($_GET['route1'])) {

    include("View/route1.php");

} else if (isset($_GET['route2'])) {

    include("View/route2.php");

} else if (isset($_GET['place'])) {

    include("View/place.php");

} else if (isset($_GET['place1'])) {

    include("View/place1.php");

} else if (isset($_GET['place2'])) {

    include("View/place2.php");

} else if (isset($_GET['place3'])) {

    include("View/place3.php");

} else if (isset($_GET['place4'])) {

    include("View/place4.php");

} else if (isset($_GET['place5'])) {

    include("View/place5.php");

} else if (isset($_GET['place6'])) {

    include("View/place6.php");

} else if (isset($_GET['place7'])) {

    include("View/place7.php");

} else if (isset($_GET['place8'])) {

    include("View/place8.php");

} else if (isset($_GET['placesMenu'])) {

    include("View/placesMenu.php");

} else if (isset($_GET['routesMenu'])) {

    include("View/routesMenu.php");

} else if (isset($_GET['ValoracionLugarView'])) {

    include("View/ValoracionLugarView.php");

} else if (isset($_GET['ValoracionRutaView'])) {

    include("View/ValoracionRutaView.php");

} else {
    // Ver pagina principal
    include("View/home.php");
}
echo '<script>console.log("Debugger Master")</script>';  // esto es para debbugerar, eliminar.

//Footer de la aplicación
include("View/footer.php");
