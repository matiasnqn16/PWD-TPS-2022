<?php 
/* Ejercicio 4
Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
persona es mayor de edad o no; (si la edad es mayor o igual a 18).
Enviar los datos usando el método GET y luego probar de modificar los datos
directamente en la url para ver los dos posibles mensajes. */

$nombre="";
$apellido="";
$edad=0;
$direccion="";
if (isset($_GET)) {

    if (isset($_GET['nombre'])) {
    $nombre=$_GET['nombre']; }

    if (isset($_GET['apellido'])) {
        $apellido=$_GET['apellido']; }

    if (isset($_GET['edad'])) {
       $edad=$_GET['edad']; }

    if (isset($_GET['direccion'])) {
       $direccion=$_GET['direccion']; }

} else {
    echo "sin datos";
    return; 
}

echo "Hola, yo soy ".$nombre.",".$apellido." tengo ".$edad." de edad y vivo ".$direccion;
echo "<br>";
if ($edad>=18) {
    echo "es mayor de edad"; }
else {
    echo "no es mayor edad";
}
?>
