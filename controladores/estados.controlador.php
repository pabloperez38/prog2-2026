<?php

class EstadosControlador
{
     /*=============================================
MOSTRAR ESTADOS 
=============================================*/
    static public function ctrMostrarEstados()
    {
        $tabla = "estados";
        $respuesta = EstadosModelo::mdlMostrarEstados($tabla);
        return $respuesta;
    }
}
