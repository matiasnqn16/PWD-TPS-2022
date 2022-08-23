<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos personales</title>
    <link rel="stylesheet" href="../../../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
<body>
    
</body>
</html>

<h3>Datos personales</h3>

<form id="presentacion" name="presentacion" method="get" action="../control/pagina.php" class="row g-3 needs-validation" novalidate>

<div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" value="" name="nombre" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>

<!--Nombre: <input name="nombre" id="nombre" type="text" /> -->

<div class="col-md-4">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" value="" name="apellido" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>

<!--Apellido: <input name="apellido" id="apellido" type="text" /> -->

<div class="col-md-4">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" class="form-control" id="edad" value="" name="edad" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>

<!--Edad: <input name="edad" id="edad" type="number" /> -->

<div class="col-md-4">
            <label for="direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" value="" name="direccion" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>

<!--Direccion: <input name="direccion" id="direccion" type="text" /> -->

<div class="form-check mb-3">
    <input type="radio" class="form-check-input" id="sinestudio" name="nivelest" value="sin estudios" required>
    <label class="form-check-label" for="sinestudio">Sin estudios</label>
</div>
<div class="form-check mb-3">
    <input type="radio" class="form-check-input" id="solopri" name="nivelest" value="solo primaria">
    <label class="form-check-label" for="solopri">Solo primaria</label>
</div>
<div class="form-check mb-3">
    <input type="radio" class="form-check-input" id="secundario" name="nivelest" value="secundario">
    <label class="form-check-label" for="secundario">Secundario</label>
    <div class="invalid-feedback">debe ingressar una opcion</div>
</div>

<!-- <input type="radio" id="sinestudio" name="nivelest" value="sin estudios">
        <label class="radio" for="sinestudio">Sin estudios</label><br>
        <input type="radio" id="solopri" name="nivelest" value="primaria">
        <label class="radio" for="solopri">Solo primaria</label><br>
        <input type="radio" id="secundario" name="nivelest" value="secundario">
        <label class="radio" for="secundario">Secundario</label><br> -->

<div class="form-check mb-3">
    <input type="radio" class="form-check-input" id="masculino" name="genero" value="masculino" required>
    <label class="form-check-label" for="masculino">Masculino</label>
</div>
<div class="form-check mb-3">
    <input type="radio" class="form-check-input" id="femenino" name="genero" value="femenino">
    <label class="form-check-label" for="femenino">Femenino</label>
    <div class="invalid-feedback">debe ingressar una opcion</div>
</div>

<!--    <input type="radio" id="femenino" name="genero" value="femenino">
        <label class="radio" for="femenino">Femenino</label><br>
        <input type="radio" id="masculino" name="genero" value="masculino">
        <label class="radio" for="masculino">Masculino</label><br> -->


<div class="col-12">
     <button class="btn btn-primary" type="submit">Enviar</button>
</div>

<!--    <input type="submit" name="submit" value="Enviar"/> -->


</form>

</body>    

<script src="js/fnt-pag.js"></script>

</html>

