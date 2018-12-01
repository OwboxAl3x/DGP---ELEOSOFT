<?php

?>

<header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
        <a class="navbar-brand" href="./index.php?admin"> <img class="logo" src="./Imagenes/favicon.ico" height="40"> ELEOSOFT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <?php

                        echo '<a class="btn ml-2 btn-warning" href="../index.php?fuera">Cerrar Sesión</a>';

                    ?>
                </li>
            </ul>
        </div>
    </nav>
</header>