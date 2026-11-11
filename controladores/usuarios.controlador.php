<?php

class UsuariosControllador
{
    /*=============================================
	MOSTRAR USUARIOS
	=============================================*/

    static public function ctrMostrarUsuarios($item, $valor)
    {

        $respuesta = UsuariosModelo::mdlMostrarUsuarios($item, $valor);

        return $respuesta;
    }
    
    /*=============================================
	Login de usuarios
	=============================================*/

    
public function login()
{
    if (isset($_POST["email_usuario"]) && isset($_POST["password_usuario"])) {

        echo '<script>
            fncSweetAlert("loading", "Ingresando...", "");
        </script>';

        $email = trim($_POST["email_usuario"]);
        $password = trim($_POST["password_usuario"]);

        $item = "email";
        $valor = $email;

        // Buscar usuario por email
        $respuesta = UsuariosModelo::mdlMostrarUsuarios($item, $valor);

        // Verificar usuario y contraseña
        if (
            is_array($respuesta) &&
            !empty($respuesta["password"]) &&
            $respuesta["email"] === $email &&
            password_verify($password, $respuesta["password"])
        ) {

            // Regenerar ID de sesión por seguridad
            session_regenerate_id(true);

            $_SESSION["iniciarSesion"] = "ok";
            $_SESSION["id_usuario"] = $respuesta["id_usuario"];
      
            echo '<script>   

                window.location = "' . PlantillaControlador::url() . 'datos";

            </script>';

        } else {

            echo '<div class="alert alert-danger">
                Error al ingresar usuario o contraseña
            </div>

            <script>

                fncSweetAlert("close", "", "");
     
            </script>';

        }
    }
}


}
