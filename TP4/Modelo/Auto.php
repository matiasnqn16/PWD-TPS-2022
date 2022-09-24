<?php
class Auto{ 

    private $patente,$marca,$modelo,$OBJduenio,$mensajeoperacion;

    public function __construct() {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->OBJduenio = new Persona();
        $this->mensajeoperacion = "";
    }

    /* cargar/setear */
    public function setear($patente,$marca,$modelo,$OBJduenio){
        $this->setpatente($patente);
        $this->setmarca($marca);
        $this->setmodelo($modelo);
        $this->setOBJduenio($OBJduenio);
    }

    /* Getters & Setters */
    public function getpatente(){
        return $this->patente;
    }
    public function setpatente($nPatente){
        $this->patente = $nPatente;
    }
    public function getmarca(){
        return $this->marca;
    }
    public function setmarca($nMarca){
        $this->marca = $nMarca;
    }
    public function getmodelo(){
        return $this->modelo;
    }
    public function setmodelo($nModelo){
        $this->modelo = $nModelo;
    }
    public function getOBJduenio(){
        return $this->OBJduenio;
    }
    public function setOBJduenio($nDni){
        $this->OBJduenio = $nDni;
    }
    public function getmensajeoperacion(){
        return $this->mensajeoperacion;
    }
    public function setmensajeoperacion($valor){
        $this->mensajeoperacion = $valor;
    }

    /* Metodos */

    public function Buscar($patente){
        $resp = false;
        $base= new BaseDatos();
        $sql="SELECT * FROM auto WHERE Patente=".$patente;
        if($base->Iniciar()){
            if($base->Ejecutar($sql)){
                if($row = $base->Registro()){
                    $OBJpersona = new Persona();
                    $OBJpersona->Buscar($row['DniDuenio']);
                    $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $OBJpersona);
                    $resp = true;
                }
            }else {
                $this->setmensajeoperacion("Tabla->buscar: ".$base->getError());
            }
        }else{
            $this->setmensajeoperacion("Tabla->buscar: ".$base->getError());
        }
        return $resp;
    }

    public function cargar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="SELECT * FROM auto WHERE Patente = ".$this->getpatente();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $OBJpersona = new Persona();
                    $OBJpersona->Buscar($row['DniDuenio']);
                    $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $OBJpersona);
                    
                }
            }
        } else {
            $this->setmensajeoperacion("Tabla->cargar: ".$base->getError());
        }
        return $resp;
    
        
    }

    public static function listar($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM auto ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new Auto();
                    /* $obj->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['DniDuenio']); */
                    $OBJpersona = new Persona();
                    $OBJpersona->Buscar($row['DniDuenio']);
                    $obj->setear($row['Patente'], $row['Marca'], $row['Modelo'], $OBJpersona);

                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            $this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
 
        return $arreglo;
    }
    
    public function insertar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="INSERT INTO auto(Patente,Marca,Modelo,DniDuenio)  VALUES('".$this->getpatente()."','".$this->getMarca()."','".$this->getModelo()."','".$this->getOBJduenio()->getnrodni()."');";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Tabla->insertar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->insertar: ".$base->getError());
        }
        return $resp;
    }
    
    public function modificar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="UPDATE auto SET Marca='".$this->getmarca()."',Modelo='".$this->getmodelo()."',DniDuenio='".$this->getOBJduenio()->getnrodni()."' WHERE Patente='".$this->getpatente()."'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
        }
        return $resp;
    }
    
    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="DELETE FROM auto WHERE Patente=".$this->getpatente();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("Tabla->eliminar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->eliminar: ".$base->getError());
        }
        return $resp;
    }
    


}
?>