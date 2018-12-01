
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
