<?php
include_once "../configuracion.php";

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
<?php include_once "../util/Estructura/header.php"; ?>
<div class="container">
    <div class="row">
        <div class="mx-auto mt-3">
            <h3>Buscar Auto</h3>
            <br>
            
            <div class="col-3">
            <form id="Pat" action="Accion/accionBuscarAuto.php" method="get" autocomplete="off" class="needs-validation">
                    <label  for="Patente">Ingrese la patente:</label>
                    <input class="form-control" type="text" name="Patente" id="Patente" maxlength="7" placeholder="ABC 123" required>
                    <div class="mt-3">
                        <button class="btn btn-secondary" type="reset">Limpiar</button>
                        <button class="btn btn-primary" type="submit">Buscar</button>
                    </div>
                </form>
                </div>

        </div>
    </div>
</div>

<?php include_once "../util/Estructura/footer.php"; ?>

</body>

<script src="../util/js/verificarPatente.js"></script>

</html>