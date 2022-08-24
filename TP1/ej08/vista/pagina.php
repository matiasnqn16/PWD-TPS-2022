<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Entradas</title>

    <!-- La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en 
    función de la edad y de la condición de estudiante del cliente. Desea que sean los propios 
    clientes los que puedan calcular el valor de sus entradas a través de una página web. Si 
    es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual 
    de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un 
    formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con 
    un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo. 
    Agregar un botón para limpiar el formulario y volver a consultar -->

</head>
<body>
    
</body>
</html>
<form id="entradas" name="entradas" method="get" action="../control/pagina.php">
        Edad: <input name="edad" id="edad" type="text" /><br/>

        <label><input type="checkbox" id="estudiante" name="estudiante" value="estudiante">Estudiante</label><br>

        <!-- submit -->
        <input type="submit" name="submit" value="Aceptar"/>
        <input type="reset" name="reset" value="Limpiar"/>

</form>


</body>    

</html>