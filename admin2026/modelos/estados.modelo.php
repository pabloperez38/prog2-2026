<?php
require_once 'conexion.php';
class EstadosModelo
{
    /*=============================================
MOSTRAR ESTADOS
=============================================*/
    static public function mdlMostrarEstados($tabla)
    {
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
