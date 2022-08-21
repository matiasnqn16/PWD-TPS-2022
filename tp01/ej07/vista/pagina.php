<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculadora</title>
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