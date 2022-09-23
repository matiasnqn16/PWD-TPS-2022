<?php
include_once "../../configuracion.php";
$datos = data_submitted();
$existePersona = new CtrlPersona();
$existeAuto = new CtrlAuto();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiando Dueño</title>
</head>
<body>
    <h3>Cambio de Titular</h3>
    <?php
    if(isset($datos)){
        $flag = $existeAuto->existe()
    }



</body>
</html>