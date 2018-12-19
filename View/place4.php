<?php
// TODO: Aqui se realizara la consulta a la base de datos para obtener la informacion del lugar
$logged = true;
?>

<link rel="stylesheet" type="text/css" href="../CSS/about_styles.css">
<link rel="stylesheet" type="text/css" href="../CSS/about_responsive.css">

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="../Imagenes/llano.jpg"></div>
    <div class="home_content">
        <div class="ruta_title">
            <h1>lugar</h1>
            <h1>Prado LLano</h1>
        </div>
    </div>
</div>

<!-- Intro -->

<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="intro_image"><img src="../Imagenes/llano1.jpg" width="400" alt="Foto de prado llano"></div>
            </div>
            <div class="col-lg-5">
                <div class="intro_content">
                    <div class="intro_title">Descripción</div>
                    <p class="intro_text">
                    <p>Pradollano (u oficialmente Sierra Nevada)1​ es una localidad y pedanía española perteneciente al municipio de Monachil, en la provincia de Granada. Está situada en la parte suroriental de la comarca de la Vega de Granada. Cerca de esta localidad se encuentran los núcleos de Canales, Pinos Genil y Güéjar Sierra. Con sus 2.078 msnm, es el núcleo de población ubicado a mayor altitud de toda España.</p>

                    <p>radollano es el único núcleo habitado de la Estación de Esquí de Sierra Nevada, y donde se encuentran todos los servicios principales de esta estación. Dispone de 4.500 plazas hoteleras2​ y llega a recibir 14.000 visitantes al día.</p>

                    <p>El origen del núcleo se situaba en la plaza de Pradollano, junto a la que se sitúan las primeras construcciones entre las que destacan el Hotel Solynieve y el Parador de Turismo. Con el desarrollo de la estación el núcleo fue creciendo siempre montaña arriba.</p>
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
