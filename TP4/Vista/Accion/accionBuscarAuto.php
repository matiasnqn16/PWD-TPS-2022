<?php
include_once "../../configuracion.php";
    $busqueda = data_submitted();
    $auto = new CtrlAuto();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Auto</title>

    <!--  Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero
de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde
usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con
la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean
convenientes en caso de que no se encuentre ningún auto con la patente ingresada.
Utilizar css y validaciones javaScript cuando crea conveniente -->

</head>
<body>
<?php include_once "../Estructura/header2.php"; ?>
<div class="container">
    <div class="row">
        <div class="mx-auto mt-3">


            <h3>Buscar Auto</h3>
            <?php 
            if(isset($busqueda['Patente'])){
                
                echo "<p>La matricula : ". $busqueda['Patente'] ."</p>";
                $datos = $auto->buscar($busqueda);
                if(isset($datos[0])){
                    echo "<br>";
                    echo "<table class='table caption-top table-dark'><tr class='table-active'><td><b>Patente<b></td><td><b>Marca<b></td><td><b>Modelo<b></td><td><b>Dni Asociado<b></td></tr>";
                    echo "<tr><td>".$datos[0]->getpatente()."</td>";
                    echo "<td>".$datos[0]->getmarca()."</td>";
                    echo "<td>".$datos[0]->getmodelo()."</td>";
                    echo "<td>".$datos[0]->getOBJduenio()->getnrodni()."</td></tr></table>";
                }else{
                    echo "<p class='alert alert-info'> No existe en la base de datos <p>";
                }
                }else 
                {?>
                <p class='alert alert-danger'>No se ha recibido ninguna matricula</p>
        
            <?php }; ?>
            
            <br><br><br>
            <a class="btn btn-secondary" href="javascript: history.go(-1)">Volver</a>
            <br><br><br>
        </div>
    </div>
</div>
<?php include_once "../Estructura/footer.php"; ?>

</body>
</html>