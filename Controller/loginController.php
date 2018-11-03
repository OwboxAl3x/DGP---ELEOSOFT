<?php

//Llamada al modelo
include("Model/usuariosModel.php");

$usuario = new usuariosModel();

//Llamamos a la vista
include("View/login.php");

?>