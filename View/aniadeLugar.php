
<?php
$result = false;


//Comprueba de que los campos obligatorios están introducidos
if(isset($_POST['aniade'])){

    $name = $_POST['nom'];
    $descripcion = $_POST['desc'];
    $ubicacion = $_POST['ubi'];
    $puntuacion='0';
    
    $result = $lugarRegistrar->registrarLugar($name, $ubicacion, $descripcion, $puntuacion);

    if($result){
        echo "bien";
    }
    else if(!$result)
        echo "maaaaal";
    else
        echo "algo pasa aqui";
    
}
?>


<form method="post">

    <div class="form-group">
        <label for="nom" class="control-label">Nombre:</label>

        <input type="text" class="form-control" name="nom" 
        placeholder="Nombre Lugar. Ej: Plaza Mariana">

    </div>

    <div class="form-group">
        <label for="ubicacion" class="control-label">Ubicación:</label>

        <input type="text" class="form-control" name="ubi"  
        placeholder="Ubicación en grados">

    </div>

    <div class="form-group">
        <label for="desc" class="control-label">Descripción</label>

        <input type="text" class="form-control" name="desc"
        placeholder="Descripción Lugar. Ej: Lugar bonito y romantico...">

    </div>

    <div class="custom-file">
      <input type="file" class="custom-file-input" id="customFileLang" lang="es">
      <label class="custom-file-label" for="customFileLang">Añadir recurso</label>
      <p><br></p>
    </div>

    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" name="aniade" class="btn btn-primary">Añadir Lugar</button>
    </div>

</form>
