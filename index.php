<?php

require_once 'controladores/plantilla.controlador.php';
require_once 'controladores/datos.controlador.php';
require_once 'controladores/estados.controlador.php';
require_once 'controladores/usuarios.controlador.php';

require_once 'modelos/datos.modelo.php';
require_once 'modelos/estados.modelo.php';
require_once 'modelos/usuarios.modelo.php';

$index = new PlantillaControlador();
$index-> plantilla();