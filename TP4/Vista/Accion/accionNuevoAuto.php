<?php
include_once "../../configuracion.php";
$nuevoAuto = data_submitted();
$existePersona = new CtrlPersona();
$existeAuto = new CtrlAuto();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregando Nuevo Auto</title>
</head>
<body>
    <h3>Agregando Nuevo Auto</h3>
    <?php
    if(isset($nuevoAuto)){
        $listaAutos = $existeAuto->buscar(NULL);
        $flag = $existeAuto->existe($listaAutos,$nuevoAuto);
        if(!$flag){
            if($existePersona->buscarPorDni($nuevoAuto['DniDuenio'])){
                $persona = $existePersona->buscarPorDni($nuevoAuto['DniDuenio']);
                $nuevoAuto['DniDuenio'] = $persona;
                if($existeAuto->alta($nuevoAuto)){
                    echo "<p>Se agrego con exito!<p>";
                }else{
                    echo "No se pudo agregar el dato";  
                }
            }else{
                echo "<p>No existe la persona en la BD</p><br><p>agregar <a href='../NuevaPersona.php'>Nueva Persona</a></p>";
            }
        }else{
            echo "La patente ya esta en uso";
        }
    }else{
        echo "<p> No se encontraron datos <p>";
    }
    ?>

</body>
</html>