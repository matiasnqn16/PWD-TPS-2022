<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga lista</title>
    <link rel="stylesheet" href="../../bootstrap-5.2.0-dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-2 pb-2" style="background-color: greenyellow;">
    <div class="row">
        <div class="col-md-6">

            <?php
            $titulo = $actores = $director = $guion = $produccion = $anio = $nacionalidad = $duracion = $restric = $sinopsis = $genero = "";

            if (isset($_POST)) {

                if (isset($_POST['titulo'])) {
                    $titulo = $_POST['titulo'];
                }
                if (isset($_POST['actores'])) {
                    $actores = $_POST['actores'];
                }
                if (isset($_POST['director'])) {
                    $director = $_POST['director'];
                }
                if (isset($_POST['guion'])) {
                    $guion = $_POST['guion'];
                }
                if (isset($_POST['produccion'])) {
                    $produccion = $_POST['produccion'];
                }
                if (isset($_POST['anio'])) {
                    $anio = $_POST['anio'];
                }
                if (isset($_POST['nacionalidad'])) {
                    $nacionalidad = $_POST['nacionalidad'];
                }
                if (isset($_POST['duracion'])) {
                    $duracion = $_POST['duracion'];
                }
                if (isset($_POST['restric'])) {
                    $restric = $_POST['restric'];
                }
                if (isset($_POST['sinopsis'])) {
                    $sinopsis = $_POST['sinopsis'];
                }
                if (isset($_POST['genero'])) {
                    $genero = $_POST['genero'];
                }
            } else {
                echo "sin datos";
                return;
            }
            echo "<h3>La pelicula introducida es</h3>
                                            <b>Titulo: </b> " . $titulo . "</br>
                                            <b>Actores: </b>" . $actores . "</br>
                                            <b>Director: </b>" . $director . "</br>
                                            <b>Guión: </b>" . $guion . "</br>
                                            <b>Produccion: </b>" . $produccion . "</br>
                                            <b>Año: </b>" . $anio . "</br>
                                            <b>Nacionalidad: </b>" . $nacionalidad . "</br>
                                            <b>Duracion: </b>" . $duracion . "</br>
                                            <b>Genero: </b>" . $genero . "</br>
                                            <b>Restricciones: </b>" . $restric . "</br>
                                            <b>Sinopsis: </b>" . $sinopsis . "</br>";

            ?>
        </div>
        <div class="col-md-6 ">
            <?php

            $dir = "../control/temp/ ";
            $pesaMenosDe2Mb = true;
            $esArchivoAdmitido = false;

            if ($_FILES['miFile']["error"] <= 0) {
                $nombreArchivo = $_FILES['miFile']['name'];
                $tipoDeArchivo = $_FILES['miFile']['type'];
                $tamanioArchivo = $_FILES['miFile']["size"];
                /* si el archivo pesa mas de 2048kb el flag cambia a false */
                if (($tamanioArchivo / 1024) > 2048) {
                    $pesaMenosDe2Mb = false;
                }
                if ($tipoDeArchivo == "image/jpeg" || $tipoDeArchivo == "image/png") {
                    $esArchivoAdmitido = true;
                }
                if ($pesaMenosDe2Mb && $esArchivoAdmitido) {
                    // Intentamos copiar el archivo al servidor.
                    if (!copy($_FILES['miFile']['tmp_name'], $dir . $_FILES['miFile']['name'])) {
                        echo "ERROR: no se pudo cargar la imagen ";
                    } else {
                        echo "<img class=' rounded mx-auto' src='$dir$nombreArchivo' alt='img'>   ";
                    }
                } else {
                    echo "El archivo no cumple con los requisitos <br />";
                }
            } else {
                echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
            }
            ?>
        </div>
        </div>
    </div>

</body>

</html>