<?php

class Usuario {
    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;
    private $nivelEstudio;
    private $sexo;
    private $deportes;

    public function __construct($nombre, $apellido, $edad, $direccion, $nivelEstudio, $sexo, $deportes) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->direccion = $direccion;
        $this->nivelEstudio = $nivelEstudio;
        $this->sexo = $sexo;
        $this->deportes = $deportes;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getNivelEstudio() {
        return $this->nivelEstudio;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getDeportes() {
        return $this->deportes;
    }

    public function validadorEdad() {
        return $this->edad >= 0 && $this->edad <= 120;
    }
}