<?php
include_once "../../configuracion.php";
$datosPersona = data_submitted();
$objPersona = new CtrlPersona();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../vista/bootstrap-5.2.0-dist/css/bootstrap.min.css">

    <title>Graba edicion de persona</title>
</head>
<body>
<?php include_once "../Estructura/header2.php"; ?>
<div class="container">
 <div class="row">
 <div class="mx-auto mt-3"> 


    <h3>Graba edicion de Persona</h3>
    <?php
    if(isset($datosPersona['NroDni'],$datosPersona['Apellido'],$datosPersona['Nombre'],$datosPersona['Telefono'])){
       if($objPersona->modificacion($datosPersona)){
          echo "<p class='alert alert-success'>Se grabo con exito!<p>";
        }else{
          echo "<p class='alert alert-info'>No se pudo agregar el dato<p>";
      }

    }else{
        echo "<p<p class='alert alert-danger'>> No se encontraron datos / pocos datos<p>";
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