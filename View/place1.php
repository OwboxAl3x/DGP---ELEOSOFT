<?php
// TODO: Aqui se realizara la consulta a la base de datos para obtener la informacion del lugar
$logged = true;
?>

<link rel="stylesheet" type="text/css" href="../CSS/about_styles.css">
<link rel="stylesheet" type="text/css" href="../CSS/about_responsive.css">

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="../Imagenes/alcazaba.jpg"></div>
    <div class="home_content">
        <div class="ruta_title">
            <h1>lugar</h1>
            <h1>Alcazaba</h1>
        </div>
    </div>
</div>

<!-- Intro -->

<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="intro_image"><img src="../Imagenes/alcazaba1.jpg" width="400" alt=""></div>
            </div>
            <div class="col-lg-5">
                <div class="intro_content">
                    <div class="intro_title">Descripción</div>
                    <p class="intro_text">
                    <p>De planta trapezoidal algo irregular, la alcazaba es el recinto situado en la parte más occidental del cerro de Sabika, constituía la zona militar, centro de la defensa y vigilancia del recinto y con ello fue la parte de construcción más antigua de la Alhambra. Las primeras edificaciones hispanomusulmanas realizadas se corresponden con la época califal, en el siglo XI, Así como de la dinastía zirí, ampliándose las mismas al convertirse Granada en capital de uno de los reinos de Taifas.</p>

                    <p>Con Muhammad I, primer rey nazarí de Granada, se reconstruyó y amplió esta fortaleza, se reforzaron sus muros y se levantaron las principales torres. Su sucesor Muhammad II terminó las obras de reconstrucción de la alcazaba. Con anterioridad a la edificación de los palacios nazaries, esta área compartía también una función de alojamiento real.</p>
                </div>
                <div class="button intro_button2"><div class="button_bcg"></div><a href="../index.php?ValoracionLugarView">Valorar Lugar<span></span><span></span><span></span></a></div>
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
