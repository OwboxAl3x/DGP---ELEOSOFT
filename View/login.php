<?php

$result = false;

if(isset($_POST['inisesion'])) {

    $username = $_POST['usuario'];
    $pass = $_POST['contrasenia'];

    $result = $usuarioLogin->buscarUsuario($username, $pass);

    if ($result) {
        $_SESSION['usuario'] = $_POST['usuario'];

        header("location:index.php");
    } else {

        echo 'Ha fallado al loguear al usuario';

    }

} else if(isset($_POST['noini'])){

    $_SESSION['usuario'] = "nouser";

    header("location:index.php");

}
?>

<link rel="stylesheet" type="text/css" href="../CSS/about_styles.css">
<link rel="stylesheet" type="text/css" href="../CSS/about_responsive.css">

<!-- Titulo -->
<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="../Imagenes/Granada1Vintage.jpg"></div>
    <div class="home_content">
        <div class="home_title">iniciar sesión</div>
    </div>
</div>

<div class="intro">
    <div class="container">
        <div>
            <div class="d-flex justify-content-center h-100">
                <div class="card cuadroLogin">
                    <div class="card-header">
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" name="usuario" placeholder="Usuario">

                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" name="contrasenia" placeholder="Contraseña">
                            </div>
                            <div class="row align-items-center remember">
                                <input type="checkbox">Recuerdame
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <input type="submit" value="Login" name="inisesion" class="btn login_btn">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            ¿No tienes cuenta?<a href="index.php?register">Registrarse</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="#">¿Olvidaste tu contraseña?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>