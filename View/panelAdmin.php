<div class="card-deck">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Usuarios</h5>
      <p class="card-text"> <a href="#"> Eliminar Usuario </a> </p>
      <p class="card-text"> <a href="#"> Añadir Adimnistrador </a> </p>
      <p class="card-text"> <a href="#"> Eliminar Adimnistrador </a> </p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Lugares</h5>
      <p class="card-text"> <a href="index.php?admin&aniadeL"> Añadir Lugar </a> </p>
      <p class="card-text"> <a href="index.php?admin&modiL"> Modificar Lugar </a> </p>
      <p class="card-text"> <a href="#"> Eliminar Lugar </a> </p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Rutas</h5>
      <p class="card-text"> <a href="index.php?admin&aniadeR"> Añadir Ruta </a> </p>
      <p class="card-text"> <a href="#"> Modificar Ruta </a> </p>
      <p class="card-text"> <a href="#"> Eliminar Ruta </a> </p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<br class="all" />
<div class="card-deck">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Sugerencias</h5>
      <p class="card-text"> <a href="#"> Ver Sugerencias </a> </p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Recursos</h5>
      <p class="card-text"> <a href="#"> Añadir Recurso </a> </p>
      <p class="card-text"> <a href="#"> Eliminar Recurso </a> </p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<br class="all" />
<br class="all" />

<?php

    if (isset($_GET['aniadeL'])) {

?>

        <form>

            <div class="form-group">
                <label for="nombre_lugar" class="control-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" placeholder="Mirador de San Nicolás">
            </div>

            <div class="form-group">
                <label for="descripcion_lugar" class="control-label">Descripción</label>
                <input type="text" class="form-control" name="descripcion_lugar" placeholder="Esta lugar se encuentra en un pueblo de...">
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
    } else if (isset($_GET['aniadeR'])) {
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
    } else if (isset($_GET['modiL'])) {
?>
        <table border="1">
            <tr>
                <td>NOMBRE</td>
                <td>DESCRIPCION</td>
                <td>RECURSO</td>
            </tr>
        </table>
<?php
    }
?>