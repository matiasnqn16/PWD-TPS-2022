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
<?php include_once "Estructura/header.php"; ?>

<!-- Crear una pagina php “VerAutos.php”, en ella usando la capa de control correspondiente
mostrar todos los datos de los autos que se encuentran cargados, de los dueños mostrar nombre y apellido.
En caso de que no se encuentre ningún auto cargado en la base mostrar un mensaje indicando que no hay
autos cargados.
 -->
<div class="container">
    <div class="row">
        <div class="mx-auto mt-3">

            <h3>Autos</h3>
            
            <?php if ( count($listaAutos)>0){?>
                <table class="table caption-top table-dark">
                    <caption> <h3>Vehiculos:</h3> </caption>
                    <tr class="table-active">
                    <td><b>Patente<b></td>
                    <td><b>Marca<b></td>
                    <td><b>Modelo<b></td>
                    <td><b>Dni Asociado<b></td>
                    <td><b>Nombre</b></td>
                    <td><b>Apellido</b></td>
                    
                </tr>
            <?php	
            
                foreach ($listaAutos as $objAuto) { 
            
                    echo '<tr><td>'.$objAuto->getpatente().'</td>';
                    echo '<td>'.$objAuto->getmarca().'</td>';
                    echo '<td>'.$objAuto->getmodelo().'</td>';
                    echo '<td>'.$objAuto->getOBJduenio()->getnrodni().'</td>';
                    echo '<td>'.$objAuto->getOBJduenio()->getnom().'</td>';
                    echo '<td>'.$objAuto->getOBJduenio()->getap().'</td>';
                }
            ?>
            <?php }else {
                echo "<p class='alert alert-info' >No se encontraron vehiculos en la base de datos</p>";
            }?>
            
            
            </table>




        </div>
    </div>
</div>
<?php include_once "Estructura/footer.php"; ?>

</body>
</html>