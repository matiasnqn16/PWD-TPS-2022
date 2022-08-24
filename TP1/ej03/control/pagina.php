<?php 

/* Ejercicio 3
Crear una página php que contenga un formulario HTML como el que se indica en la
imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
Cambiar el método Post por Get y analizar las diferencias 

GET => envia datos en la url del navegador
http://localhost/tp01/ej03/control/pagina.php?nombre=&apellido=&edad=&direccion=&submit=Enviar
POST => no aparecen datos en la url del navegador

*/

$nombre=$apellido=$direccion="";
$edad=0;

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

?>
