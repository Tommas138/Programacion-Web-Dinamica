<?php

class Calculadora {

    private $num1;
    private $num2;
    private $operacion;
    private $resultado;
    private $error;

    public function __construct($num1, $num2, $operacion) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operacion = $operacion;
        $this->resultado = null;
        $this->error = null;
    }

    public function getResultado() {
        return $this->resultado;
    }

    public function getError() {
        return $this->error;
    }

    public function setError($error) {
        $this->error = $error;
    }

    public function suma() {
        return $this->num1 + $this->num2;
    }

    public function resta() {
        return $this->num1 - $this->num2;
    }

    public function multiplicacion() {
        return $this->num1 * $this->num2;
    }

    public function getOperacion() {
        return $this->operacion;
    }

    public function division() {
        if ($this->num2 != 0) {
            return $this->num1 / $this->num2;
        } else {
            $this->setError("división por cero no es permitida");
            return null;
        }
    }

    public function calcular() {
        switch ($this->getOperacion()) {
            case 'suma':
                $this->resultado = $this->suma();
                break;
            case 'resta':
                $this->resultado = $this->resta();
                break;
            case 'multiplicacion':
                $this->resultado = $this->multiplicacion();
                break;
            case 'division':
                $this->resultado = $this->division();
                break;
            default:
                $this->setError("Operación no válida.");
                break;
        }
        return $this->resultado;
    }
}
