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


    static public function mdlAgregarDatos($tabla, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, estado) VALUES (:nombre, :estado)");
            // UN ENLACE DE PARAMETRO POR CADA DATO, TENER EN CUENTA EL TIPO DE DATO STR O INT
            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_INT);
            if ($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }
    //Editar datos

    //Eliminar datos
}
