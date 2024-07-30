<?php
//controlador se encarga de gestionarla lógica del negocio y la cumunicación entre modelo y la vista
//controlador/comunidad_controlador.php

require_once __DIR__ .'/../config.php';
require_once MODEL_PATH .'comunidad_modelo.php';



//alta DATOS TABLA COMUNIDAD
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST['accion'])){ 
    $accion = $_POST['accion']; 
    if ($accion == "procesar_alta"){
        $datos = [
            'nombre' => $_POST['nombre'],
            'direccion' => $_POST['direccion'],
            'poblacion' => $_POST['poblacion'],
            'id_administrador' => $_POST['id_administrador'], 
        ];
        if (guardar_comunidad($datos)){
            $_SESSION['status'] = 'comunidad_creado';
        } else {
            $_SESSION['status'] = 'error_creacion';
        }
        header('Location: ../vista/alta_comunidad.php');
        exit();
    }
}

}
?>
