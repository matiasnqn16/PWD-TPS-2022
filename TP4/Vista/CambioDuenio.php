<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Dueño</title>
</head>
<body>
<?php include_once "../util/Estructura/header.php"; ?>

    <h3>Cambio de Titular</h3>
    
    <form id="Auto" action="accionCambioDuenio.php" method="post">
        <label for="Patente">Ingrese Patente:</label>
        <input type="text" name="Patente" id="Patente">
        <br>
        <label for="NroDni">Ingrese DNI:</label>
        <input type="number" name="NroDni" id="NroDni">
        <br>
        <button type="submit">Cambiar Titular</button>

    </form>


</body>
</html>