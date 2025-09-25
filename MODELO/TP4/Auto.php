<?php

require_once('conector/BaseDatos.php');
require_once('Persona.php');

Class Auto {
    private $patente;
    private $marca;
    private $modelo;
    private $objDuenio;
    private $mensaje;

    public function __construct() {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->objDuenio = "";
        $this->mensaje = "";
    }

    public function cargar($patente, $marca, $modelo, $objDuenio) {
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setObjDuenio($objDuenio);
    }

    public function getPatente() {
        return $this->patente;
    }
    public function getMarca() {
        return $this->marca;
    }
    public function getModelo() {
        return $this->modelo;
    }
    public function getObjDuenio() {
        return $this->objDuenio;
    }
    public function getMensaje() {
        return $this->mensaje;
    }

    public function setPatente($value) {
        $this->patente = $value;
    }
    public function setMarca($value) {
        $this->marca = $value;
    }
    public function setModelo($value) {
        $this->modelo = $value;
    }
    public function setObjDuenio($value) {
        $this->objDuenio = $value;
    }
    public function setMensaje($value) {
        $this->mensaje = $value;
    }

    public function __toString() {
        return
        "Patente: " . $this->getPatente() . "\n" . 
        "Marca: " . $this->getMarca() . "\n" . 
        "Modelo: " . $this->getModelo() . "\n" . 
        "Duenio: " . $this->getObjDuenio()->getNroDni() . "\n";
    }   

    public function buscar($patente) {
        $base = new BaseDatos();
        $resultado = false;
        $sql = "SELECT * FROM auto WHERE patente = '" . $patente. "'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                if($row2 = $base->Registro()) {
                    $this->setPatente($row2['patente']);
                    $this->setMarca($row2['marca']);
                    $this->setModelo($row2['modelo']);
                    //Creo objeto dueño para buscarlo con dni y setearlo
                    $duenio = new Persona();
                    $duenio->buscar($row2['dniDuenio']);
                    $this->setObjDuenio($duenio);
                    $resultado = true;
                }
            } else {
                $this->setMensaje($base->getError());
            }
        } else {
            $this->setMensaje($base->getError());
        }
        return $resultado;
    }

    public function listar($condicion = "") {
        $array = null;
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto ";
        if ($condicion != "") {
            $sql .=  " WHERE " . $condicion;
        }
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $array = array();
                while ($row2 = $base->Registro()) {
                    $objAuto = new Auto();
                    $objAuto->buscar($row2['patente']);
                    $array[] = $objAuto;
                }
            } else {
                $this->setMensaje($base->getError());
            }
        } else {
            $this->setMensaje($base->getError());
        }
        return $array;
    }

    public function insertar() {
        $base = new BaseDatos();
        $resultado = false;
        //Asigno datos a variables para insertar a la base de datos
        $patente = $this->getPatente();
        $marca = $this->getMarca();
        $modelo = $this->getModelo();
        $duenio = $this->getObjDuenio();
        $dniDuenio = $duenio->getNroDni();

        //Creo consulta
        $sql = "INSERT INTO auto (patente, marca, modelo, dniDuenio) VALUES ('{$patente}', '{$marca}', '{$modelo}', '{$dniDuenio}')";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resultado = true;
            } else {
                $this->setMensaje($base->getError());
            }
         } else {
            $this->setMensaje($base->getError());
         }
         return $resultado;
    }

    public function modificar() {
        $base = new BaseDatos();
        $resultado = false;
        $patente = $this->getPatente();
        $marca = $this->getMarca();
        $modelo = $this->getModelo();
        $duenio = $this->getObjDuenio();
        $dniDuenio = $duenio->getNroDni();
        //Consulta
        $sql = "UPDATE auto SET marca = '{$marca}', modelo = '{$modelo}', dniDuenio = '{$dniDuenio}' WHERE patente = '{$patente}'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resultado = true;
            } else {
                $this->setMensaje($base->getError());
            }
        } else {
            $this->setMensaje($base->getError());
        }
        return $resultado;
    }

    public function eliminar() {
        $base = new BaseDatos();
        $resultado = false;
        //consulta
        $sql = "DELETE FROM auto WHERE patente = '{$this->getPatente()}'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resultado = true;
            } else {
                $this->setMensaje($base->getError());
            }
        } else {
            $this->setMensaje($base->getError());
        }
        return $resultado;
    }

}