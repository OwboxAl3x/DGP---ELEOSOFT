<?php

$result = false;

if(isset($_POST['registrarse'])) {

    // todo: Hay que validar los campos
    $username = $_POST['usuario'];
    $pass = $_POST['contrasenia'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $result = $usuarioRegistro->registrar($username, $pass, $email, $nombre);

    if ($result) {

        header("location:index.php");

    } else {

        echo 'Ha fallado al registrar al usuario';

    }

} else if(isset($_POST['cancel'])){

    header("location:index.php");

}
?>

<link rel="stylesheet" type="text/css" href="../CSS/about_styles.css">
<link rel="stylesheet" type="text/css" href="../CSS/about_responsive.css">

<!-- Titulo -->
<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="../Imagenes/Granada.jpg"></div>
    <div class="home_content">
        <div class="home_title">registrarse</div>
    </div>
</div>
<div class="intro">
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card cuadroLogin">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre completo">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="usuario" placeholder="Usuario">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Correo electrónico">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" name="contrasenia" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Cancelar" name="cancel" class="btn float-left register_btn">
                            <input type="submit" value="Registrarse" name="registrarse" class="btn float-right register_btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
