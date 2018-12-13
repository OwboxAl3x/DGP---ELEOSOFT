<?php
$result = false;


//Comprueba de que los campos obligatorios están introducidos
if(isset($_POST['aniade'])){

    $name = $_POST['nom'];
    $descripcion = $_POST['desc'];
    $puntuacion='0';


    $result = $rutaAniade->registrarRuta($name, $descripcion, $puntuacion);

    if($result){
        echo "Inserción bien realizada";
    }
    else if(!$result)
        echo "Inserción mal realizada";
    else
        echo "algo pasa aqui";  // XD

}
?>

<h4>Añadir ruta: <br> <br> </h4>

<form method="post">

<div class="form-group">
    <label for="nom" class="control-label">Nombre:</label>

    <input type="text" class="form-control" name="nom"
    placeholder="Nombre Ruta. Ej: Ruta de la tapa">

</div>


<div class="form-group">
    <label for="desc" class="control-label">Descripción</label>

    <input type="text" class="form-control" name="desc"
    placeholder="En esta ruta podremos encontrar todo tipo de gastronimía...">

</div>

<div class="form-group"> <!-- Submit Button -->
    <button type="submit" name="aniade" class="btn btn-primary">Añadir Lugar</button>
</div>

</form>
