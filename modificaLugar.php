<?php

//Conectar la base de datos
require("DB/connect.php");

//Recuperar sesion abierta
session_start();

//Header de la aplicación
include("View/header2.php");

if (isset($_GET['fuera'])){
    //Libera las variables de SESION
    session_unset();
    header("location:index.php");
}


if (isset($_GET['login']) or (isset($_GET['register']))) {

    //Llamar al controlador de la página de login
    include("Controller/loginController.php");

} else {
    //include("View/RouteCard.php");

}
include('View/panelAdmin.php');
?>

<table border="1">
  <tr>
    <td>NOMBRE</td>
    <td>DESCRIPCION</td>
    <td>RECURSO</td>
</tr>

<?php

//Footer de la aplicación
include("View/footer.php");
