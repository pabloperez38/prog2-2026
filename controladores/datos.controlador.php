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

    //Editar datos

    /*=============================================
EDITAR DATOS
=============================================*/
    public function ctrEditarDatos()
    {

        if (isset($_POST["nombre"]) && isset($_POST["id_dato"])) {

            $tabla = "datos"; //nombre de la tabla
            $datos = array(
                "id_dato" => $_POST["id_dato"],
                "nombre" => $_POST["nombre"],
                "estado" => $_POST["estado"]
            );

            $respuesta = DatosModelo::mdlEditarDatos($tabla, $datos);
            $url = PlantillaControlador::url() . "datos";
            if ($respuesta == "ok") {
                echo '<script>
                    fncSweetAlert(
                        "success",
                        "El dato se editó correctamente",
                        ' . json_encode($url, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT) . '
                    );
                </script>';
            }
        }
    }

    static public function ctrEliminarDato(){
        if (isset($_GET["idDatoEliminar"]) && ($_GET["idDatoEliminar"] != "")) {

            $tabla = "datos";
            $id_dato = $_GET["idDatoEliminar"];
            $url = PlantillaControlador::url() . "datos";
            $respuesta = DatosModelo::mdlEliminarDato($tabla, $id_dato);
            if ($respuesta == "ok") {

                        echo '<script>
                     fncSweetAlert("success", "El dato se eliminó correctamente", "' . $url . '");
        </script>';
            }
        }
    }
}
