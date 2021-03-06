<br clear="all">
<br clear="all">
<h4>Añadir Administrador:</h4>
<br clear="all">
<br clear="all">

<form method="post">

<div class="form-group">
    <label for="nom" class="control-label">Nombre:</label>

    <input type="text" class="form-control" name="nombre">

</div>

<div class="form-group">
    <label for="nom" class="control-label">Login:</label>

    <input type="text" class="form-control" name="login">

</div>

<div class="form-group">
    <label for="nom" class="control-label">Email:</label>

    <input type="email" class="form-control" name="email">

</div>

<div class="form-group">
    <label for="nom" class="control-label">Password:</label>

    <input type="text" class="form-control" name="pass">

</div>

<div class="form-group"> <!-- Submit Button -->
    <button type="submit" name="aniade" class="btn btn-primary">Añadir Administrador</button>
</div>

</form>



<h4> Gestion Administradores</h4>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">IDusuario</th>
      <th scope="col">Login</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Activo</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>

  <?php

  //-----------------------------------------------------------

  if(isset($_POST['aniade'])){

    $nombre = $_POST['nombre'];
    $username = $_POST['login'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
  
    $result = $usuarioRegistro->registrar($username, $pass, $email, $nombre);
  
    if($result)
        echo "Inserción realizada";
    else if(!$result)
        echo "La inserción no ha sido posible";
  }

  //Si pulso el boton de desactivo usuario
  if(isset($_POST['desactivar'])){

    $id = $_POST['id'];
  
    $result = $adminDesactivar->desactivarAdmin($id);
  
    if($result) {
        echo "Inserción realizada";
        $actuTomaUsu->actualizarFecha(1);
    }
    else if(!$result)
        echo "La inserción no ha sido posible";
  }
  //Si pulso el boton de activo usuario
  if(isset($_POST['activar'])){
  
    $id = $_POST['id'];
  
    $result = $adminActivar->activarAdmin($id);

    if($result) {
      echo "Inserción realizada";
      $actuTomaUsu->actualizarFecha(1);
    }
    else if(!$result)
        echo "La inserción no ha sido posible";
  }
  
  //Si pulso el boton de borro usuario

  if(isset($_POST['borrar'])){
  
    $id = $_POST['id'];
  
    $result = $adminBorrar->borrarAdmin($id);

    if($result) {
      echo "Inserción realizada";
      $actuTomaUsu->actualizarFecha(1);
    }
    else if(!$result)
        echo "La inserción no ha sido posible";
  }
  
    $result = $usuarioMostrar->mostrarAdmin();
  
    for($i=0; $i<count($result); $i++){
      echo '<tr>';
      echo '<td>' . $result[$i]["IDusuario"] . '</td>';
      echo '<td>' . $result[$i]["login"] . '</td>';
      echo '<td>' . $result[$i]["nombre"] . '</td>';
      echo '<td>' . $result[$i]["email"] . '</td>';
      echo '<td>' . $result[$i]["pass"] . '</td>';
      $valor=$result[$i]["activo"];
        if($valor==1)
        {
          $estado="Activado";
          echo '<td>' . $estado . '</td>';
          echo '<td>  <form method="post">
                <input type="hidden" name="id" value="' ;echo $result[$i]['IDusuario']; echo '" />
                <input type="submit" name="desactivar" value="Desactivar"> <br>
                <input type="submit" name="borrar" value="Borrar">
                </form> </td>';
          echo '<tr>';
        }
        else if($valor==0){
          $estado="Desactivado";
          echo '<td>' . $estado . '</td>';
          echo '<td>  <form method="post">
                <input type="hidden" name="id" value="' ;echo $result[$i]['IDusuario']; echo '" />
                <input type="submit" name="activar" value="Activar"> <br>
                <input type="submit" name="borrar" value="Borrar">
                </form> </td>';
          echo '<tr>';
        }
    }

?>

  </tbody>
</table>