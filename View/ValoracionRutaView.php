<?php
$result = false;
//Comprueba de que los campos obligatorios están introducidos
if(isset($_POST['val'])){

    $puntuacion = $_POST['estrellas'];
    $descripcion = $_POST['desc'];
    $idruta='1';
    $idusuario= '1';
    
    $result = $realizaRutaVal->rutaRealizadaValoracion($idruta, $idusuario, $puntuacion, $descripcion);

    if($result) {
        echo "bien";
        $actuTomaLugar->actualizarFecha(2);
    }
    else if(!$result)
        echo "mal";
    else
        echo "algo pasa aqui";
    
}
?>

<link rel="stylesheet" type="text/css" href="../CSS/about_styles.css">
<link rel="stylesheet" type="text/css" href="../CSS/about_responsive.css">

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="../Imagenes/Alhambra1Vintage.jpg"></div>
    <div class="home_content">
        <div class="home_title">Valoración</div>
    </div>
</div>
<!-- Introducion -->

<div class="intro">
    <div class="container">               
         <div class="val-clasificacion">
                

                    <!--<header>
                        <nav>
                            <ul>
                                <li><a href="#">Ruta 1</a></li>
                                <li><a href="#">Rutas Relacionados</a></li>
                            </ul>
                        </nav>
                    </header>-->

                    
                    <div class="intro_title">Puntuación</div>

                    <form method="post">
  
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

                            <!--<label for="comentario">Comentario:</label>
                            <input type="text" name="comentario">-->


                                <label for="desc" class="control-label">Descripción</label>
                                <textarea class="form-control" rows="2" name="desc"></textarea>
                                <br>

                            
                                          
                        <div class="form-group">
                        <button type="submit" name="val" class="btn btn-primary">Enviar Valoracion</button>
                        </div>
                    </form>
                </div>     
    </div>
</div>










