<?php
//Nombre
$nombre = !empty($_POST["nombre"]) ? ($_POST["nombre"]) : "No se ha introducido ningun nombre";

//Telefono
$telefono =!empty($_POST["telefono"]) ? ($_POST["telefono"]) : "No se ha introducido ningun telefono";

//Email
$email =!empty($_POST["email"]) ? ($_POST["email"]) : "No se ha introducido ningun email";

//Temas
$temas = (isset($_POST["temas"]) && is_array($_POST["temas"]) && !empty($_POST["temas"])) ? $_POST["temas"] : "No ha seleccionado ningun tema";

//Edad(radio)
$edad = !empty($_POST["opcion"]) ? ($_POST["opcion"]) : "No se ha seleccionado ninguna opción";

//Observaciones
$observacion =!empty($_POST["observacion"]) ? ($_POST["observacion"]) : "No se ha introducido ningun texto";

//Terminos
$terminos =!empty($_POST["acepta"]) ? ($_POST["acepta"]) : "No se han aceptado los términos";

//Nacimiento
$seleccion =!empty($_POST["lugar"]) ? ($_POST["lugar"]) : "No se ha seleccionado nada";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <link rel="stylesheet" href="estiloFD.css">
</head>
<body>
    <main>
        <section id ="datos">
            <h1>Datos</h1>
            <p class="parrafosDatos"><span class="etiqueta">Nombre : </span><?php echo  $nombre?> </p>
            <p class="parrafosDatos"><span class="etiqueta">Telefono de contacto:</span> <?php echo $telefono?> </p>
            <p class="parrafosDatos"><span class="etiqueta">Email: </span><?php echo $email?></p>
            <p class="parrafosDatos">
                <h3>Intereses seleccionados:</h3>
                <?php 
                if (is_array($temas)) {
                    foreach ($temas as $valor) {
                        echo "<li>" . $valor . "</li>";
                    }
                } else {
                    echo "<p>" . $temas . "</p>";
                }
                ?>
            </p>
            <p class="parrafosDatos"><span class="etiqueta">Mayor de edad:</span> <?php echo $edad?> </p>
            <p class="parrafosDatos"><span class="etiqueta">Observaciones:</span> <?php echo $observacion?></p>
            <p class="parrafosDatos"><span class="etiqueta">Lugar de nacimiento:</span> <?php echo $seleccion?></p>
            <p class="parrafosDatos"><span class="etiqueta">Terminos aceptados:</span> <?php echo $terminos?></p> 
        </section>
    </main>
</body>
</html>