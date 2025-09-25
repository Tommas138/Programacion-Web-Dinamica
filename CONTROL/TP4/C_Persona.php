<?php

require_once('../../MODELO/TP4/Persona.php');

Class C_Persona {

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return persona
     */
    private function cargarObjeto($param) {
        $obj = null;
        if (array_key_exists('nroDni', $param)) {
            $obj = New Persona();
            $obj->cargar($param['nroDni'],
            $param['apellido'],
            $param['nombre'],
            $param['fechaNac'],
            $param['telefono'],
            $param['domicilio']);
        }
        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de
     * las variables instancias del objeto que son claves
     * @param array $param
     * @return persona
     */

    private function cargarObjetoConClave($param) {
        $obj = null;
        if (isset($param['nroDni'])) {
            $obj = new Persona();
            $obj->cargar($param['nroDni'], null, null, null, null, null);
        }
        return $obj;
    }

    private function seteadosCamposClaves($param) {
        $resultado = false;
        if (isset($param['nroDni'])) {
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
            $objPersona = $this->cargarObjeto($param);
            if ($objPersona != null && $objPersona->insertar()) {
                $resultado = true;
            }
        }
        return $resultado;
    }

    public function baja($param)  {
        $resultado = false;
        if ($this->seteadosCamposClaves($param)) {
            $objPersona = $this->cargarObjetoConClave($param);
            if ($objPersona != null && $objPersona->eliminar()) {
                $resultado = true;
            }
        }
        return $resultado;
    }

    public function modificar($param) {
        $resultado = false;
        if ($this->seteadosCamposClaves($param)) {
            $objPersona = $this->buscar($param);
            $objPersona[0] = $this->cargarObjeto($param);
            if ($objPersona != null && $objPersona[0]->modificar()) {
                $resultado = true;
            }
        }
        return $resultado;
    }

    //Busco una persona por condiciones
    public function buscar($param) {
        $where = " true ";
        if ($param!= null) {
            if (isset($param['nroDni'])) {
                $where .= " and nroDni = '" . $param['nroDni'] . "'";
            }
            if (isset($param['apellido'])) {
                $where .= " and apellido = '" . $param['apellido'] . "'";
            }
            if (isset($param['nombre'])) {
                $where .= " and nombre = '" . $param['nombre'] . "'";
            }
            if (isset($param['fechaNac'])) {
                $where .= " and fechaNac = '" . $param['fechaNac'] . "'";
            }
            if (isset($param['telefono'])) {
                $where .= " and telefono = '" . $param['telefono'] . "'";
            }
            if (isset($param['domicilio'])) {
                $where .= " and domicilio = '" . $param['domicilio'] . "'";
            }
        }
            $objPersona = new Persona();
            $arreglo = $objPersona->listar($where);
            return $arreglo;
    }

    public function existeDni($dni){
        $personasObj=$this->buscar(null);
        $dniPersonas=[];
        foreach($personasObj as $persona){
            array_push($dniPersonas, $persona->getNroDni());
        }
        $existe=false;
        $i=0;
        while(!$existe && $i<count($dniPersonas)){
            if($dni==$dniPersonas[$i]){
                $existe=true;
            }
            $i++;
        }
        return $existe;
    }
}