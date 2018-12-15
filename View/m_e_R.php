<?php
$result = false;

//Comprueba de que los campos obligatorios están introducidos
if(isset($_POST['Modificar']))
{
    $id = $_POST['id'];
    $name = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $puntuacion=$_POST['puntuacion'];

    $result = $rutaEditar->editarRuta($id, $name, $descripcion, $puntuacion);

    $numeroLugares = $_POST['cuantosLugares'];
    $idRuta = $rutaBuscadaPorNombre->buscarRuta($name);

    $result6 = $borrarLugaresRuta->borrarTodosAparece($idRuta[0]["IDruta"]);

    if ($result6){
        for ($i=0;$i<$numeroLugares;$i++){
            $lugarParaRuta = new lugaresModel();
            $idLugar = $lugarParaRuta->selectLugarPorNombre($_POST['lugar'.$i]);
            $result2 = $rutasConLugares->aniadirLugaresRuta($idRuta[0]['IDruta'], $idLugar[0]['IDlugar'], $_POST['pos'.$i]);
            if (!$result2) break;
        }
    }

    if($result && $result2 && $result6) {
        echo "bien";
        $ultModRuta = date("F j, Y, g:i a");
        $actuTomaUsu->actualizarFecha(3);
    }
    else
        echo "maaaaal";

}

?>

<br clear="all">
<br clear="all">
<h4>Modificar ruta:</h4>
<br clear="all">
<br clear="all">

<?php

if (isset($_POST['siguiente'])) {

$lugares = $_POST['lugares'];
$id = $_POST['id'];
$name = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$puntuacion=$_POST['puntuacion'];

?>

<form method="post">

    <?php for($i=0; $i<count($lugares); $i++)
    {
        echo '<div class="form-group"><label for="lugarN" class="control-label">'.$lugares[$i].'</label>
            <input type="text" class="form-control" name="pos'.$i.'" placeholder="Posición en la ruta"></div>
            <input type="text" hidden class="form-control" name="lugar'.$i.'" value="'.$lugares[$i].'" ></div>';
    }

    echo '<div class="form-group">

            <input hidden type="text" class="form-control" name="id" value="'.$id.'" >
            <input hidden type="text" class="form-control" name="nombre" value="'.$name.'" >
            <input hidden type="text" class="form-control" name="descripcion" value="'.$descripcion.'" >
            <input hidden type="text" class="form-control" name="puntuacion" value="'.$puntuacion.'" >
            <input hidden type="text" class="form-control" name="cuantosLugares" value="'.count($lugares).'" >
            
        </div>';

    echo '<div class="form-group">
            <button type="submit" name="Modificar" class="btn btn-primary">Modificar</button>
            <button type="submit" name="Cancelar" class="btn btn-primary">Cancelar</button>
        </div>
    </form>';

}

if(isset($_POST['accion1'])){

    $id = $_POST['id'];

    $result = $rutaSeleccionar->selectRuta($id);
    $result2 = $lugaresMostrar->mostrarLugares();
    $result3 = $lugaresRuta->selectLugaresRuta($id);

    ?>



    <form method="post">
    <?php
    for($i=0; $i<count($result); $i++)
    {
    ?>
        <input type="hidden" name="id" value="<?php echo $result[$i]["IDruta" ]; ?>">
        <div class="form-group">
            <label for="nombre" class="control-label">Nombre:</label>

            <input type="text" class="form-control" name="nombre" required value="<?php echo $result[$i]["nombre" ]; ?>">

        </div>
        <div class="form-group">
            <label for="descripcion" class="control-label">Descripción:</label>

            <textarea class="form-control" rows="5" name="descripcion" required><?php echo $result[$i]["descripcion" ]; ?></textarea>

        </div>
        <div class="form-group">
            <label for="lugares" class="control-label">Lugares:</label>

            <select required name="lugares[]" multiple class="chosen" style="width: 100%">
                <?php
                    $result4 = array_intersect_assoc($result2, $result3);
                    $j=0;
                    foreach ($result4 as $item) {
                        echo '<option selected>' . $item['nombre'] . '</option>';
                        $j++;
                    }
                    $result5 = array_diff_assoc($result2, $result3);
                    $k=0;
                    foreach ($result5 as $item2) {
                        echo '<option>' . $item2['nombre'] . '</option>';
                        $k++;
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="puntuacion" class="control-label">Puntuacion:</label>

            <input type="number" class="form-control" name="puntuacion" value="<?php echo $result[$i]["puntuacion" ]; ?>" required></label>
        </div>

    <?php
    }
    ?>
        <div class="form-group">
            <button type="submit" name="siguiente" class="btn btn-primary">Siguiente</button>
            <button type="submit" name="Cancelar" class="btn btn-primary">Cancelar</button>
        </div>
    </form>

<?php }

if(isset($_POST['accion2'])){


  $id = $_POST['id'];
  echo $id;

  $result = $rutaEliminar->eliminaRuta($id);

    if($result) {
        echo "Inserción realizada";
        $actuTomaUsu->actualizarFecha(3);
    }
  else if(!$result)
      echo "La inserción no ha sido posible";
}
if(isset($_POST['accion3'])){


    $id = $_POST['id'];
    echo $id;

    $result = $rutaActivar->activarRuta($id);

    if($result) {
        echo "Inserción realizada";
        $actuTomaUsu->actualizarFecha(3);
    }
    else if(!$result)
        echo "La inserción no ha sido posible";
  }
  if(isset($_POST['accion4'])){


    $id = $_POST['id'];
    echo $id;

    $result = $rutaDesactivar->desactivarRuta($id);

      if($result) {
          echo "Inserción realizada";
          $actuTomaUsu->actualizarFecha(3);
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

<script type="text/javascript">
    $(".chosen").chosen();
</script>