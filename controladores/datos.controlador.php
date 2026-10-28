<?php

class DatosControlador
{
     /*=============================================
MOSTRAR DATOS
=============================================*/
    static public function ctrMostrarDatos($item, $valor)
    {
        $tabla = "datos";
        $respuesta = DatosModelo::mdlMostrarDatos($tabla, $item, $valor);
        return $respuesta;
    }
}
