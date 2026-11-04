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

    /*=============================================
INSERTAR DATOS
=============================================*/

    public function ctrAgregarDatos()
    {        
        if (isset($_POST["nombre"])) {
          
            $tabla = "datos"; //nombre de la tabla

            //Array asociativo con los datos a insertar
            $datos = array(
                "nombre" => $_POST["nombre"],
                "estado" => $_POST["estado"]
            );            
      
            //podemos volver a la página de datos
            $url = PlantillaControlador::url() . "datos";
            $respuesta = DatosModelo::mdlAgregarDatos($tabla, $datos);
          
            if ($respuesta == "ok") {
    echo '<script>
        fncSweetAlert(
            "success",
            "El dato se agregó correctamente",
            ' . json_encode($url, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT) . '
        );
    </script>';
}
                            }
                        }
}
