<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculadora</title>

    <!-- 
        Crear una página con un formulario que contenga dos input de tipo text y un select. En 
        los inputs se ingresarán números y el select debe dar la opción de una operación 
        matemática que podrá resolverse usando los números ingresados. En la página que 
        procesa la información se debe mostrar por pantalla la operación seleccionada, cada 
        uno de los operandos y el resultado obtenido de resolver la operación. 
     -->

</head>
<body>
    
</body>
</html>
<form id="presentacion" name="presentacion" method="get" action="../control/pagina.php">
        <input name="op1" id="op1" type="number" /><br/>
        <input name="op2" id="op2" type="number" /><br/>
        <select name='operacion' id='operacion' style='width: 408px'>;
        <option value="suma">Suma</option>";
        <option value="resta">Resta</option>";
        <option value="multiplicacion">Multiplicacion</option>";

        <!-- submit -->
        <input type="submit" name="submit" value="Aceptar"/>
        <input type="reset" name="reset" value="Limpiar"/>

</form>


</body>    

</html>