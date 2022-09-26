<?php
include_once "../../configuracion.php";
$datos = data_submitted();
$OBJexistePersona = new CtrlPersona();
$OBJexisteAuto = new CtrlAuto();
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
<?php include_once "../../util/Estructura/header2.php"; ?>

<div class="container">
    <div class="row">
        <div class="mx-auto">

    <h3>Cambio de Titular</h3>
    <?php
    if(isset($datos['Patente'],$datos['NroDni'])){
        $encontroAuto = $OBJexisteAuto->buscar($datos);
        $encontroPersona= $OBJexistePersona->buscar($datos);    

        if (count($encontroAuto)>0 && count($encontroPersona) > 0) {
            $OBJautoEdit=$encontroAuto[0];  
        
            $editAuto['Patente'] = $OBJautoEdit->getpatente();
            $editAuto['Marca'] = $OBJautoEdit->getmarca();
            $editAuto['Modelo'] = $OBJautoEdit->getmodelo();
            $editAuto['OBJduenio'] = $encontroPersona[0];


            if($OBJexisteAuto->modificacion($editAuto)){
               echo '<p class="alert alert-success"> Se ha realizado el cambio </p>'; 
            }else{
                echo "<p class='alert alert-info'>error en la bd </p>";
            }
        }else{
            echo "<p class='alert alert-info'>No se encuentra vehiculo o dni</p>";
        } 
    }else{
        echo " <p class='alert alert-danger'> No recibi nada </p>";
    }

    ?>
        <br><br><br>        
    <a class="btn btn-secondary" href="javascript: history.go(-1)">Volver</a>
    <br><br><br>

        </div>
    </div>
</div>




</body>
</html>