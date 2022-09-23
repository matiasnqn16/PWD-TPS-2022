<?php
include_once "../configuracion.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Auto</title>

    <!--  Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero
de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde
usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con
la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean
convenientes en caso de que no se encuentre ningún auto con la patente ingresada.
Utilizar css y validaciones javaScript cuando crea conveniente -->

</head>
<body>
<?php include_once "../util/Estructura/header.php"; ?>


<h3>Buscar Auto</h3>
<br>

<form id="Patente" action="Accion/accionBuscarAuto.php" method="get" autocomplete="off">
    <label for="Patente">Ingrese la patente:</label>
    <input type="text" name="Patente" id="Patente" pattern="[a-zA-Z0-9\s]{6,7}" required>
    <button type="submit">Buscar</button>
</form>

</body>

<script src="../util/js/verificarPatente.js"></script>

</html>