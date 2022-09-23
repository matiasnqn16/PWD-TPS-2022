<?php
$date = date('Y-m-d');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Persona</title>
</head>
<body>
<?php include_once "../util/Estructura/header.php"; ?>

    <h3>Agregar Persona</h3>
    <form id="Persona" action="accion/accionNuevaPersona.php" method="get">
        <label for="NroDni">Ingrese DNI</label>
        <input type="text" name="NroDni" id="NroDni" pattern="[0-9]{8}" maxlength="8" require>
        <br>
        <label for="Apellido">Apellido</label>
        <input type="text" name="Apellido" id="Apellido" require>
        <br>
        <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" id="Nombre" require>
        <br>
        <label for="fechaNac">Fecha Nacimiento</label>
        <input type="date" name="fechaNac" id="fechaNac" min="1900-01-01" max="<?php echo $date ?>" require>
        <br>
        <label for="Telefono">Telefono</label>
        <input type="tel" name="Telefono" id="Telefono" maxlength="10" require>
        <br>
        <label for="Domicilio">Domicilio</label>
        <input type="text" name="Domicilio" id="Domicilio">
        <br>
        <button type="submit">Enviar Datos</button>
    </form>
</body>
</html>