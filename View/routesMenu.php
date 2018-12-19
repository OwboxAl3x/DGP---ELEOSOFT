<?php
// Obtener las rutas disponibles al momento
$result = $rutaMostrar->mostrarRutas();  // Array de rutas. Campos: IDruta 	nombre 	descripcion 	puntuacion 	activo
?>

<link rel="stylesheet" type="text/css" href="../CSS/about_styles.css">
<link rel="stylesheet" type="text/css" href="../CSS/about_responsive.css">

<!-- Titulo -->
<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="../Imagenes/Granada1Vintage.jpg"></div>
    <div class="home_content">
        <div class="home_title">Rutas</div>
    </div>
</div>

<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="intro_title text-center">¡Tenemos las mejores rutas!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="intro_text text-center">
                    <p>Sumérgete en nuestra rutas y disfruta de la ciudad más bella de Europa. </p>
                </div>
            </div>
        </div>
        <div class="row intro_items">

            <!-- Ruta Item -->

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>

                    <div class="intro_item_background" style="background-image:url(../Imagenes/Alhambra2.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="button intro_button"><div class="button_bcg"></div><a href="../index.php?route">ver más<span></span><span></span><span></span></a></div>
                        <div class="intro_center text-center">
                            <div class="ruta2_title">
                                <h1>ruta</h1>
                                <h1>Alhambra</h1>
                            </div>
                            <div class="rating rating_4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Intro Item -->

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>

                    <div class="intro_item_background" style="background-image:url(../Imagenes/Sierra2.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="button intro_button"><div class="button_bcg"></div><a href="../index.php?route1">ver más<span></span><span></span><span></span></a></div>
                        <div class="intro_center text-center">
                            <div class="ruta2_title">
                                <h1>ruta</h1>
                                <h1>Sierra Nevada</h1>
                            </div>
                            <div class="rating rating_4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Intro Item -->
           
            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>

                    <div class="intro_item_background" style="background-image:url(../Imagenes/tapas.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="button intro_button"><div class="button_bcg"></div><a href="../index.php?route2">ver más<span></span><span></span><span></span></a></div>
                        <div class="intro_center text-center">
                            <div class="ruta2_title">
                                <h1>ruta</h1>
                                <h1>Bares de Tapas</h1>
                            </div>
                            <div class="rating rating_5">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--
            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>

                    <div class="intro_item_background" style="background-image:url(../Imagenes/Sierra2.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="button intro_button"><div class="button_bcg"></div><a href="../index.php?route">ver más<span></span><span></span><span></span></a></div>
                        <div class="intro_center text-center">
                            <div class="ruta2_title">
                                <h1>ruta</h1>
                                <h1>Bares de Tapas</h1>
                            </div>
                            <div class="rating rating_4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>

                    <div class="intro_item_background" style="background-image:url(../Imagenes/MiradorSanNicolas.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="button intro_button"><div class="button_bcg"></div><a href="../index.php?route">ver más<span></span><span></span><span></span></a></div>
                        <div class="intro_center text-center">
                            <div class="ruta2_title">
                                <h1>ruta</h1>
                                <h1>Arabe</h1>
                            </div>
                            <div class="rating rating_5">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
            <?php
            // Imprimir los lugares presentes
            $lasRutas = $rutaMostrar->rutas;
            for ($i = 0; $i <= count($lasRutas); $i++) {
                // Insertar primera parte
                echo "<div class=\"col-lg-4 intro_col\">
                <div class=\"intro_item\">
                    <div class=\"intro_item_overlay\"></div>

                    <div class=\"intro_item_background\" style=\"background-image:url(../Imagenes/MiradorSanNicolas.jpg)\"></div>
                    <div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
                        <div class=\"button intro_button\"><div class=\"button_bcg\"></div><a href=\"../index.php?route\">ver más<span></span><span></span><span></span></a></div>
                        <div class=\"intro_center text-center\">
                            <div class=\"ruta2_title\">
                                <h1>ruta</h1>
                                <h1>";

                // Insertar nombre
                echo $lasRutas[$i]["nombre"];

                // Insertar segunda parte
                echo "</div>
                            <div class=\"rating rating_5\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";
            }
            ?>

        </div>
    </div>
</div>