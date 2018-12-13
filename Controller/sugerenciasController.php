<?php

//Llamada al modelo
include("./Model/sugerenciasModel.php");
$sugeAceptarRutas = new sugerenciasModel();
$sugeAceptarLugares = new sugerenciasModel();
$sugeDenegarRutas = new sugerenciasModel();
$sugeDenegarLugares = new sugerenciasModel();
$sugeEliminarRutas = new sugerenciasModel();
$sugeEliminarLugares = new sugerenciasModel();
$sugeRPendientes = new sugerenciasModel();
$sugeLPendientes = new sugerenciasModel();
$sugeRutas = new sugerenciasModel();
$sugeLugares = new sugerenciasModel();
$NuevaSugeLugar = new sugerenciasModel();
$NuevaSugeRuta = new sugerenciasModel();
?>