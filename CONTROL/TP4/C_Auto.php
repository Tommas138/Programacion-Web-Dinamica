<?php

require_once('../../MODELO/TP4/Auto.php');
require_once 'C_Persona.php';

Class C_Auto {

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return auto
     */
    private function cargarObjeto($param) {
        $obj = null;
        if (array_key_exists('patente',$param)) {
            $objDuenio = new C_Persona();
            
            $personaEncontrada = $objDuenio->buscar(['nroDni'=>$param['dniDuenio']]);
            
            if (!empty($personaEncontrada)) {
                $objPrueba = $personaEncontrada[0];
                
                $obj = new Auto();
                $obj->cargar($param['patente'],
                $param['marca'],
                $param['modelo'],
                $objPrueba); 
            } 
        }
        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de
     * las variables instancias del objeto que son claves
     * @param array $param
     * @return auto
     */

    private function cargarObjetoConClave($param) {
        $objDuenio = new C_Persona();
        $personaEncontrada = $objDuenio->buscar(['nroDni'=>$param['dniDuenio']]);
        $objPrueba = $personaEncontrada[0];
        $obj = null;
        if (isset($param['patente'])) {
            $obj = new Auto();
            $obj->cargar($param['patente'], $param["marca"], $param["modelo"],$objPrueba);
        }
        return $obj;
    }

    private function seteadosCamposClaves($param) {
        $resultado = false;
        if (isset($param)) {
            $resultado = true;
        }
        return $resultado;
    }

    /**
     * Inserta un objeto
     * @param array $param
     */
    public function alta($param) {
        $resultado = false;
        if ($this->seteadosCamposClaves($param)) {
            $objAuto = $this->cargarObjetoConClave($param);
            if ($objAuto != null and $objAuto->insertar()) {
                $resultado = true;
            }
        }
        return $resultado;
    }

    public function baja($param)  {
        $resultado = false;
        if ($this->seteadosCamposClaves($param)) {
            $objAuto = $this->cargarObjetoConClave($param);
            if ($objAuto != null && $objAuto->eliminar()) {
                $resultado = true;
            }
        }
        return $resultado;
    }

    public function modificar($param) {
        $auto = new Auto();
        $auto->setPatente($param['patente']);
        $auto->setMarca($param['marca']);
        $auto->setModelo($param['modelo']);
        $duenio = new Persona();
        $duenio->setNroDni($param['dniDuenio']);
        $auto->setObjDuenio($duenio);
        return $auto->modificar();
    }

    //Busco un auto por condiciones
    public function buscar($param) {
        $where = " true ";
        if ($param!= null) {
            if (isset($param['patente'])) {
                $where .= " and patente = '" . $param['patente'] . "'";
            }
            if (isset($param['marca'])) {
                $where .= " and marca = '" . $param['marca'] . "'";
            }
            if (isset($param['modelo'])) {
                $where .= " and modelo = '" . $param['modelo'] . "'";
            }
            if (isset($param['dniDuenio'])) {
                $where .= " and dniDuenio = '" . $param['dniDuenio'] . "'";
            }
        }
        $objAuto = new Auto();
        $arreglo = $objAuto->listar($where);
        return $arreglo;
    }

    public function existePatente($patente){
        $autosObj=$this->buscar(null);
        $patentes=[];
        foreach($autosObj as $auto){
            array_push($patentes, $auto->getPatente());
        }
        $existe=false;
        $i=0;
        while(!$existe && $i<count($patentes)){
            if($patente==$patentes[$i]){
                $existe=true;
            }
            $i++;
        }
        return $existe;
    }
}