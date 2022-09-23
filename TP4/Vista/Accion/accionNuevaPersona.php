<?php
include_once "../../configuracion.php";
$nuevaPersona = data_submitted();
$sumarPersona = new CtrlPersona();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregando Nueva Persona</title>
</head>
<body>
    <h3>Agregando Nueva Persona</h3>
    <?php
    if(isset($nuevaPersona)){
        $listaPersonas = $sumarPersona->buscar(NULL);
        $flag = false;
        foreach($listaPersonas as $Persona){
            if($Persona->getnrodni() == $nuevaPersona['NroDni']){
                $flag = true;
            }
        }
        if(!$flag){
            if($sumarPersona->alta($nuevaPersona)){
                echo "<p>Se agrego con exito!<p>";
            }else{
                echo "No se pudo agregar el dato";
            }
        }else{
            echo "El dni ya existe";
        }

    }else{
        echo "<p> No se encontraron datos <p>";
    }
    ?>

</body>
</html>