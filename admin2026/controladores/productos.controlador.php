<?php
//require_once 'modelos/productos.modelo.php';
class ProductosControlador
{
    /*=============================================
MOSTRAR Productos
=============================================*/
    static public function ctrMostrarProductos($item, $valor)
    {
        $tabla = "productos";
        $respuesta = ProductosModelo::mdlMostrarProductos($tabla, $item, $valor);
        return $respuesta;
    }

    /*=============================================
INSERTAR Productos
=============================================*/

    public function ctrAgregarProductos()
    {                
        if (isset($_POST["nombre"])) {
        
            if ($_FILES['imagen_producto']['name'] != null) {

                $imagen = $_FILES['imagen_producto']['name'] ?? null;

                // Manejo de la imagen
                $rutaImagen = null;
                if ($imagen) {
                    $directorio = "../imagenes/productos/";

                    // Verificar si el directorio existe, si no, crearlo
                    if (!is_dir($directorio)) {
                        mkdir($directorio, 0777, true);
                    }

                    // Validar tipo de imagen
                    $tipoImagen = $_FILES['imagen_producto']['type'];
                    $tiposPermitidos = ['image/jpeg', 'image/png', 'image/webp'];  // Ahora incluye WebP
                    if (!in_array($tipoImagen, $tiposPermitidos)) {
                        echo "<script> fncSweetAlert('error', 'Imágen no válida, el formato debe ser JPG, PNG o WEBP', '');</script>";
                        return;
                    }

                    // Validar tamaño de la imagen
                    $tamanoMaximo = 1 * 1024 * 1024; // 1 MB
                    if ($_FILES['imagen_producto']['size'] > $tamanoMaximo) {
                        echo "<script> fncSweetAlert('error', 'Peso máximo permitido es de 1MB', '');</script>";
                        return;
                    }

                    $extension = pathinfo($_FILES['imagen_producto']['name'], PATHINFO_EXTENSION);

                    $nombre = ProductosModelo::url_amigable($_POST["nombre"]);

                    $unique = time();

                    // Crear una ruta única para la imagen para guardarla en el servidor
                    $rutaImagen = $directorio . $unique . "-" . $nombre . "." . $extension;

                    // Crear un nombre único para la imagen para la bd
                    $nombreImagen = $unique . "-" . $nombre . "." . $extension;

                    // Mover la imagen al directorio
                    if (!move_uploaded_file($_FILES['imagen_producto']['tmp_name'], $rutaImagen)) {
                        echo "<script> fncSweetAlert('error', 'Error al subir la imagen', '');</script>";
                        return;
                    }
                }
            }

            $tabla = "productos"; //nombre de la tabla

            //Array asociativo con los Productos a insertar
            $productos = array(
                "nombre" => $_POST["nombre"],
                "precio" => $_POST["precio"],
                "foto_producto" => $nombreImagen ?? null
            );
            
            //podemos volver a la página de Productos
            $url = PlantillaControlador::url() . "productos";
            $respuesta = ProductosModelo::mdlAgregarProductos($tabla, $productos);

           if ($respuesta == "ok") {
                echo '<script>
                    fncSweetAlert(
                        "success",
                        "El producto se agregó correctamente",
                        ' . json_encode($url, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT) . '
                    );
                </script>';
            } 
        }
    }

    //Editar Productos

    /*=============================================
EDITAR Productos
=============================================*/
    public function ctrEditarProductos()
    {
        if (isset($_POST["nombre"]) && isset($_POST["id_producto"])) {

            $tabla = "productos"; //nombre de la tabla
            $Productos = array(
                "id_producto" => $_POST["id_producto"],
                "nombre" => $_POST["nombre"],
                "precio" => $_POST["precio"]
            );

            $respuesta = ProductosModelo::mdlEditarProductos($tabla, $Productos);
            $url = PlantillaControlador::url() . "productos";
            if ($respuesta == "ok") {
                echo '<script>
                    fncSweetAlert(
                        "success",
                        "El producto se editó correctamente",
                        ' . json_encode($url, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT) . '
                    );
                </script>';
            }
        }
    }

    static public function ctrEliminarDato(){
        if (isset($_GET["idDatoEliminar"]) && ($_GET["idDatoEliminar"] != "")) {

            $tabla = "productos";
            $id_producto = $_GET["idDatoEliminar"];
            $url = PlantillaControlador::url() . "productos";
            $respuesta = ProductosModelo::mdlEliminarDato($tabla, $id_producto);
            if ($respuesta == "ok") {

                        echo '<script>
                     fncSweetAlert("success", "El dato se eliminó correctamente", "' . $url . '");
        </script>';
            }
        }
    }
}
