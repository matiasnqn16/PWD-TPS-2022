<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos personales</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar 
    esos datos a otra página en donde se muestren mensajes distintos dependiendo si la 
    persona es mayor de edad o no; (si la edad es mayor o igual a 18).
    Enviar los datos usando el método GET y luego probar de modificar los datos 
    directamente en la url para ver los dos posibles mensajes. -->

<body>
    
</body>
</html>
<form id="presentacion" name="presentacion" method="get" action="../control/pagina.php">
        Nombre: <input name="nombre" id="nombre" type="text" /><br/><br/>
        Apellido: <input name="apellido" id="apellido" type="text" /><br/><br/>
        Edad: <input name="edad" id="edad" type="number" /><br/><br/>
        Direccion: <input name="direccion" id="direccion" type="text" /><br/><br/>
        <input type="submit" name="submit" value="Enviar"/>
</form>

</body>    

</html>

