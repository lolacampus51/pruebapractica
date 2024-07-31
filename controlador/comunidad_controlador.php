<?php
// controlador/comunidad_controlador.php
session_start(); // Iniciar la sesión

require_once __DIR__ .'/../config.php';
require_once __DIR__ .'/../modelo/comunidad_modelo.php';

// alta DATOS TABLA COMUNIDAD
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
            print_r($datos); // Imprimir datos para depuración

            $comunidad = new Comunidad();
            if ($comunidad->guardar($datos)){
                $_SESSION['status'] = 'comunidad_creada';
            } else {
                $_SESSION['status'] = 'error_creacion';
            }
            header('Location: ../vista/alta_comunidad.php');
            exit();
        }
    }
}
?>
