<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 1 - subir archivos</title>
    <link rel="stylesheet" href="../vista/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <script src="../vista/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

     <!-- Crear un formulario que permita subir un archivo. En el servidor se deberá controlar 
    que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su 
    contenido en un textarea. -->
    
</head>
<body>

<!-- Menu para moverse entre los diferentes puntos del TP3 -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="../../ej01/vista/ej01.php">TP3 - Ej 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">TP3 - Ej 2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../../ej03/vista/ej03.php">TP3 - Ej 3</a>
  </li>
</ul>

<br>

<div class="container row">
    <div class="col-md-6">
        <form class="form-control" action="../control/subirArchivo.php" method="post" enctype="multipart/form-data">
            <b>Ingrese el archivo de texto plano .txt</b>
            <input type="file" name="miFile" id="miFile">
            <br><br>
            <input class="btn btn-primary" type="submit" value="Enviar">
        </form>
    </div>
    
</div>

</body>
</html>

