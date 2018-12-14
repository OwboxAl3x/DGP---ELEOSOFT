<?php
$result = false;

$result2 = $lugaresMostrar->mostrarLugares();

//Comprueba de que los campos obligatorios están introducidos
if(isset($_POST['aniade'])){

    $name = $_POST['nom'];
    $descripcion = $_POST['desc'];
    $puntuacion='0';

    $numeroLugares = $_POST['cuantosLugares'];
    $result = $rutaAniade->registrarRuta($name, $descripcion, $puntuacion);
    $idRuta = $rutaBuscadaPorNombre->buscarRuta($name);

    for ($i=0;$i<$numeroLugares;$i++){
        echo $_POST['lugar'.$i].':';
        $lugarParaRuta = new lugaresModel();
        $idLugar = $lugarParaRuta->selectLugarPorNombre($_POST['lugar'.$i]);
        echo $idRuta[0]["IDruta"].' - '.$idLugar[0]["IDlugar"].' - '.$_POST["pos".$i];
        $result = $rutasConLugares->aniadirLugaresRuta($idRuta[0]['IDruta'], $idLugar[0]['IDlugar'], $_POST['pos'.$i]);

        if (!$result) break;

    }

    if($result)
        echo "Inserción bien realizada";
    else
        echo "Inserción mal realizada";

}
?>

<br clear="all">
<br clear="all">
<h4>Añadir ruta:</h4>
<br clear="all">
<br clear="all">

<?php

if (!isset($_POST['siguiente'])){

?>

<form method="post">

    <div class="form-group">
        <label for="nom" class="control-label">Nombre:</label>

        <input type="text" class="form-control" name="nom"
        placeholder="Nombre Ruta. Ej: Ruta de la tapa">

    </div>


    <div class="form-group">
        <label for="desc" class="control-label">Descripción</label>

        <textarea class="form-control" rows="5" name="desc" placeholder="En esta ruta podremos encontrar todo tipo de gastronimía..."></textarea>

    </div>

    <div class="form-group">
        <label for="lugares" class="control-label">Lugares</label>

        <select required name="lugares[]" multiple class="chosen" style="width: 100%">
            <?php for($i=0; $i<count($result2); $i++)
            {
                echo '<option>'.$result2[$i]['nombre'].'</option>';
            }
            ?>
        </select>

    </div>

<?php } else if (isset($_POST['siguiente'])) {

    $lugares = $_POST['lugares'];
    $name = $_POST['nom'];
    $descripcion = $_POST['desc'];

?>

    <form method="post">

        <?php for($i=0; $i<count($lugares); $i++)
        {
            echo '<div class="form-group"><label for="lugarN" class="control-label">'.$lugares[$i].'</label>
            <input type="text" class="form-control" name="pos'.$i.'" placeholder="Posición en la ruta"></div>
            <input type="text" hidden class="form-control" name="lugar'.$i.'" value="'.$lugares[$i].'" ></div>';
        }

        echo '<div class="form-group">

            <input hidden type="text" class="form-control" name="nom" value="'.$name.'" >
            <input hidden type="text" class="form-control" name="desc" value="'.$descripcion.'" >
            <input hidden type="text" class="form-control" name="cuantosLugares" value="'.count($lugares).'" >
            
        </div>';

        ?>

<?php } ?>

    <br>

    <div class="form-group">
        <?php

        if (!isset($_POST['siguiente'])){

            echo '<button type="submit" name="siguiente" class="btn btn-primary">Siguiente</button>';

        } else {

            echo '<button type="submit" name="aniade" class="btn btn-primary">Añadir Lugar</button>';

        }

        ?>
    </div>

</form>

<script type="text/javascript">
    $(".chosen").chosen();
</script>