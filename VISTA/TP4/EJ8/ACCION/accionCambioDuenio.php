<?php
    require_once ('../../../../CONTROL/TP4/C_Auto.php');
    require_once ('../../../../CONTROL/TP4/C_Persona.php');
    require_once ('../../../estructura/Utilidades/funciones.php');
    require_once ('../../../estructura/Utilidades/links.php');
    
    $data = data_submitted();
    $auto = new C_Auto();
    $exito = false;

    $arrAuto = $auto->buscar($data);
    if(!empty($arrAuto)){
        $arrPersona = (new C_Persona())->buscar($data);
        if(!empty($arrPersona)){
            if($arrAuto[0]->getObjDuenio()->getNroDni() != $arrPersona[0]->getNroDni()){
                $autoDuenioNuevo = [
                    'patente'=> ($arrAuto[0]->getPatente()),
                    'marca'=> ($arrAuto[0]->getMarca()),
                    'modelo'=> ($arrAuto[0]->getModelo()),
                    'dniDuenio'=> ($arrPersona[0]->getNroDni())
                ];
                if($auto->modificar($autoDuenioNuevo)){
                    echo "
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <title>Cambio de Dueño</title>
                    </head>
                    <body class='d-flex justify-content-center align-items-center'>
                        <div class='w-25 h-25 card border-success border-rounded text-center text-success col-12'>
                            <div class='d-flex flex-column align-items-center justify-content-center p-3'>
                                <h1>Dueño cambiado exitosamente</h1>
                                <a class='btn btn-outline-success w-50 mt-4' href='../CambioDuenio.php'>Volver a la lista de autos</a>
                            </div>
                        </div>
                    </body>
                    </html>
                    ";
                } else {
                     echo "
                    <!DOCTYPE html>
                    <html>
                    <head><title>Cambio de Dueño</title></head>
                    <body class='d-flex justify-content-center align-items-center'>
                        <div class='w-25 h-25 card border-danger border-rounded text-center text-danger col-12'>
                            <div class='d-flex flex-column align-items-center justify-content-center p-3'>
                                <h1>No se pudo cambiar de dueño</h1>
                                <a class='btn btn-outline-danger w-50 mt-4' href='../CambioDuenio.php'>Volver a la lista de autos</a>
                            </div>
                        </div>
                    </body>
                    </html>
                    ";
                }
            } else {
                echo "
                    <!DOCTYPE html>
                    <html>
                    <head><title>Cambio de Dueño</title></head>
                    <body class='d-flex justify-content-center align-items-center'>
                        <div class='w-25 h-25 card border-danger border-rounded text-center text-danger col-12'>
                            <div class='d-flex flex-column align-items-center justify-content-center p-3'>
                                <h1>Ya es dueño de la patente ingresada</h1>
                                <a class='btn btn-outline-danger w-50 mt-4' class='btn btn-danger' href='../CambioDuenio.php'>Volver a la lista de autos</a>
                            </div>
                        </div>
                    </body>
                    </html>
                    ";
            }
        } else {
            echo "
                    <!DOCTYPE html>
                    <html>
                    <head><title>Cambio de Dueño</title></head>
                    <body class='d-flex justify-content-center align-items-center'>
                        <div class='w-25 h-25 card border-danger border-rounded text-center text-danger col-12'>
                            <div class='d-flex flex-column align-items-center justify-content-center p-3'>
                                <h1>Debe ingresar un DNI existente</h1>
                                <a class='btn btn-outline-danger w-50 mt-4' href='../CambioDuenio.php'>Volver a la lista de autos</a>
                            </div>
                        </div>
                    </body>
                    </html>
                    ";
        }
    } else {
        echo "
                    <!DOCTYPE html>
                    <html>
                    <head><title>Cambio de Dueño</title></head>
                     <body class='d-flex justify-content-center align-items-center'>
                        <div class='w-auto h-auto card border-danger border-rounded text-center text-danger col-12'>
                            <div class='d-flex flex-column align-items-center justify-content-center p-3'>
                                <h1>Debe ingresar una patente de un auto existente</h1>
                                <a class='btn btn-outline-danger w-50 mt-4' href='../CambioDuenio.php'>Volver a la lista de autos</a>
                            </div>
                        </div>
                    </body>
                    </html>
                    ";
    }
?>