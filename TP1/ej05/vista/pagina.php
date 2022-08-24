<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos personales</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes 
    “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
    estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
    apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
    un mensaje que indique el tipo de estudios que posee y su sexo. -->

<body>
    
</body>
</html>
<form id="presentacion" name="presentacion" method="get" action="../control/pagina.php">
        Nombre: <input name="nombre" id="nombre" type="text" /><br/><br/>
        Apellido: <input name="apellido" id="apellido" type="text" /><br/><br/>
        Edad: <input name="edad" id="edad" type="number" /><br/><br/>
        Direccion: <input name="direccion" id="direccion" type="text" /><br/><br/>
 <!-- nivel de estudios -->
 <input type="radio" id="sinestudio" name="nivelest" value="sin estudios">
        <label class="radio" for="sinestudio">Sin estudios</label><br>
        <input type="radio" id="solopri" name="nivelest" value="primaria">
        <label class="radio" for="solopri">Solo primaria</label><br>
        <input type="radio" id="secundario" name="nivelest" value="secundario">
        <label class="radio" for="secundario">Secundario</label><br>
        <br/>
        <!-- shender -->
        <input type="radio" id="femenino" name="genero" value="femenino">
        <label class="radio" for="femenino">Femenino</label><br>
        <input type="radio" id="masculino" name="genero" value="masculino">
        <label class="radio" for="masculino">Masculino</label><br>
        <br/>
        <input type="submit" name="submit" value="Enviar"/>

</form>

</body>    

</html>


