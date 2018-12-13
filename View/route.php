<?php
    // TODO: Aqui se realizara la consulta a la base de datos para obtener la informacion de la ruta y colocarla en variables
    $logged = true;
?>

<link rel="stylesheet" type="text/css" href="../CSS/about_styles.css">
<link rel="stylesheet" type="text/css" href="../CSS/about_responsive.css">

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="../Imagenes/Alhambra1Vintage.jpg"></div>
    <div class="home_content">
        <div class="ruta_title">
            <h1>ruta</h1>
            <h1>Alhambra</h1>
        </div>
    </div>
</div>

<!-- Intro -->

<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="intro_image"><img src="../Imagenes/Alhambra3Vintage.jpg" width="400" alt="Foto de Alhambra Vintage"></div>
            </div>
            <div class="col-lg-5">
                <div class="intro_content">
                    <div class="intro_title">Lo que incluye esta ruta...</div>
                    <p class="intro_text">
                        Esta ruta pasa por los siguientes lugares:
                        <p><a href="../index.php?place">Lugar 1: Es bonito</a></p>
                        <p><a href="../index.php?place">Lugar 2: Es bonito</a></p>
                        <p><a href="../index.php?place">Lugar 3: Es bonito</a></p>
                        <p><a href="../index.php?place">Lugar 4: Es bonito</a></p>
                        <p><a href="../index.php?place">Lugar 5: Es bonito</a></p>


                    <div class="button intro_button2"><div class="button_bcg"></div><a href="#">Guardar Ruta<span></span><span></span><span></span></a></div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Map -->
<div class="travelix_map">
    <div id="google_map" class="google_map">
        <div class="map_container">
            <div id="map"></div>
        </div>
    </div>
</div>

<?php
 if ($logged) {
     echo('<div class="contact_form_section">
    <div class="container">
        <div class="row">
            <div class="col">

                <!-- Contact Form -->
                <div class="contact_form_container">
                    <div class="contact_title text-center">Realizar recomendacion</div>
                    <form action="#" id="contact_form" class="contact_form text-center">
                        <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Nombre" required="required" data-error="Name is required.">
                        <input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
                        <input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Titulo" required="required" data-error="Subject is required.">
                        <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Mensaje" required="required" data-error="Please, write us a message."></textarea>
                        <button type="submit" id="form_submit_button" class="form_submit_button button trans_200">Enviar recomendación<span></span><span></span><span></span></button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>');
 }
?>

