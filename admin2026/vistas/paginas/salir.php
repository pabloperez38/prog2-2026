<?php

// Destruir todas las variables de sesión
$_SESSION = [];

// Destruir la sesión
session_destroy();

// Redireccionar al inicio
echo '<script>
    window.location = "' . PlantillaControlador::url() . 'inicio";
</script>';
