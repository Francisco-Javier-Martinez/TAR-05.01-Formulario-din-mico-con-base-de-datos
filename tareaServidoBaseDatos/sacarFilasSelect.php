<?php
    require 'recomendaciones.php';

    $recomendar = new Recomendaciones(); //instancio el objeto de Recomendaciones

    $arrayRecomendados = $recomendar->recogerRecomendaciones(); //llamo a recogerRecomendaciones

    if($arrayRecomendados){ //si es correcto recorremos el objeto mediante: 
        echo '
        <form>
                <select id="comoConocio" name="comoConocio">';
        while($fila=$arrayRecomendados->fetch_array()){ //fetch_array esto se recorrera hasta que no queden filas y devuelva false
            // fetch_array() me devolvera un array de la fila donde este el puntero.
            // Cada vez que se llama, avanza a la siguiente fila
            echo '<option value="'.$fila['idRecomendacion'] .'">'. $fila['nombre'] .'</option>';
        }
        echo '</select> 
        </form>';
    }
?>