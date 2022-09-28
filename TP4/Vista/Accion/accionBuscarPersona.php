<?php
include_once "../../configuracion.php";
    $busqueda = data_submitted();
    $OBJpersona = new CtrlPersona();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../vista/bootstrap-5.2.0-dist/css/bootstrap.min.css">

    <title>Buscar Persona</title>

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
 <div class="mx-auto"> 

<h3>Buscar Persona</h3>
    <?php 
    if(isset($busqueda['NroDni'])){
        
        echo "<p> Dni: ". $busqueda['NroDni'] ."</p>";
        $datos = $OBJpersona->buscar($busqueda);
        if(isset($datos[0])){
            echo "<br>";
            echo "<table class='table caption-top table-dark'><tr class='table-active'><td><b>NroDni<b></td><td><b>Apellido<b></td><td><b>Nombre<b></td><td><b>Fecha Nac.<b></td><td><b>Telefono<b></td><td><b>Domicilio<b></td></tr>";
            echo "<tr><td>".$datos[0]->getnrodni()."</td>";
            echo "<td>".$datos[0]->getap()."</td>";
            echo "<td>".$datos[0]->getnom()."</td>";
            echo "<td>".$datos[0]->getfnac()."</td>";
            echo "<td>".$datos[0]->gettel()."</td>";
            echo "<td>".$datos[0]->getdomi()."</td></tr></table>";
            $link='<a class="btn btn-primary" href="../editarPersona.php?NroDni='.$datos[0]->getnrodni().'">Editar persona</a>';
            echo $link;

        }else{
            echo "<p class='alert alert-info'> No existe en la base de datos <p>";
        }
        }else 
        {?>
        <p class='alert alert-danger'>No se ha recibido ningun Dni</p>

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