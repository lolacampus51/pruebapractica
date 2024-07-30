<?php

//Modelo/comunidad_modelo.php

require_once __DIR__ .'/../config.php';
// Función para obtener las comunidades

//Dar de alta los datos de  la tabla Comunidad
function guardar_comunidad($datos){

    //Limpiar los datos
    foreach($datos as $key => $value){
        $datos[$key] = limpiar_datos($value);
    }
    $pdo = conectarBD();

    //Verificar si el nombre de la Comunidad ya existe
    //if(nombre_existe($datos['c'])){
   //     return false; //Cliente ya existe
   // }
    $stmt = $pdo->prepare("INSERT INTO comunidades (nombre, direccion, poblacion, id_administrador) VALUES (:nombre, :direccion, :poblacion, :id_administrador)");
    return $stmt->execute($datos);


//limpiar los datos
function limpiar_datos($data){
    $data = trim($data);
    $data  = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }
}
 ?>
?>