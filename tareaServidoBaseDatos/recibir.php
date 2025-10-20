<?php
    require 'boletin_Usuario.php';
    $error = false;
    $crear = new Boletin_Usuario();

    if (empty($_POST['nombre'])) {
        echo '<h1>Se envió vacío el campo nombre</h1>';
        $error = true;
    }

    if (empty($_POST['correoElectronico'])) {
        echo '<h1>Se envió vacío el campo correo electrónico</h1>';
        $error = true;
    }

    if (!isset($_POST['idioma'])) {
        echo '<h1>No ha seleccionado ningún idioma</h1>';
        $error = true;
    }

    /* if (!isset($_POST['animales']) || count($_POST['animales']) === 0) {
        echo '<h1>No ha seleccionado ningún animal</h1>';
        $error = true;
    } */

    if (!isset($_POST['terminosCondicones'])) {
        $termino='false';
    }else{
        $termino='true';
    }

    if (!isset($_POST['comoConocio'])) {
        echo '<h1>No ha seleccionado ninguna recomendación</h1>';
        $error = true;
    }

    if ($error) {
        echo '<a href="indexServidor.php"><h1>volver</h1></a>';
    }else{
        if($mesanje=$crear->validarCorreo($_POST['correoElectronico'])){
            echo '<a href="indexServidor.php"><h1> Correo existente </h1></a> ';
        }else{
            $sql='insert into boletin_usuario (nombreUsuario,correo,idioma,terminos,idRecomendacion) values("'.$_POST['nombre'].'","'.$_POST['correoElectronico'].'","'.$_POST['idioma'].'",'.$termino.','.$_POST['comoConocio'].');';
            //echo $sql
            $mesanje=$crear->meterUsuario($sql);
            if($mesanje==true){
                echo '<a href="indexServidor.php"><h1>Todo correcto</h1></a>';
            }else{
                echo '<a href="indexServidor.php"><h1>Ups algo fallo</h1></a>';
            }
        }
    }
?>