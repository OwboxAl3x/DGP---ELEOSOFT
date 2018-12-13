<?php
    // Consulta a la base de datos
?>

<link rel="stylesheet" type="text/css" href="../CSS/about_styles.css">
<link rel="stylesheet" type="text/css" href="../CSS/about_responsive.css">

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="../Imagenes/Alhambra1Vintage.jpg"></div>
</div>
<!-- Introducion -->

<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                
            </div>
            <div class="col-lg-5">
                <div class="intro_content">

                    <!--<header>
                        <nav>
                            <ul>
                                <li><a href="#">Ruta 1</a></li>
                                <li><a href="#">Rutas Relacionados</a></li>
                            </ul>
                        </nav>
                    </header>-->


                    <div class="intro_title">Granada Mar</div>

                    <form action="lugarValoracion()" method="post">
  
                          <div class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5"><!--
                            --><label for="radio1">★</label><!--
                            --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                            --><label for="radio2">★</label><!--
                            --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                            --><label for="radio3">★</label><!--
                            --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                            --><label for="radio4">★</label><!--
                            --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                            --><label for="radio5">★</label>
                          </div>

                        <div>
                            <label for="valoracionLugar">Valoracion:</label>
                            <textarea id="valoracionLugar"></textarea>
                        </div>                  
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enviar Valoración</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
