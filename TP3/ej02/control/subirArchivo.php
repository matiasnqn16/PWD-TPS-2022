<?php

/* Declarando variables */
$dir = "../control/temp/";
$pesaMenosDe2Mb = true;
$esArchivoAdmitido = false;
$tipoDeArchivo = $_FILES['miFile']['type'];
$nombreArchivo = $_FILES['miFile']['name'];    
$carpetaTemp =   $_FILES['miFile']['tmp_name'];

if ($_FILES['miFile']["error"] <= 0 ){
    /* si el archivo pesa mas de 2048kb el flag cambia a false */
    if( ($_FILES['miFile']["size"] / 1024) > 2048 ){
        $pesaMenosDe2Mb = false;
    } 
    /* se debe saber si el archivo es texto plano */
    if( $tipoDeArchivo == "text/plain"){
        $esArchivoAdmitido = true;
    }   
    /* si se cumplen los 2 flags */
    if($pesaMenosDe2Mb && $esArchivoAdmitido){
        // Intentamos copiar el archivo al servidor.
        if (!copy($_FILES['miFile']['tmp_name'], $dir.$_FILES['miFile']['name'])) {
            echo "ERROR: no se pudo cargar el archivo ";
        }else{
            $file = fopen("$dir$nombreArchivo", "r") or exit("Imposible de abrir archivo!");
            //Output a line of the file until the end is reached
            while(!feof($file))
            {
            $texto = fgets($file);
            }
            fclose($file);

            echo ' <br /> <textarea name="lectura" id="lectura" cols="30" rows="10"> ' . $texto . ' </textarea>
            ' ;
        }
    }else{
        echo "El archivo no cumple con los requisitos <br />";
    }

}else{ 
    echo "ERROR: no se ha recibido ningun archivo.";
}

?>