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

<form>

    <div class="form-group">
        <label for="nombre_ruta" class="control-label">Nombre:</label>
        <input type="text" class="form-control" name="nombre" placeholder="Ruta de San Bernardo">
    </div>

    <div class="form-group">
        <label for="descripcion_ruta" class="control-label">Descripción</label>
        <input type="text" class="form-control" name="descripcion_ruta" placeholder="Esta ruta se encuentra en un pueblo de...">
    </div>

    <div class="custom-file">
      <label for="descripcion_lugar" class="control-label">Añadir Recurso:</label>
      <input type="file" class="custom-file-input" id="customFileLang" lang="es">
      <label class="custom-file-label" for="customFileLang">Añadir recurso</label>
    </div>

    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Añadir Lugar</button>
    </div>


</form>

<?php

//Footer de la aplicación
include("View/footer.php");
