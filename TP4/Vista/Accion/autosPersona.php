<?php
include_once "../../configuracion.php";
    $busqueda = data_submitted();
    $auto = new CtrlAuto();
    $persona = new CtrlPersona();
    $srcAuto['DniDuenio'] = $busqueda['NroDni'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autos de la Persona</title>
</head>
<body>
    <h3>Autos asociados</h3>
    <?php
    if(isset($busqueda['NroDni'])){
        $datosPersona = $persona->buscarPorDni($busqueda['NroDni']);
        $datosAuto = $auto->buscarPorDni($srcAuto['DniDuenio']);
        if(isset($datosAuto[0])){

            echo "<p>Autos asociados:<p>";
            echo "<table border=1> <tr><td><b>Patente<b></td><td><b>Marca<b></td><td><b>Modelo<b></td><td><b>Dni Asociado<b></td></tr>";
            foreach($datosAuto as $auto){
                echo "<tr><td>".$auto->getpatente()."</td>";
                echo "<td>".$auto->getmarca()."</td>";
                echo "<td>".$auto->getmodelo()."</td>";
                echo "<td>".$auto->getOBJduenio()."</td></tr>";
            }
            echo "</table>";
            
            echo "<br>";

            echo "<p>Datos de la persona<p>";
            echo "<table border=1><tr><td><b>Dni</b></td><td><b>Nombre</b></td><td><b>Apellido</b></td><td><b>Fecha Nac</b></td><td><b>Telefono</b></td><td><b>Domicilio</b></td></tr>";
            echo "<tr><td>".$datosPersona->getnrodni()."</td>";
            echo "<td>".$datosPersona->getnom()."</td>";
            echo "<td>".$datosPersona->getap()."</td>";
            echo "<td>".$datosPersona->getfnac()."</td>";
            echo "<td>".$datosPersona->gettel()."</td>";
            echo "<td>".$datosPersona->getdomi()."</td></tr></table>";
        }else{
            echo "<p>No posee autos asociados</p>";
        }
    }else{
        echo "<p>No se han recibido datos</p>";
    }
    ?>
</body>
</html>