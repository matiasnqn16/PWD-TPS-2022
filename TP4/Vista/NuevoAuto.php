<?php
$date = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Vehiculo</title>
</head>
<body>
<?php include_once "../util/Estructura/header.php"; ?>

    <h3>Agregar Vehiculo</h3>
    <form id="Auto" action="accion/accionNuevoAuto.php" method="get">
        <label for="Patente">Ingrese Patente</label>
        <input type="text" name="Patente" id="Patente" pattern="[a-zA-Z0-9\s]{7,9}" maxlength="8" require>
        <br>
        <label for="Marca">Marca</label>
        <input type="text" name="Marca" id="Marca" require>
        <br>
        <label for="Modelo">Modelo</label>
        <input type="text" name="Modelo" id="Modelo" require>
        <br>
        <label for="DniDuenio">DNI dueño</label>
        <input type="text" name="DniDuenio" id="DniDuenio" pattern="[0-9]{8}" maxlength="8" require>
        <br>
        <button type="submit">Enviar Datos</button>
    </form>
</body>
</html>