<?php
require_once('conector/BaseDatos.php');
require_once('Auto.php');

Class Persona {
    private $nroDni;
    private $nombre;
    private $apellido;
    private $fechaNac;
    private $telefono;
    private $domicilio;
    private $mensaje;

    public function __construct() {
        $this->nroDni = "";
        $this->nombre = "";
        $this->apellido = "";
        $this->fechaNac = "";
        $this->telefono = "";
        $this->domicilio = "";
        $this->mensaje = "";
    }

    public function cargar($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio) {
        $this->setNroDni($nroDni);
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setFechaNac($fechaNac);
        $this->setTelefono($telefono);
        $this->setDomicilio($domicilio);
    }
    
    public function getNroDni() {
        return $this->nroDni;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellido() {
        return $this->apellido;
    }
    public function getFechaNac() {
        return $this->fechaNac;
    }
    public function getTelefono() {
        return $this->telefono;
    }
    public function getDomicilio() {
        return $this->domicilio;
    }
    public function getMensaje() {
        return $this->mensaje;
    }

    public function setNroDni($value) {
        $this->nroDni = $value;
    }
    public function setNombre($value) {
        $this->nombre = $value;
    }
    public function setApellido($value) {
        $this->apellido = $value;
    }
    public function setFechaNac($value) {
        $this->fechaNac = $value;
    }
    public function setTelefono($value) {
        $this->telefono = $value;
    }
    public function setDomicilio($value) {
        $this->domicilio = $value;
    }
    public function setMensaje($value) {
        $this->mensaje = $value;
    }

    public function __toString() {
        return 
        "DNI: " . $this->getNroDni() . "\n" . 
         "Apellido: " . $this->getApellido() . "\n" . 
        "Nombre: " . $this->getNombre() . "\n" . 
        "Fecha nacimiento: " . $this->getFechaNac() . "\n" . 
        "Telefono: " . $this->getTelefono() . "\n" . 
        "Domicilio; " . $this->getDomicilio() . "\n";
    }


    public function buscar($dni) {
        $base = new BaseDatos();
        //consulta
        $sql = "SELECT * FROM persona WHERE nroDni = " . $dni;
        $resultado = false;
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                if ($row2 = $base->Registro()) {
                    $this->setNroDni($row2['nroDni']);
                    $this->setApellido($row2['apellido']);
                    $this->setNombre($row2['nombre']);
                    $this->setFechaNac($row2['fechaNac']);
                    $this->setTelefono($row2['telefono']);
                    $this->setDomicilio($row2['domicilio']);
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
        //consulta
        $sql = "SELECT * FROM persona ";
        if ($condicion != "") {
            $sql .= " WHERE " . $condicion;
        }
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $array = array();
                while ($row2 = $base->Registro()) {
                    $persona = new Persona();
                    $persona->buscar($row2['nroDni']);
                    $array[] = $persona;
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
        //consulta
        $nroDni = $this->getNroDni();
        $apellido = $this->getApellido();
        $nombre = $this->getNombre();
        $telefono = $this->getTelefono();
        $domicilio = $this->getDomicilio();
        $fechaNac = $this->getFechaNac();
        $sql = "INSERT INTO persona (nroDni, apellido, nombre, fechaNac, telefono, domicilio) VALUES ( '{$nroDni}', '{$apellido}', '{$nombre}', '{$fechaNac}',
         '{$telefono}', '{$domicilio}')";
        
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
        $resultado = false;
        $base = new BaseDatos();
        //consulta
        $nroDni = $this->getNroDni();
        $nombre = $this->getNombre();
        $apellido = $this->getApellido();
        $telefono = $this->getTelefono();
        $domicilio = $this->getDomicilio();
        $fechaNac = $this->getFechaNac();
        $sql = "UPDATE persona SET apellido = '{$apellido}', nombre = '{$nombre}', fechaNac = '{$fechaNac}',  telefono = '{$telefono}',
        domicilio = '{$domicilio}' WHERE nroDni = '{$nroDni}'";

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
        $sql = "DELETE FROM persona WHERE nroDni = " . $this->getNroDni();

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