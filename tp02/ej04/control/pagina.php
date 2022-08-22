<?php 

$titulo="";
$actores="";
$director="";
$guion="";
$produccion="";
$anio="";
$nacionalidad="";
$duracion="";
$restric="";
$sinopsis="";
$genero="";

if (isset($_GET)) {

    if (isset($_GET['titulo'])) {
        $titulo=$_GET['titulo']; }
    if (isset($_GET['actores'])) {
    $actores=$_GET['actores']; }
    if (isset($_GET['director'])) {
    $director=$_GET['director']; }
    if (isset($_GET['guion'])) {
    $guion=$_GET['guion']; }
    if (isset($_GET['produccion'])) {
    $produccion=$_GET['produccion']; }
    if (isset($_GET['anio'])) {
    $anio=$_GET['anio']; }
    if (isset($_GET['nacionalidad'])) {
    $nacionalidad=$_GET['nacionalidad']; }
    if (isset($_GET['duracion'])) {
    $duracion=$_GET['duracion']; }
    if (isset($_GET['restric'])) {
    $restric=$_GET['restric']; }
    if (isset($_GET['sinopsis'])) {
    $sinopsis=$_GET['sinopsis']; }
    if (isset($_GET['genero'])) {
    $genero=$_GET['genero']; }
} else {
        echo "sin datos";
    return; 
}

echo "<h3>La pelicula introducida es</h3>";
echo "<b>Titulo:</b>".$titulo."</br>";
echo "<b>Actores:</b>".$actores."</br>";
echo "<b>Director:</b>".$director."</br>";
echo "<b>Guión:</b>".$guion."</br>";
echo "<b>Produccion:</b>".$produccion."</br>";
echo "<b>Año:</b>".$anio."</br>";
echo "<b>Nacionalidad:</b>".$nacionalidad."</br>";
echo "<b>Duracion:</b>".$duracion."</br>";
echo "<b>Genero:</b>".$genero."</br>";
echo "<b>Restricciones:</b>".$restric."</br>";
echo "<b>Sinopsis:</b>".$sinopsis."</br>";

?>
