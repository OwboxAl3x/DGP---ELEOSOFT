
<h4>Sugerencias de Lugares</h4>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">IDsugelugar</th>
      <th scope="col">IDusuario</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Fecha</th>
      <th scope="col">Latitud</th>
      <th scope="col">Longitud</th>
      <th scope="col">Estado</th>
      <th scope="col">Opciones</th>

    </tr>
  </thead>
  <tbody>

  <?php

  //-----------------------------------------------------------
  //Si pulso el boton de aceptar lugar
  if(isset($_POST['aceptar1'])){

    $id = $_POST['id'];
  
    $result = $sugeAceptarLugares->activarLugar($id);

      if($result) {
          echo "Inserción realizada";
          $actuTomaUsu->actualizarFecha(4);
      }
    else if(!$result)
        echo "La inserción no ha sido posible";
  }
  //Si pulso el boton de denegar lugar
  if(isset($_POST['denegar1'])){
  
    $id = $_POST['id'];
  
    $result = $sugeDenegarLugares->denegarLugar($id);

      if($result) {
          echo "Inserción realizada";
          $actuTomaUsu->actualizarFecha(4);
      }
    else if(!$result)
        echo "La inserción no ha sido posible";
  }
  if(isset($_POST['borrar1'])){
  
    $id = $_POST['id'];
  
    $result = $sugeDenegarLugares->sugeLugarBorra($id);

      if($result) {
          echo "Inserción realizada";
          $actuTomaUsu->actualizarFecha(4);
      }
    else if(!$result)
        echo "La inserción no ha sido posible";
  }
  
    $result = $sugeLugares->sugeLugar();
  
    for($i=0; $i<count($result); $i++){
      echo '<tr>';
      echo '<td>' . $result[$i]["IDsugelugar"] . '</td>';
      echo '<td>' . $result[$i]["IDusuario"] . '</td>';
      echo '<td>' . $result[$i]["nombre"] . '</td>';
      echo '<td>' . $result[$i]["descripcion"] . '</td>';
      echo '<td>' . $result[$i]["fecha"] . '</td>';
      echo '<td>' . $result[$i]["latitud"] . '</td>';
      echo '<td>' . $result[$i]["longitud"] . '</td>';
        $valor=$result[$i]["estado"];
        if($valor==1)
        {
          $estado="Pendiente";
          echo '<td>' . $estado . '</td>';
          echo '<td>  <form method="post">
                <input type="hidden" name="id" value="' ;echo $result[$i]['IDsugelugar']; echo '" />
                <input type="submit" name="aceptar1" value="Aceptar"> <br>
                <input type="submit" name="denegar1" value="Denegar">
                <input type="submit" name="borrar1" value="Eliminar">
                </form> </td>';
          echo '<tr>';
        }
        else if($valor==2){
          $estado="Aceptada";
          echo '<td>' . $estado . '</td>';
          echo '<td>  <form method="post">
                <input type="hidden" name="id" value="' ;echo $result[$i]['IDsugelugar']; echo '" />
                <input type="submit" name="denegar1" value="Denegar"> <br>
                <input type="submit" name="borrar1" value="Borrar">
                </form> </td>';
          echo '<tr>';
        }
        else if($valor==3){
          $estado="Denegada";
          echo '<td>' . $estado . '</td>';
          echo '<td>  <form method="post">
                <input type="hidden" name="id" value="' ;echo $result[$i]['IDsugelugar']; echo '" />
                <input type="submit" name="aceptar1" value="Aceptar"> <br>
                <input type="submit" name="borrar1" value="Borrar">
                </form> </td>';
          echo '<tr>';
        }
        
    }
  



  //------------------------------------------------------------

?>

  </tbody>
</table>

<h4>Sugerencias de Rutas</h4>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">IDsugeRuta</th>
      <th scope="col">IDusuario</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Fecha</th>
      <th scope="col">Estado</th>
      <th scope="col">Opciones</th>

    </tr>
  </thead>
  <tbody>

  <?php
//Si le doy al botón de aceptar rutas
if(isset($_POST['aceptar'])){

  $id = $_POST['id'];

  $result = $sugeAceptarRutas->activarRuta($id);

    if($result) {
        echo "Inserción realizada";
        $actuTomaUsu->actualizarFecha(4);
    }
  else if(!$result)
      echo "La inserción no ha sido posible";
}
//Si le doy al botón de denegar rutas
if(isset($_POST['denegar'])){

  $id = $_POST['id'];

  $result = $sugeDenegarRutas->denegarRuta($id);

    if($result) {
        echo "Inserción realizada";
        $actuTomaUsu->actualizarFecha(4);
    }
  else if(!$result)
      echo "La inserción no ha sido posible";
}
//Si le doy al botón de borrar rutas
if(isset($_POST['borrar'])){

  $id = $_POST['id'];

  $result = $sugeDenegarRutas->sugeRutaBorra($id);

    if($result) {
        echo "Inserción realizada";
        $actuTomaUsu->actualizarFecha(4);
    }
  else if(!$result)
      echo "La inserción no ha sido posible";
}

  $result = $sugeRutas->sugeRuta();

  for($i=0; $i<count($result); $i++){
    echo '<tr>';
      echo '<td>' . $result[$i]["IDsugeruta"] . '</td>';
      echo '<td>' . $result[$i]["IDusuario"] . '</td>';
      echo '<td>' . $result[$i]["nombre"] . '</td>';
      echo '<td>' . $result[$i]["descripcion"] . '</td>';
      echo '<td>' . $result[$i]["fecha"] . '</td>';
      $valor=$result[$i]["estado"];
      if($valor==1)
      {
        $estado="Pendiente";
        echo '<td>' . $estado . '</td>';
        echo '<td>  <form method="post">
              <input type="hidden" name="id" value="' ;echo $result[$i]['IDsugeruta']; echo '" />
              <input type="submit" name="aceptar" value="Aceptar"> <br>
              <input type="submit" name="denegar" value="Denegar">
              <input type="submit" name="borrar" value="Eliminar">
              </form> </td>';
        echo '<tr>';
      }
      else if($valor==2){
        $estado="Aceptada";
        echo '<td>' . $estado . '</td>';
        echo '<td>  <form method="post">
              <input type="hidden" name="id" value="' ;echo $result[$i]['IDsugeruta']; echo '" />
              <input type="submit" name="denegar" value="Denegar"> <br>
              <input type="submit" name="borrar" value="Borrar">
              </form> </td>';
        echo '<tr>';
      }
      else if($valor==3){
        $estado="Denegada";
        echo '<td>' . $estado . '</td>';
        echo '<td>  <form method="post">
              <input type="hidden" name="id" value="' ;echo $result[$i]['IDsugeruta']; echo '" />
              <input type="submit" name="aceptar" value="Aceptar"> <br>
              <input type="submit" name="borrar" value="Borrar">
              </form> </td>';
        echo '<tr>';
      }
      
  }

?>

  </tbody>
</table>