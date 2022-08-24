<?php

$dir = "../control/temp/";
$pesaMenosDe2Mb = true;
$esArchivoAdmitido = false;
$tipoDeArchivo = $_FILES['miFile']['type'];
$nombreArchivo = $_FILES['miFile']['name'];

if ($_FILES['miFile']["error"] <= 0 ){
    echo "Nombre" . $_FILES['miFile']['name'] . "<br />"; 
    echo "Tipo: " . $_FILES['miFile']['type'] . "<br />"; 
    echo "Tamaño: " . ($_FILES['miFile']["size"] / 1024) . " kB<br />";
    /* si el archivo pesa mas de 2048kb el flag cambia a false */
    if( ($_FILES['miFile']["size"] / 1024) > 2048 ){
        $pesaMenosDe2Mb = false;
    } 
    if( $tipoDeArchivo == "application/pdf" || $tipoDeArchivo == "application/doc" ){
        $esArchivoAdmitido = true;
    }
    echo "Carpeta temporal: " . $_FILES['miFile']['tmp_name']." <br />";
    // Intentamos copiar el archivo al servidor.
    if($pesaMenosDe2Mb && $esArchivoAdmitido){
        if (!copy($_FILES['miFile']['tmp_name'], $dir.$_FILES['miFile']['name'])) {
            echo "ERROR: no se pudo cargar el archivo ";
        }else{
            echo "El archivo ".$_FILES['miFile']["name"]." se ha copiado con Éxito <br />";
            echo " <br /><br /><br /> <a href='$dir$nombreArchivo'> Ir a la direccion del archivo </a>   ";
        }
    }else{
        echo "El archivo no cumple con los requisitos <br />";
    }

}else{ 
    echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
}

?>