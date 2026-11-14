<?php

require_once "conexion.php";

class UsuariosModelo
{

    /*=============================================
	MOSTRAR USUARIOS
	=============================================*/

    static public function mdlMostrarUsuarios($item, $valor)
    {
        if ($item != null) {

            try {
                $stmt = Conexion::conectar()->prepare("SELECT * FROM usuarios WHERE $item = :$item");
                $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
                $stmt->execute();

                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                return "Error: " . $e->getMessage();
            }
        } else {

            try {
                $stmt = Conexion::conectar()->prepare("SELECT * FROM usuarios");
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                "Error: " . $e->getMessage();
            }
        }
    }
}