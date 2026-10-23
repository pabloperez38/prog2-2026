<?php

class PlantillaControlador
{
    //método para mostrar plantilla
    public function plantilla()
    {
        include 'vistas/plantilla.php';
    }
    //método para la url principal
    static public function url()
    {
        return "http://localhost/admin2026/";
    }
}
