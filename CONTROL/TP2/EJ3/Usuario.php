<?php

class Usuario {
   private $nombre;
   private $password; 

    public function __construct($nombre, $password) {
         $this->nombre = $nombre;
         $this->password = $password;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPassword() {
        return $this->password;
    }
    
    public function devolverUsuario() {
        return ["Nombre" => $this->getNombre(), "Contraseña" => $this->getPassword()];
    }
}




?>
