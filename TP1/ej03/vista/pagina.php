<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos personales</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- Crear una página php que contenga un formulario HTML como el que se indica en la 
    imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php 
    que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy 
    nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
    Cambiar el método Post por Get y analizar las diferencias
        Diferencias analizadas en control ../control/pagina.php#10
    -->

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

