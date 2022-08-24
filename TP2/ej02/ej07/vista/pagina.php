<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculadora</title>
    <link rel="stylesheet" href="../../../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</head>
<body>
    
</body>
</html>
<form id="calculadora" name="calculadora" method="get" action="../control/pagina.php" class="row g-3 needs-validation" novalidate>

<div class="col-md-4">
    <label for="op1" class="form-label">Operador 1</label>
    <input type="number" class="form-control" id="op1" value=0 name="op1" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>

<!-- <input name="op1" id="op1" type="number" /><br/> -->

<div class="col-md-4">
    <label for="op2" class="form-label">Operador 2</label>
    <input type="number" class="form-control" id="op2" value=0 name="op2" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>

<!-- <input name="op2" id="op2" type="number" /><br/> -->

<div class="mb-3">
    <select class="form-select" required aria-label="Seleccione operador">
      <option value="suma">Suma</option>
      <option value="resta">Resta</option>
      <option value="multiplicacion">Multiplicacion</option>
    </select>
    <div class="invalid-feedback">Debe seleccionar una opcion!</div>
  </div>

<!-- <select name='operacion' id='operacion' style='width: 408px'>;
        <option value="suma">Suma</option>";
        <option value="resta">Resta</option>";
        <option value="multiplicacion">Multiplicacion</option>"; -->


<div class="col-12">
     <button class="btn btn-primary" type="submit">Enviar</button>
</div>

<!--    <input type="submit" name="submit" value="Enviar"/> -->

</form>

</body>    

<script src="js/fnt-pag.js"></script>


</html>