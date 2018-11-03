        <?php

            $result = false;

            if(isset($_POST['inisesion'])) {

                $username = $_POST['usuario'];
                $pass = $_POST['contrasenia'];

                $result = $usuario->buscarUsuario($username, $pass);

                if ($result) {
                    $_SESSION['usuario'] = $_POST['usuario'];

                    header("location:index.php");
                } else {

                }

            } else if(isset($_POST['noini'])){

                $_SESSION['usuario'] = "nouser";

                header("location:index.php");

            }
        ?>

        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>EleoSoft</h3>
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
                                <input type="checkbox">Recordarme
                            </div>
                            <div class="form-group">
                                <input type="submit" value="No Login" name="noini" class="btn float-left login_btn">
                                <input type="submit" value="Login" name="inisesion" class="btn float-right login_btn">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            ¿No tienes cuenta?<a href="#">Registrarse</a>
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