<?php
ob_start(); // Inicia el buffer de salida
session_start();
$url = PlantillaControlador::url(); 
if (!isset($_SESSION["iniciarSesion"])) {

        include "vistas/paginas/login.php";

    } else {

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Dashboard Template · Bootstrap v5.0</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $url; ?>vistas/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="<?php echo $url; ?>vistas/js/script.js"></script>
    <!-- Custom styles for this template -->
    <link href="<?php echo $url; ?>vistas/css/style.css" rel="stylesheet">
</head>

<body>

 <?php include "vistas/paginas/header.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="inicio">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="datos">
                                <span data-feather="file"></span>
                                Datos
                            </a>
                        </li>

                    </ul>

                </div>
            </nav>
            <?php
            //Traer las páginas dinámicamente
            if (isset($_GET["ruta"])) {
                $pagina = $_GET["ruta"];
                if (
                    $pagina == "inicio"
                    || $pagina == "datos"
                    || $pagina == "clientes"
                    || $pagina == "categorias"
                    || $pagina == "agregar-dato"
                    || $pagina == "editar-dato"
                    || $pagina == "salir"

                ) {
                    include "vistas/paginas/" . $pagina . ".php";
                } elseif ($pagina == "login") {
                    include "vistas/modulos/inicio.php";
                } else {
                    include "vistas/paginas/error404.php";
                }
            } else {
                include "vistas/paginas/inicio.php";
            }
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

    <script src="dashboard.js"></script>
   
</body>

</html>
 <?php } ?>