<?php

class Archivo {
    private $nombre;
    private $tipo;
    private $tamano;
    private $ruta;

    public function __construct($nombre, $tipo, $tamano, $ruta) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->tamano = $tamano;
        $this->ruta = $ruta;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getTamano() {
        return $this->tamano;
    }

    public function getRuta() {
        return $this->ruta;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setTamano($tamano) {
        $this->tamano = $tamano;
    }

    public function setRuta($ruta) {
        $this->ruta = $ruta;
    }

    public function validarTamano() {
        return $this->tamano <= pow(10, 6);
    }





}


?>