<?php
include_once "../configuracion.php";
$objPersonas = new CtrlPersona();
$listaPersonas = $objPersonas->buscar(null);
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Lista Personas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php include_once "../util/Estructura/header.php"; ?>

<!-- Crear una página "listaPersonas.php" que muestre un listado con las personas que se
encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes
generada, no se puede acceder directamente a las clases del ORM -->

<h3>Lista Personas</h3>
<!-- <a href="#">nuevo</a> -->

<?php if ( count($listaPersonas)>0){?>
    <table border="1">
        <tr><td><b>Dni</b></td><td><b>Nombre</b></td><td><b>Apellido</b></td><td><b>Fecha Nac</b></td><td><b>Telefono</b></td><td><b>Domicilio</b></td><td></td></tr>
<?php	

    foreach ($listaPersonas as $objPersona) { 

        echo '<tr><td>'.$objPersona->getnrodni().'</td>';
        echo '<td>'.$objPersona->getnom().'</td>';
        echo '<td>'.$objPersona->getap().'</td>';
        echo '<td>'.$objPersona->getfnac().'</td>';
        echo '<td>'.$objPersona->gettel().'</td>';
        echo '<td>'.$objPersona->getdomi().'</td>';
        echo '<td><a href="accion/autosPersona.php?NroDni='.$objPersona->getnrodni().'">Ver vehiculos</a></td></tr>'; 
	}
?>
<?php }else {
    echo "<p>No se encontraron vehiculos en la base de datos<p>";
}?>


</table>
</body>
</html>