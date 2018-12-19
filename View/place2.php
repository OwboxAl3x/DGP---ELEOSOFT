<?php
// TODO: Aqui se realizara la consulta a la base de datos para obtener la informacion del lugar
$logged = true;
?>

<link rel="stylesheet" type="text/css" href="../CSS/about_styles.css">
<link rel="stylesheet" type="text/css" href="../CSS/about_responsive.css">

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="../Imagenes/nazari.jpg"></div>
    <div class="home_content">
        <div class="ruta_title">
            <h1>lugar</h1>
            <h1>Palacio Nazari</h1>
        </div>
    </div>
</div>

<!-- Intro -->

<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="intro_image"><img src="../Imagenes/pana1.jpg" width="400" alt="Foto de generalife"></div>
            </div>
            <div class="col-lg-5">
                <div class="intro_content">
                    <div class="intro_title">Descripción</div>
                    <p class="intro_text">
                    <p>Conjunto palacial, residencia de los reyes de Granada. Lo empieza a construir el fundador de la dinastía, Alhamar, en el s XIII, aunque las edificaciones que han pervivido hasta nuestros días datan, principalmente, del s XIV. Estos palacios encierran entre sus muros el refinamiento y la delicadeza de los últimos gobernadores hispano-árabes de Al Andalus, los Nazaríes.</p>

                    <p>Tres palacios forman este recinto: El Mexuar, El Palacio de Comares, o de Yusuf I y el Palacio de los Leones, o de Mohammed V.</p>

                    <p>El concepto intimista del palacio real, cerrado a los ojos del curioso, armoniza la robustez de los paños exteriores con la fragilidad del interior, donde los elementos arquitectónicos se tornan puramente ornamentales. Los materiales pobres con que se decoran los palacios ponen en evidencia la temporalidad de la construcción con respecto al cosmos, prueba de la transitoriedad del hombre.Los patios, continuas alusiones al jardín, con elementos de inspiración persa y musulmana, son el anticipo del paraíso, oasis del nómada, goce de los sentidos. El agua, elemento que da forma al palacio, aunando el jardín con la arquitectura, representa la pureza; agua cristalina que corre entre los mármoles de las fuentes; agua de vida que da riqueza y frescor al jardín, belleza estética, generosidad del sultán... todo un mundo de símbolos y estímulos.</p>
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
