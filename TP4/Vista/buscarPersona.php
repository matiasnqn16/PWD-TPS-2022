<?php
include_once "../configuracion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vista/bootstrap-5.2.0-dist/css/bootstrap.min.css">

    <title>Buscar persona</title>

    <!-- busca una persona y si la encuentra permite modificarla -->

</head>

<body>
    <?php include_once "Estructura/header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="mx-auto mt-3">
                <h3>Buscar Persona</h3>
                <br>
                <div class="col-3">
                <form id="Persona" action="Accion/accionBuscarPersona.php" method="get" autocomplete="off" class="needs-validation" novalidate>
                    <label for="NroDni">Ingrese NroDni:</label>
                    <input class="form-control" type="text" name="NroDni" id="NroDni" pattern="[0-9]{8}" placeholder="Ej: 23456789" maxlength="8" max="99999999" required>
                    <div class="valid-feedback">Check!</div>
                    <div class="invalid-feedback">Campo necesario, Ej: 23456789</div>
                    <div class="mt-3">
                        <button class="btn btn-secondary" type="reset">Limpiar</button>
                        <button class="btn btn-dark" type="submit">Buscar</button>
                    </div>
                </form>
                </div>

            </div>
        </div>
    </div>

    <?php include_once "Estructura/footer.php"; ?>
</body>
<script src="js/verifPersona.js"></script>
</html>