
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
