<?php
include_once "../../configuracion.php";
$nuevoAuto = data_submitted();
$OBJexistePersona = new CtrlPersona();
$OBJexisteAuto = new CtrlAuto();
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
<?php include_once "../../util/Estructura/header2.php"; ?>
<div class="container">
    <div class="row">
        <div class="mx-auto">



            <h3>Agregando Nuevo Auto</h3>
            <?php
            if(isset($nuevoAuto['DniDuenio'])){
                $listaAutos = $OBJexisteAuto->buscar(NULL);
                $flag = $OBJexisteAuto->existe($listaAutos,$nuevoAuto);
                if(!$flag){
                    if($OBJexistePersona->buscarPorDni($nuevoAuto['DniDuenio'])){
                        $OBJpersona = new Persona();
                        $OBJpersona->buscar($nuevoAuto['DniDuenio']);
                        $nuevoAuto['OBJduenio'] = $OBJpersona;
                        if($OBJexisteAuto->alta($nuevoAuto)){
                            echo "<p class='alert alert-success'>Se agrego con exito!<p>";
                        }else{
                            echo "<p class='alert alert-info'>No se pudo agregar el dato<p>";  
                        }
                    }else{
                        echo "<p class='alert alert-info'>No existe la persona en la BD</p><br><p>agregar <a class='btn btn-dark' href='../NuevaPersona.php'>Nueva Persona</a></p>";
                    }
                }else{
                    echo "<p class='alert alert-info'>La patente ya esta en uso<p>";
                }
            }else{
                echo "<p class='alert alert-danger'> No se encontraron datos <p>";
            }
            ?>
            <br><br><br>
                    <a class="btn btn-secondary" href="javascript: history.go(-1)">Volver</a>
                    <br><br><br>

        </div>
    </div>
</div>

    <?php include_once "../../util/Estructura/footer.php"; ?>

</body>
</html>