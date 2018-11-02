<?php

//Conectar la base de datos
require("DB/connect.php");

//Recuperar sesion abierta
session_start();

//Si no se ha logueado ningun usuario
if(!isset($_SESSION['usuario'])){

    //Llamar al controlador de la página de login
    include("Controller/loginController.php");

} else {



}