<?php
    require 'recomendaciones.php';

    $recomendar = new Recomendaciones(); //instancio el objeto de Recomendaciones

    $arrayRecomendados = $recomendar->recogerRecomendaciones(); //llamo a recogerRecomendaciones
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Cambio Climatico</title>
    <link rel="stylesheet" href="style.css"/>
</head> 
<body>
    <!--Cabecera -->
    <header>
        <h1 id="titulo">EL CAMBIO CLIMATICO HACIA LOS ANIMALES</h1>
    </header>
    <nav>
        <!--Menu -->
        <ul>
            <li><a href="#inicio" class="amenu">Inicio</a></li>
            <li><a href="#animales" class="amenu">Animales en peligro</a></li>
            <li><a href="ayudar.html" class="amenu">Como ayudar</a></li>
        </ul>
    </nav>
    <main>
        <!--Primer apartado sobre el cambio climatico-->
        <section class="cambioClimaticoInicio" id="inicio">
            <h2>El cambio climatico y sus efectos en los animales</h2>
            <p>El cambio climático es un fenómeno global que afecta a todos los seres vivos en la Tierra, incluyendo a los animales. A medida que las temperaturas aumentan y los patrones climáticos cambian, muchas especies se ven obligadas a adaptarse o enfrentar la extinción. Algunos de los efectos más comunes del cambio climático en los animales incluyen:</p>
            <div id="listaMotivos">
                <ul>
                    <li><span class="negrita">Alteración de hábitats:</span>Muchas especies dependen de hábitats específicos para sobrevivir. El calentamiento global puede provocar la pérdida de estos hábitats, como los arrecifes de coral y los bosques.</li>
                    <li><span class="negrita">Desplazamiento de especies:</span> A medida que las condiciones climáticas cambian, algunas especies se ven obligadas a migrar a nuevas áreas en busca de condiciones más favorables. Esto puede llevar a conflictos con otras especies y afectar la biodiversidad local.</li>
                    <li><span class="negrita">Cambios en los patrones de reproducción:</span> El cambio climático puede alterar los ciclos de reproducción de muchas especies, lo que puede afectar la supervivencia de las crías y la estabilidad de las poblaciones.</li>
                    <li><span class="negrita">Aumento de enfermedades:</span> Las temperaturas más cálidas pueden favorecer la propagación de enfermedades entre las poblaciones animales, lo que puede tener un impacto devastador en ciertas especies.</li>
                </ul>
            </div>
            <p>En resumen, el cambio climático representa una amenaza significativa para la fauna mundial. Es crucial tomar medidas para mitigar sus efectos y proteger a las especies vulnerables antes de que sea demasiado tarde.</p>
        </section>
        <!--Segundo apartado sobre los animales en peligro por culpa del cambio climatico-->
        <section class="cajaAnimales" id="animales">
            <h2>Animales en peligro por culpa del cambio climatico</h2>
            <h3>Koala</h3>
            <!--Imagen de Koala-->
            <img class="imagenesAnimales" src="img/koala.png" alt="Koala"/>
            <div class="cajasTextoAnimal">
                <p> El koala, un marsupial nativo de Australia, se encuentra en peligro debido a la pérdida de hábitat causada por el 
                    cambio climático. Los incendios forestales, exacerbados por las altas temperaturas y la sequía, han destruido vastas 
                    áreas de eucaliptos, que son esenciales para su alimentación y refugio. 
                    Además, el aumento de las temperaturas afecta su capacidad para regular su temperatura corporal, lo que puede llevar a un estrés térmico significativo.
                </p>
            </div>
            <h3 class="izq">Oso Polar</h3> 
            <div>
            <div class="cajasTextoAnimal">
                <p> El oso polar, una especie emblemática del Ártico, está gravemente amenazado por el cambio climático. La 
                    disminución del hielo marino, causada por el calentamiento global, afecta su capacidad para cazar focas, su principal 
                    fuente de alimento. A medida que el hielo se derrite, los osos polares se ven obligados a nadar largas distancias, lo que 
                    puede llevar a la fatiga y la inanición. Además, la pérdida de hábitat afecta su reproducción y la supervivencia de las 
                    crías.
                </p>
            </div>
            <!--Imagen de Oso Polar-->
            <img class="imagenesAnimales" src="img/osoPolar.png" alt="Oso Polar"/>
        </div>
            <h3>Elefante Asiatico</h3> 
            <div>
                <!--Imagen de Elefante-->
                <img class="imagenesAnimales" src="img/elefante.png" alt="Elefante Asiatico"/>
                <div class="cajasTextoAnimal">
                    <p> El elefante asiático se encuentra confinado en la actualidad casi exclusivamente en la India, 
                        con una población estimada de entre 26.000 y 30.000 ejemplares. 
                        Su principal amenaza sigue siendo la acción directa del ser humano -el 90% del elefante africano ha desaparecido por la caza furtiva, según WWF-, 
                        pero también por la progresiva destrucción de su hábitat, fruto del cambio climático.
                    </p>
                </div>
            </div>
        </section>
        <section class="cambioClimatico">
            <h1>Estadísticas de Muertes de Animales en Peligro</h1>
            <table>
                <tr>
                    <th>Especie</th>
                    <th>Causa de Muerte Más Notable</th>
                    <th>Estadísticas y Eventos Clave</th>
                </tr>
                <tr>
                    <th>Koalas</th>
                    <td>Incendios forestales</td>
                    <td>Se estima que más de 61,000 koalas murieron directa o indirectamente en los incendios forestales de Australia de 2019-2020.</td>
                </tr>
                <tr>
                    <th>Osos Polares</th>
                    <td>Inanición por pérdida de hábitat</td>
                    <td>No hay cifras exactas de muertes anuales. La amenaza principal es el deshielo del Ártico, que impide a los osos cazar focas y los lleva a morir de hambre.</td>
                </tr>
                <tr>
                    <th>Elefantes Asiáticos</th>
                    <td>Conflictos con humanos</td>
                    <td>Más de 400 elefantes al año mueren en Sri Lanka debido a conflictos con comunidades locales (por envenenamiento, trampas o disparos).</td>
                </tr>
                <tr>
                    <th colspan="3">
                        La extinción de estas especies es una alerta para el planeta.
                    </th>
                </tr>
            </table>
        </section>
        <!--formulario-->
        <div id="formu">
        <section id="formulario">
            <h1>Boletín de Noticias de Animales</h1>
            <form action="recibir.php" method="post">
                <!--Text-->
                <p>Nombre:</p>
                <input type="text" name="nombre"/>
                <p>Correo Electrónico:</p>
                <input type="text" name="correoElectronico"/>
                <!--Radio-->
                <p>Seleccione idioma:</p>
                <label>
                    <input type="radio" name="idioma" value="espanol"/> Español
                </label>
                <label>
                    <input type="radio" name="idioma" value="ingles"/> Inglés
                </label>
                <!--Checkbox-->
                <!-- <p>Información a recibir:</p>
                <label>
                    <input type="checkbox" name="animales[]" value="koala"/> Koala
                </label>
                <label>
                    <input type="checkbox" name="animales[]" value="oso polar"/> Oso Polar
                </label>
                <label>
                    <input type="checkbox" name="animales[]" value="elefante asiatico"/> Elefante Asiático
                </label> -->
                <!--Checkbox solo 1-->
                <p>Acepto los terminos y condiciones: </p>
                <label>
                    <input type="checkbox" name="terminosCondicones" value="1"/>Aceptar
                </label>
                <!--Select-->
                <p>¿Cómo nos has conocido?:</p>
                <select id="comoConocio" name="comoConocio">';
                <?php
                    while($fila=$arrayRecomendados->fetch_array()){ //fetch_array esto se recorrera hasta que no queden filas y devuelva false
                        // fetch_array() me devolvera un array de la fila donde este el puntero.
                        // Cada vez que se llama, avanza a la siguiente fila
                        echo '<option value="'.$fila['idRecomendacion'] .'">'. $fila['nombre'] .'</option>';
                    }
                ?>
                </select>;
                <!--Envicar y Resetear-->
                <p>¿Has terminado de rellenar?</p>
                <input class="botonesFormulario" type="reset" value="Resetar"/>
                <input class="botonesFormulario" type="submit" value="Enviar"/>
            </form>
            <img class="imagenesAnimales" src="img/losTres.png" alt="Los 3"/>
        </section>
        </div>
    </main>
    <footer class="piePagina">
        <h2>2º DAW</h2>
        <p>Fco. Javier Martínez Fernández</p>
        <p>Informacion sobre aniamles: <a href="https://www.20minutos.es/lainformacion/archivo/14-animales-peligro-extincion-por-cambio-climatico-koala-elefante-5328628/" target="_blank">Click aqui</a></p>
        <p>Informacion sobre ayudar por el cambio climatico <a href="https://www.fundacionaquae.org/wiki/diez-consejos-luchar-cambio-climatico/" target="_blank">Click aqui</a></p>
    </footer>
</body>
</html>