<?php
// TODO: Aqui se realizara la consulta a la base de datos para obtener la informacion del lugar
$logged = true;
?>

<link rel="stylesheet" type="text/css" href="../CSS/about_styles.css">
<link rel="stylesheet" type="text/css" href="../CSS/about_responsive.css">

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="../Imagenes/loopbar2.jpg"></div>
    <div class="home_content">
        <div class="ruta_title">
            <h1>lugar</h1>
            <h1>LoopBar&Records</h1>
        </div>
    </div>
</div>

<!-- Intro -->

<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="intro_image"><img src="../Imagenes/loopbar.jpg" width="400" alt=""></div>
            </div>
            <div class="col-lg-5">
                <div class="intro_content">
                    <div class="intro_title">Descripción</div>
                    <p class="intro_text">
                    <p>El Realejo no es solo el antiguo barrio judío de Granada, sino también una de las zonas en las que sucede la vida cotidiana de la ciudad. De sus antiguos vecinos ha heredado casas sefardíes que nos transportan a otras épocas por las que ha pasado la ciudad.</p>

                    <p>En medio de este ambiente lleno de historias se encuentra  el Loop Bar & Records (San Matías, 8), un lugar idóneo para aquellos que buscan la combinación perfecta entre caña, tapa y canción. Sus paredes recubiertas de vinilos de grupos de referencia del pop-rock internacional son toda una declaración de intenciones: en la barra solo ofrecen productos de calidad.</p>

                    <p>El sonido crujiente que se produce al morder un pan bien tostado –dorado, pero no quemado– se enlaza con unos ingredientes que producen en el paladar una fusión de sabores muy original e interesante. El sushi es un invitado regular en sus platos, así como las tartaletas con patés y quesos combinados con espinacas.</p>
                    </p>
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
