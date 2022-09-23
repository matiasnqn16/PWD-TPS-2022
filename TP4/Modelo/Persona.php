<?php
class Persona{

private $nrodni, $ap, $nom, $fnac, $tel, $domi, $mensajeoperacion;


public function __construct(){
    $this->nrodni= "";
    $this->ap = "";
    $this->nom = "";
    $this->fnac = "";
    $this->tel = "";
    $this->domi = "";
    $this->mensajeoperacion = "";
}

public function setear($nrodni,$ap,$nom,$fnac,$tel,$domi){	
    $this->setnrodni($nrodni);
    $this->setap($ap);
    $this->setnom($nom);
    $this->setfnac($fnac);
    $this->settel($tel);
    $this->setdomi($domi);
}

    /* Getters & Setters */
    public function setnrodni($nDni){
        $this->nrodni=$nDni;
    }
    public function getnrodni(){
        return $this->nrodni;
    }   
    public function setap($nAp){
        $this->ap=$nAp;
    }
    public function getap(){
        return $this->ap;
    }
    public function setnom($nNom){
        $this->nom=$nNom;
    }
    public function getnom(){
        return $this->nom;
    }
    public function setfnac($nFnac){
        $this->fnac=$nFnac;
    }
    public function getfnac(){
        return $this->fnac;
    }
    public function settel($nTel){
        $this->tel=$nTel;
    }
    public function gettel(){
        return $this->tel;
    }
    public function setdomi($nDomi){
        $this->domi=$nDomi;
    }
    public function getdomi(){
	    return $this->domi;
	}
    public function getmensajeoperacion(){
        return $this->mensajeoperacion; 
    }
    public function setmensajeoperacion($valor){
        $this->mensajeoperacion = $valor;
    }
    
    /* Metodos */
    public function Buscar($dni){
        $resp = false;
        $base= new BaseDatos();
        $sql="SELECT * FROM persona WHERE NroDni=".$dni;
        if($base->Iniciar()){
            if($base->Ejecutar($sql)){
                if($row = $base->Registro()){
                    $this->setear($row['NroDni'], $row['Apellido'],$row['Nombre'],$row['fechaNac'],$row['Telefono'],$row['Domicilio']);
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
        $sql="SELECT * FROM persona WHERE NroDni = ".$this->getnrodni();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $this->setear($row['NroDni'], $row['Apellido'],$row['Nombre'],$row['fechaNac'],$row['Telefono'],$row['Domicilio']);                       
                }
            }
        } else {
            $this->setmensajeoperacion("persona->cargar: ".$base->getError());
        }
        return $resp;
        
        
    }
    
    public static function listar($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM persona ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new Persona();
                    $obj->setear($row['NroDni'], $row['Apellido'],$row['Nombre'],$row['fechaNac'],$row['Telefono'],$row['Domicilio']);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            $this->setmensajeoperacion("persona->listar: ".$base->getError());
        }
    
        return $arreglo;
    }
    
    public function insertar(){
        $resp = false;
        $base=new BaseDatos();

        $sql="INSERT INTO persona(NroDni,Apellido,Nombre,fechaNac,Telefono,Domicilio) VALUES ('".$this->getnrodni()."','".$this->getap()."','".$this->getnom()."','".$this->getfnac()."','".$this->gettel()."','".$this->getdomi()."')";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("persona->insertar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("persona->insertar: ".$base->getError());
        }
        return $resp;
    }
    
    public function modificar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="UPDATE persona SET Apellido='".$this->getap()."',Nombre='".$this->getnom()."',fechaNac='".$this->getfnac()."',Telefono='". $this->gettel()."',Domicilio='".$this->getdomi()."'WHERE NroDni=".$this->getnrodni();

        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("persona->modificar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("persona->modificar: ".$base->getError());
        }
        return $resp;
    }
    
    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="DELETE FROM persona WHERE nrodni=".$this->getnrodni();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("persona->eliminar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("persona->eliminar: ".$base->getError());
        }
        return $resp;
    }

    public function __toString(){
        return "nombre: ".$this->getnom()."\tapellido: ". $this->getap()."\t domicilio: ". $this->getdomi()."\tTelefono: ". $this->gettel()."\tfecha Naciniemto: ". $this->getfnac()."\tDNI: ". $this->getnrodni();
    }
    
}


?>