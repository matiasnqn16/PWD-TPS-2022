<?php 

$nombre="";
$apellido="";
$edad=0;
$direccion="";
$genero="";
$deporte=[];
$nivelest="";
if (isset($_GET)) {

    if (isset($_GET['nombre'])) {
    $nombre=$_GET['nombre']; }

    if (isset($_GET['apellido'])) {
    $apellido=$_GET['apellido']; }

    if (isset($_GET['edad'])) {
    $edad=$_GET['edad']; }

    if (isset($_GET['direccion'])) {
    $direccion=$_GET['direccion']; }

    if (isset($_GET['nivelest'])) {
    $nivelest=$_GET['nivelest']; }

    if (isset($_GET['genero'])) {
    $genero=$_GET['genero']; }

    if (isset($_GET['deporte'])) {
       $deporte=$_GET['deporte']; }
} else {
    echo "sin datos";
    return; 
}

echo "Hola, yo soy ".$nombre.",".$apellido." tengo ".$edad." de edad y vivo ".$direccion;
echo "<br>";
if ($edad>=18) {
    echo "soy mayor de edad"; }
else {
    echo "no soy mayor edad";
}
echo "<br>";
echo "soy de genero ".$genero." y mi nivel de estudios es ".$nivelest;
echo "<br>";
echo "y practico ".count($deporte)." de deportes";
?>
