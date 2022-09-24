<?php
class CtrlAuto{ 

  

    /** 
     *  cargar Objeto 
     * @param array $param
     * @return Auto
    */
    
    private function cargarObjeto($param){
        $obj = null;
           
        if( array_key_exists('Patente',$param) and array_key_exists('Marca',$param)and array_key_exists('Modelo',$param)and array_key_exists('OBJduenio',$param)){
            $obj = new Auto();
            $obj->setear($param['Patente'], $param['Marca'],$param['Modelo'],$param['OBJduenio']);
        }
        return $obj;
    }
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Auto
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['Patente']) ){
            $obj = new Auto();
            $obj->setear($param['Patente'], null, null, null);
        }
        return $obj;
    }

    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['Patente']))
            $resp = true;
        return $resp;
    }

    /**
     * 
     * @param array $param
     * @return boolean
     */
    public function alta($param){
        $resp = false;
        $elObjtTabla = $this->cargarObjeto($param);
        if ($elObjtTabla!=null and $elObjtTabla->insertar()){
            $resp = true;
        }
        return $resp;
    }
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtPersona = $this->cargarObjetoConClave($param);
            if ($elObjtPersona!=null and $elObjtPersona->eliminar()){
                $resp = true;
            }
        }
        
        return $resp;
    }
    
    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjeto($param);
            if($elObjtTabla!=null and $elObjtTabla->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }


    /**
     * permite buscar un objeto
     * @param array $param
     * @return array
     */
    public function buscar($param){
        $where = " true ";
        if ($param<>NULL){
            if  (isset($param['Patente']))
                $where.=" and Patente ='".$param['Patente']."'";
            if  (isset($param['DniDuenio']))
                 $where.=" and DniDuenio =".$param['DniDuenio'];
        }
        $arreglo = Auto::listar($where);  
        return $arreglo;
        
    }
    /**
     * no soy una funcion, soy un monstruo
     * @param array $param
     * @return persona
     */

    public function buscarPorDni($dni){
        $obj = Auto::listar('DniDuenio='.$dni);
        return $obj;
    }

    public function existe($lista,$patente){
        $flag = false;
        foreach($lista as $auto){
            if($auto->getpatente() == $patente['Patente']){
                $flag = true;
            }
        }
        return $flag;
    }

}
?>