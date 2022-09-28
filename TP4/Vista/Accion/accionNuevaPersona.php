<?php
include_once "../../configuracion.php";
$nuevaPersona = data_submitted();
$OBJsumarPersona = new CtrlPersona();
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
<?php include_once "../Estructura/header2.php"; ?>
<div class="container">
    <div class="row">
        <div class="mx-auto mt-3">

            <h3>Agregando Nueva Persona</h3>
            <?php
            if(isset($nuevaPersona)){
                $listaPersonas = $OBJsumarPersona->buscar(NULL);
                $flag = false;
                foreach($listaPersonas as $Persona){
                    if($Persona->getnrodni() == $nuevaPersona['NroDni']){
                        $flag = true;
                    }
                }
                if(!$flag){
                    if($OBJsumarPersona->alta($nuevaPersona)){
                        echo "<p class='alert alert-success'>Se agrego con exito!</p>";
                    }else{
                        echo "<p class='alert alert-info'>No se pudo agregar el dato</p>";
                    }
                }else{
                    echo "<p class='alert alert-info'>El dni ya existe</p>";
                }
        
            }else{
                echo "<p class='alert alert-info'> No se encontraron datos <p>";
            }
            ?>
        
            <br><br><br>
            <a class="btn btn-secondary" href="javascript: history.go(-1)">Volver</a>
            <br><br><br>


        </div>
    </div>
</div>
<?php include_once "../Estructura/footer.php"; ?>

</body>
</html>