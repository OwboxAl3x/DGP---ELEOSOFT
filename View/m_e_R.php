<?php
$result = false;

//Comprueba de que los campos obligatorios están introducidos
if(isset($_POST['Modificar']))
{
    $id = $_POST['id'];
    $name = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $puntuacion=$_POST['puntuacion'];

    echo $id;
    echo $name;
    echo $descripcion;
    echo $puntuacion;
    

    $result = $rutaEditar->editarRuta($id, $name, $descripcion, $puntuacion);

    if($result){
        echo "bien";
    }
    else if(!$result)
        echo "maaaaal";
    else
        echo "algo pasa aqui";
}
if(isset($_POST['accion1'])){

  $id = $_POST['id'];

  $result = $rutaSeleccionar->selectRuta($id);

  ?>
  <form method="post">
  <?php
  for($i=0; $i<count($result); $i++)
  {
    ?>
    <input type="hidden" name="id" value="<?php echo $result[$i]["IDruta" ]; ?>">
    <p><label>Nombre:</p>
    <input type="text" name="nombre" value="<?php echo $result[$i]["nombre" ]; ?>">
    <p><label>Descripción:</p>
      <input type="text" name="descripcion" value="<?php echo $result[$i]["descripcion" ]; ?>" required></label>
    <p><label>Puntuación:</p>
      <input type="number" name="puntuacion" value="<?php echo $result[$i]["puntuacion" ]; ?>" required></label>
    <?php
  }
  ?>
    <input type="submit" name="Modificar" value="Modificar">
  </form>
<?php }
if(isset($_POST['accion2'])){


  $id = $_POST['id'];
  echo $id;

  $result = $rutaEliminar->eliminaRuta($id);

  if($result)
      echo "Inserción realizada";
  else if(!$result)
      echo "La inserción no ha sido posible";
}
if(isset($_POST['accion3'])){


    $id = $_POST['id'];
    echo $id;

    $result = $rutaActivar->activarRuta($id);

    if($result)
        echo "Inserción realizada";
    else if(!$result)
        echo "La inserción no ha sido posible";
  }
  if(isset($_POST['accion4'])){


    $id = $_POST['id'];
    echo $id;

    $result = $rutaDesactivar->desactivarRuta($id);

    if($result)
        echo "Inserción realizada";
    else if(!$result)
        echo "La inserción no ha sido posible";
  }
?>



<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Puntuación</th>
      <th scope="col">Activado</th>
      <th scope="col">Mod/Elim</th>
    </tr>
  </thead>
  <tbody>

  <?php

  $result = $rutaMostrar->mostrarRutas();

  for($i=0; $i<count($result); $i++){
    echo '<tr>';
      echo '<td>' . $result[$i]["nombre"] . '</td>';
      echo '<td>' . $result[$i]["descripcion"] . '</td>';
      echo '<td>' . $result[$i]["puntuacion"] . '</td>';
      if($result[$i]["activo"]==1){
        $valor="Activo";
        echo '<td>' . $valor . '</td>';
        echo '<td>  <form method="post">
              <input type="hidden" name="id" value="' ;echo $result[$i]['IDruta']; echo '" />
              <input type="submit" name="accion1" value="Editar"> <br>
              <input type="submit" name="accion2" value="Borrar">
              <input type="submit" name="accion4" value="Desactivar">
              </form> </td>';
        
      }
      if($result[$i]["activo"]==0){
        $valor="Desactivado";
        echo '<td>' . $valor . '</td>';
        echo '<td>  <form method="post">
              <input type="hidden" name="id" value="' ;echo $result[$i]['IDruta']; echo '" />
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
