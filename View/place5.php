<?php
// TODO: Aqui se realizara la consulta a la base de datos para obtener la informacion del lugar
$logged = true;
?>

<link rel="stylesheet" type="text/css" href="../CSS/about_styles.css">
<link rel="stylesheet" type="text/css" href="../CSS/about_responsive.css">

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="../Imagenes/virgen.jpg"></div>
    <div class="home_content">
        <div class="ruta_title">
            <h1>lugar</h1>
            <h1>Virgen Nieves</h1>
        </div>
    </div>
</div>

<!-- Intro -->

<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="intro_image"><img src="../Imagenes/virgen1.jpg" width="400" alt="Foto de virgen de las nieves"></div>
            </div>
            <div class="col-lg-5">
                <div class="intro_content">
                    <div class="intro_title">Descripción</div>
                    <p class="intro_text">
                    <p>Diversos textos,1​ relatan la historia del sacerdote Martín de Mérida, beneficiado del alpujarreño pueblo de Válor, que junto a su asistente Martín Soto, estando precisamente el 5 de agosto de 1717 de travesía por Sierra Nevada camino hacia Granada y cuando coronaban el puerto de la Carihuela, también conocido como Collado del Veleta por su proximidad al Pico de este nombre (el segundo más alto de este macizo y tercero de la península Ibérica), estando a unos 3.200 metros de altitud se encontraron perdidos en medio de una tormenta de nieve que súbitamente les sorprendió. Tras ponerse los dos a rezar fervorosamente como último remedio para el peligro que corrían, a ambos se les apareció la Virgen María con su Hijo en brazos, calmando los elementos e indicándoles el camino a seguir y salvándolos así de una muerte segura.</p>

                    <p>Esta tradición se ha mantenido viva hasta la actualidad, siendo muy populares las misas y romerías montañeras que cada año, conmemorando esa fecha, se suelen realizar por distintas cumbres de Sierra Nevada (Mulhacén, Veleta...). Y desde el otoño de 1968, un monumento construido por sufragio popular consistente en un altar hecho con piedras del lugar seguido de arco apuntado de 9 metros, del mismo material, y coronado con una imagen de la Virgen con el Niño, de 3 metros de altura, obra vaciada en aluminio del escultor Francisco López Burgos, preside sobre la Estación de Esquí y Montaña de esta sierra.</p>

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
