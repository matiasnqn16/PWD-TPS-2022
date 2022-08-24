<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas diarias de web dinamica</title>

    <!-- 
        Crear una página php que contenga un formulario HTML que permita ingresar las horas
        de cursada, de la materia Programación Web Dinámica, por cada día de la semana. 
        Enviar los datos del formulario por el método Get a otra página php que los reciba y 
        complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que 
        se cursan por semana
     -->

</head>
<body>

<form id="webdinamica" name="webdinamica" method="get" action="../control/pagina.php">
        Lunes: <input name="dia1" id="dia1" type="number" /><br/>
        Martes: <input name="dia2" id="dia2" type="number" /><br/>
        Miercoles: <input name="dia3" id="dia3" type="number" /><br/>
        Jueves: <input name="dia4" id="dia4" type="number" /><br/>
        Viernes: <input name="dia5" id="dia5" type="number" /><br/>
        <input type="submit" name="submit" value="Aceptar"/>
</form>

</body>    

</html>