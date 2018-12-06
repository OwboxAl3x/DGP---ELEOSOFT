<?php
 ?>

<header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
        <a class="navbar-brand" href="./index.php"> <img class="logo" src="./Imagenes/favicon.ico" height="40"> ELEOSOFT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="../index.php?routesMenu"> Rutas </a></li>
                <li class="nav-item"><a class="nav-link" href="../index.php?placesMenu"> Lugares </a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  Mis Viajes  </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../index.php?route"> Ruta 1</a></li>
                        <li><a class="dropdown-item" href="../index.php?route"> Ruta 2 </a></li>
                    </ul>
                </li>
                <li>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </li>
                <li class="nav-item">
                    <?php

                    if (!isset($_SESSION['usuario'])){

                        echo '<a class="btn ml-2 btn-warning" href="../index.php?login">Iniciar Sesión</a>';

                    } else {

                        echo '<a class="btn ml-2 btn-warning" href="../index.php?fuera">Cerrar Sesión</a>';

                    }

                    ?>
                </li>
            </ul>
        </div>
    </nav>

</header>






