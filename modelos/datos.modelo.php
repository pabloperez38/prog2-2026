<?php
require_once 'conexion.php';
class DatosModelo
{
    /*=============================================
MOSTRAR DATOS
=============================================*/
    static public function mdlMostrarDatos($tabla, $item, $valor)
    {
        if ($item != null) {
            try {
                //Trae un sólo dato
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
                //enlace de parametros
                $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                return "Error: " . $e->getMessage();
            }
        } else {
            try {
                //Trae todos los datos de la BD
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                "Error: " . $e->getMessage();
            }
        }
    }

    //Agregar datos

    //Editar datos

    //Eliminar datos
}
