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

                    //Fallo en el login

                }

            } else if(isset($_POST['noini'])){

                $_SESSION['usuario'] = "nouser";

                header("location:index.php");

            }
        ?>

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

    </body>

</html>