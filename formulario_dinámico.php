<?php
require 'funciones.php';
$ciudades3 = miFuncion();  
$temas = intereses();       
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="estiloFD.css">
</head>
<body>
    <h1>Formulario de Registro</h1>
    <p>Completa tus datos</p>
        <form action="datos.php" method="post">
        <div class="secciones">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="secciones">
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>
        </div>     
        <div class="secciones">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>          
        <div class="secciones">
            <?php 
            foreach ($temas as $clave => $valor) {
                echo "<label><input type='checkbox' name='temas[]' value='$valor'> $valor</label><br>";
            }
            ?>
        </div>
        <div class="secciones">
            <label for="opcion">Mayoría de edad:</label>
            <label><input type="radio" name="opcion" value="Si"> Si</label>
            <label><input type="radio" name="opcion" value="No"> No</label>
        </div>
        <div class="secciones">
            <label for="observacion">Observaciones:</label>
            <textarea id="observacion" name="observacion"></textarea>
        </div>
        <div class="secciones">
            <label for="opciones">Selecciona tu lugar de nacimiento:</label>
            <select name="lugar" id="opciones">
                <option value="">Selecciona una opción</option>
                <?php
                foreach ($ciudades3 as $ciudad => $valor) {
                    foreach ($valor as $contenido) {
                        echo "<option value='$contenido'>$contenido</option>";
                    }
                }
                ?>
            </select><br>
        </div>
        <div class="secciones">
            <input type="checkbox" name="acepta" value="Aceptados"> Acepta los términos:
        </div>
        <div class="secciones">
            <input type="submit" class="botones" name="boton" value="Enviar">
            <input type="reset" class="botones" name="boton" value="Limpiar">
        </div>
    </form>
</body>
</html>