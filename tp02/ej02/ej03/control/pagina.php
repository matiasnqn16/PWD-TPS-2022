<?php 

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

?>
