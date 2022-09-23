<?php
include_once "../configuracion.php";
$objAutos = new CtrlAuto();
$listaAutos = $objAutos->buscar(null);
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Autos</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php include_once "../util/Estructura/header.php"; ?>

<!-- Crear una pagina php “VerAutos.php”, en ella usando la capa de control correspondiente
mostrar todos los datos de los autos que se encuentran cargados, de los dueños mostrar nombre y apellido.
En caso de que no se encuentre ningún auto cargado en la base mostrar un mensaje indicando que no hay
autos cargados.
 -->

<h3>Autos</h3>

<?php if ( count($listaAutos)>0){?>
    <table border="1"><tr>
        <caption>Vehiculos:</caption>
        <td><b>Patente<b></td>
        <td><b>Marca<b></td>
        <td><b>Modelo<b></td>
        <td><b>Dni Asociado<b></td>
        <td><b>Nombre</b></td>
        <td><b>Apellido</b></td>
        <td></td><td></td>
    </tr>
<?php	

    foreach ($listaAutos as $objAuto) { 
        $dni = $objAuto->getOBJduenio();
        $objPersonas = new CtrlPersona();
        $persona = $objPersonas->buscarPorDni($dni);

        echo '<tr><td>'.$objAuto->getpatente().'</td>';
        echo '<td>'.$objAuto->getmarca().'</td>';
        echo '<td>'.$objAuto->getmodelo().'</td>';
        echo '<td>'.$objAuto->getOBJduenio().'</td>';
        echo '<td>'.$persona->getnom().'</td>';
        echo '<td>'.$persona->getap().'</td>';
        echo '<td><a href="ftabla_editar.php?id='.$objAuto->getpatente().'">editar</a></td>';
        echo '<td><a href="accion/abmTabla.php?accion=borrar&id='.$objAuto->getpatente().'">borrar</a></td></tr>'; 
	}
?>
<?php }else {
    echo "<p>No se encontraron vehiculos en la base de datos<p>";
}?>


</table>
</body>
</html>