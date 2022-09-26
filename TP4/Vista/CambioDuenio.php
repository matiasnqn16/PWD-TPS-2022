<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Dueño</title>
</head>
<body>
<?php include_once "../util/Estructura/header.php"; ?>
<div class="container">
    <div class="row">
        <div class="mx-auto mt-3">
            <h3>Cambio de Titular</h3>
            
            <form class="row mb-2 gx-3 align-items-center needs-validation" id="Auto" action="accion/accionCambioDuenio.php" method="get" novalidate>
                <div class="col-12">
                    <div class="col-3">
                        <label for="Patente" class="form-label">Ingrese Patente:</label>
                        <input class="form-control" type="text" name="Patente" id="Patente" maxlength="7" pattern="[A-Z]{3}\s[0-9]{3}" placeholder="Ej: ABC 123" required>
                        <div class="valid-feedback">Check!</div>
                        <div class="invalid-feedback">Campo necesario, Ej: ABC 123</div>
                    </div>
                </div>
                <br>
                <div class="col-12">
                    <div class="col-3">
                        <label for="NroDni" class="form-label">Ingrese DNI:</label>
                        <input class="form-control" type="text" name="NroDni" id="NroDni" pattern="[0-9]{8}" maxlength="8" max="99999999" placeholder="Ej: 23456789" required>
                        <div class="valid-feedback">Check!</div>
                        <div class="invalid-feedback">Campo necesario, Ej: 23456789</div>

                    </div>

                </div>
                <br>
                <div class="col-12">
                    <div class="col-3">
                        <button class="btn btn-dark mt-2" type="submit">Cambiar Titular</button>

                    </div>

                </div>
        
            </form>





        </div>
    </div>
</div>

    <?php include_once "../util/Estructura/footer.php"; ?>

</body>
<script src="../util/js/verifAuto.js"></script>
</html>