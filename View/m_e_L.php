<?php
$result = false;

//Comprueba de que los campos obligatorios están introducidos
if(isset($_POST['Modificar']))
{
    $id = $_POST['id'];
    $name = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $ubicacion = $_POST['ubicacion'];
    $puntuacion=$_POST['puntuacion'];
    
    $result = $lugarEditar->editarLugar($id, $name, $ubicacion, $descripcion, $puntuacion);

    if($result){
        echo "bien";
        $actuTomaUsu->actualizarFecha(2);
    }
    else
        echo "maaaaal";
}

?>

<br clear="all">
<br clear="all">
<h4>Modificar lugar:</h4>
<br clear="all">
<br clear="all">

<?php

if(isset($_POST['accion1'])){

    $id = $_POST['id'];

    $result = $lugarSeleccionar->selectLugar($id);

    ?>

    <form method="post">
    <?php
    for($i=0; $i<count($result); $i++)
    {
    ?>
        <input type="hidden" name="id" value="<?php echo $result[$i]["IDlugar" ]; ?>">
        <div class="form-group">
            <label for="nombre" class="control-label">Nombre:</label>

            <input type="text" class="form-control" name="nombre" required value="<?php echo $result[$i]["nombre" ]; ?>">

        </div>
        <div class="form-group">
            <label for="descripcion" class="control-label">Descripción:</label>

            <textarea class="form-control" rows="5" name="descripcion" required><?php echo $result[$i]["descripcion" ]; ?></textarea>

        </div>
        <div class="form-group">
            <label for="ubicacion" class="control-label">Ubicación:</label>

            <input type="text" class="form-control" name="ubicacion" required value="<?php echo $result[$i]["ubicacion" ]; ?>">

        </div>
        <div class="form-group">
            <label for="puntuacion" class="control-label">Puntuacion:</label>

            <input type="number" class="form-control" name="puntuacion" value="<?php echo $result[$i]["puntuacion" ]; ?>" required></label>
        </div>
    <?php
    }
    ?>
        <div class="form-group">
            <button type="submit" name="Modificar" class="btn btn-primary">Modificar</button>
            <button type="submit" name="Cancelar" class="btn btn-primary">Cancelar</button>
        </div>
    </form>

<?php }
if(isset($_POST['accion2'])){

  
  $id = $_POST['id'];
  
  $result = $lugarEliminar->eliminaLugar($id);

    if($result) {
        echo "Inserción realizada";
        $actuTomaUsu->actualizarFecha(2);
    }
  else if(!$result)
      echo "La inserción no ha sido posible";
}
if(isset($_POST['accion3'])){

  
  $id = $_POST['id'];
  
  $result = $lugarActivar->activarLugar($id);

    if($result) {
        echo "Inserción realizada";
        $actuTomaUsu->actualizarFecha(2);
    }
  else if(!$result)
      echo "La inserción no ha sido posible";
}
if(isset($_POST['accion4'])){

  
  $id = $_POST['id'];
  
  $result = $lugarDesactivar->descactivarLugar($id);

    if($result) {
        echo "Inserción realizada";
        $actuTomaUsu->actualizarFecha(2);
    }
  else if(!$result)
      echo "La inserción no ha sido posible";
}
?>



<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Ubicación</th>
      <th scope="col">Puntuación</th>
      <th scope="col">Activado</th>
      <th scope="col">Mod/Elim</th>
    </tr>
  </thead>
  <tbody>

  <?php

  $result = $lugaresMostrar->mostrarLugares();

  for($i=0; $i<count($result); $i++){
    echo '<tr>';
      echo '<td>' . $result[$i]["nombre" ] . '</td>';
      echo '<td>' . $result[$i]["descripcion" ] . '</td>';
      echo '<td>' . $result[$i]["ubicacion" ] . '</td>';
      echo '<td>' . $result[$i]["puntuacion" ] . '</td>';
      if($result[$i]["activo" ]==1)
      {
        $valor="Activado";
        echo '<td>' . $valor . '</td>';
        echo '<td>  <form method="post">
              <input type="hidden" name="id" value="' ;echo $result[$i]['IDlugar']; echo '" />
              <input type="submit" name="accion1" value="Editar"> <br>
              <input type="submit" name="accion2" value="Borrar">
              <input type="submit" name="accion4" value="Desactivar">
              </form> </td>';
      }
      if($result[$i]["activo" ]==0)
      {
        $valor="Desactivado";
        echo '<td>' . $valor . '</td>';
        echo '<td>  <form method="post">
              <input type="hidden" name="id" value="' ;echo $result[$i]['IDlugar']; echo '" />
              <input type="submit" name="accion1" value="Editar"> <br>
              <input type="submit" name="accion2" value="Borrar">
              <input type="submit" name="accion3" value="Activar">
              </form> </td>';
      }
      
    echo '<tr>';
  }

?>

  </tbody>
</table>