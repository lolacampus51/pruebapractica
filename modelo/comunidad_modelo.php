<?php
// modelo/comunidad_modelo.php
require_once __DIR__.'/conexion.php'; // Ajusta la ruta según sea necesario

class Comunidad {
    private $pdo;

    public function __construct() {
        $conexion = new Conexion();
        $this->pdo = $conexion->getPdo();
    }

    public function guardar($datos) {
        // Limpiar los datos
        foreach($datos as $key => $value){
            $datos[$key] = $this->limpiar_datos($value);
        }

        // Verificar si el id_administrador existe en la tabla administradores
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM administradores WHERE id_administrador = :id_administrador");
        $stmt->execute(['id_administrador' => $datos['id_administrador']]);
        if ($stmt->fetchColumn() == 0) {
            // El id_administrador no existe, insertar un nuevo administrador
            $stmt = $this->pdo->prepare("INSERT INTO administradores (id_administrador, nombre) VALUES (:id_administrador, 'Administrador por defecto')");
            $stmt->execute(['id_administrador' => $datos['id_administrador']]);
        }

        // Insertar los datos en la tabla comunidades
        $stmt = $this->pdo->prepare("INSERT INTO comunidades (nombre, direccion, poblacion, id_administrador) VALUES (:nombre, :direccion, :poblacion, :id_administrador)");
        
        // Manejo de errores
        if ($stmt->execute($datos)) {
            return true;
        } else {
            // Imprimir errores
            print_r($stmt->errorInfo());
            return false;
        }
    }

    private function limpiar_datos($data) {
        $data = trim($data);
        $data  = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
?>
