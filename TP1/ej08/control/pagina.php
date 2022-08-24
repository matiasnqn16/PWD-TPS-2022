<?php 

/* Ejercicio 8
La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
Agregar un botón para limpiar el formulario y volver a consultar. */

$edad=0;
$estudiante=" ";
if (isset($_GET)) {
    if (isset($_GET['edad'])) {
       $edad=$_GET['edad']; }
    if (isset($_GET['estudiante']))  {
       $estudiante=$_GET['estudiante']; }
} else {
    echo "sin datos";
    return; 
}

$valor=300;

if ($estudiante == "estudiante") {

   if ($edad >12) {
       $valor=180; }
     else { $valor=160; }
   }

echo "debe abonar ".$valor;

?>
