<?php
    
   

    $usuario1 = new Usuario("Tomas", "Tomas2025");
    $usuario2 = new Usuario("Ana", "Anita2025");

    $usuarios = [];
    $usuarios[] = $usuario1->devolverUsuario();
    $usuarios[] = $usuario2->devolverUsuario();
?>