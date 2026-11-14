<?php
require_once 'admin2026/controladores/productos.controlador.php';
require_once 'admin2026/modelos/productos.modelo.php';
$productos = ProductosControlador::ctrMostrarProductos(null, null);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SABORES - Restaurante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Isometra&family=Oswald:wght@400;600;700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="estilos.css">

</head>

<body>

    <?php include 'includes/header.php'; ?>
    <main>

        <section id="inicio" class="py-5">
            <div class="container">
                <div class="row g-4 align-items-stretch">


                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="contenedor-especialidad rounded-4 overflow-hidden d-flex flex-column justify-content-between shadow">

                            <div class="banner-especialidad-top py-3 px-3 text-center">
                                <h2 class="texto-oswald m-0 text-uppercase fw-bold fs-3">NUESTRA ESPECIALIDAD</h2>
                            </div>

                            <div class="banner-especialidad-bottom p-4 text-center">
                                <h3 class="texto-oswald text-uppercase fw-bold mb-1 fs-2">PIZZAS ARTESANALES</h3>
                                <p class="fs-5 mb-3 fw-medium">Ingredientes frescos</p>
                                <a href="#menu" class="btn btn-light texto-oswald px-4 py-2 border-2 fw-bold text-uppercase">[ VER MENÚ ]</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="contenedor-carrusel rounded-4 overflow-hidden shadow">
                            <div id="carruselEspecialidad" class="carousel slide h-100" data-bs-ride="carousel">

                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carruselEspecialidad" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carruselEspecialidad" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carruselEspecialidad" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>

                                <div class="carousel-inner h-100">
                                    <div class="carousel-item active h-100">
                                        <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=800&q=80" class="d-block w-100 h-100 object-fit-cover" alt="Pizza artesanal 1">
                                    </div>
                                    <div class="carousel-item h-100">
                                        <img src="https://images.unsplash.com/photo-1590947132387-155cc02f3212?auto=format&fit=crop&w=800&q=80" class="d-block w-100 h-100 object-fit-cover" alt="Pizza artesanal 2">
                                    </div>
                                    <div class="carousel-item h-100">
                                        <img src="https://images.unsplash.com/photo-1534308983496-4fabb1a015ee?auto=format&fit=crop&w=800&q=80" class="d-block w-100 h-100 object-fit-cover" alt="Pizza artesanal 3">
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carruselEspecialidad" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Anterior</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carruselEspecialidad" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Siguiente</span>
                                </button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section id="menu" class="py-5">
            <div class="container">

                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="texto-oswald text-uppercase text-white fw-bold display-5 m-0">NUESTRO MENÚ</h2>
                    <p class="text-white-50 fs-5">Sabores auténticos hechos en casa</p>
                </div>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">

                    <div class="col" data-aos="fade-up" data-aos-delay="100">
                        <div class="tarjeta-plato rounded-4 overflow-hidden shadow">
                            <img src="imagenes/menu/Pizza_Casera.webp" alt="Pizza Casera" class="img-plato">
                            <div class="info-plato p-3 text-center">
                                <h3 class="texto-oswald text-uppercase m-0 fs-5 fw-bold">Pizza Casera</h3>
                                <p class="precio-plato m-0 mt-1 fs-5">$6.500</p>
                            </div>
                        </div>
                    </div>

                    <div class="col" data-aos="fade-up" data-aos-delay="150">
                        <div class="tarjeta-plato rounded-4 overflow-hidden shadow">
                            <img src="imagenes/menu/hamburgesas.webp" alt="Hamburguesas" class="img-plato">
                            <div class="info-plato p-3 text-center">
                                <h3 class="texto-oswald text-uppercase m-0 fs-5 fw-bold">Hamburguesas</h3>
                                <p class="precio-plato m-0 mt-1 fs-5">$7.200</p>
                            </div>
                        </div>
                    </div>

                    <div class="col" data-aos="fade-up" data-aos-delay="200">
                        <div class="tarjeta-plato rounded-4 overflow-hidden shadow">
                            <img src="imagenes/menu/Ensaladas.webp" alt="Ensaladas" class="img-plato">
                            <div class="info-plato p-3 text-center">
                                <h3 class="texto-oswald text-uppercase m-0 fs-5 fw-bold">Ensaladas</h3>
                                <p class="precio-plato m-0 mt-1 fs-5">$5.800</p>
                            </div>
                        </div>
                    </div>

                    <div class="col" data-aos="fade-up" data-aos-delay="250">
                        <div class="tarjeta-plato rounded-4 overflow-hidden shadow">
                            <img src="imagenes/menu/fideos_tuco.webp" alt="Fideos con tuco" class="img-plato">
                            <div class="info-plato p-3 text-center">
                                <h3 class="texto-oswald text-uppercase m-0 fs-5 fw-bold">FIDEOS CON TUCO</h3>
                                <p class="precio-plato m-0 mt-1 fs-5">$7.500</p>
                            </div>
                        </div>
                    </div>

                    <div class="col" data-aos="fade-up" data-aos-delay="300">
                        <div class="tarjeta-plato rounded-4 overflow-hidden shadow">
                            <img src="imagenes/menu/Ravioles.webp" alt="Ravioles" class="img-plato">
                            <div class="info-plato p-3 text-center">
                                <h3 class="texto-oswald text-uppercase m-0 fs-5 fw-bold">RAVIOLES</h3>
                                <p class="precio-plato m-0 mt-1 fs-5">$8.400</p>
                            </div>
                        </div>
                    </div>

                    <div class="col" data-aos="fade-up" data-aos-delay="350">
                        <div class="tarjeta-plato rounded-4 overflow-hidden shadow">
                            <img src="imagenes/menu/milanesas_napolitanas.webp" alt="Milanesas a la napolitana" class="img-plato">
                            <div class="info-plato p-3 text-center">
                                <h3 class="texto-oswald text-uppercase m-0 fs-5 fw-bold">MILANESA NAPOLITANA</h3>
                                <p class="precio-plato m-0 mt-1 fs-5">$10.500</p>
                            </div>
                        </div>
                    </div>

                    <div class="col" data-aos="fade-up" data-aos-delay="400">
                        <div class="tarjeta-plato rounded-4 overflow-hidden shadow">
                            <img src="imagenes/menu/Tarta_jamon_queso.webp" alt="Tarta de jamón y queso" class="img-plato">
                            <div class="info-plato p-3 text-center">
                                <h3 class="texto-oswald text-uppercase m-0 fs-5 fw-bold">TARTA JAMÓN Y QUESO</h3>
                                <p class="precio-plato m-0 mt-1 fs-5">$6.200</p>
                            </div>
                        </div>
                    </div>

                    <div class="col" data-aos="fade-up" data-aos-delay="450">
                        <div class="tarjeta-plato rounded-4 overflow-hidden shadow">
                            <img src="imagenes/menu/Tarta_acelga.webp" alt="Tarta de acelga" class="img-plato">
                            <div class="info-plato p-3 text-center">
                                <h3 class="texto-oswald text-uppercase m-0 fs-5 fw-bold">Tarta de acelga</h3>
                                <p class="precio-plato m-0 mt-1 fs-5">$5.900</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="menu2" class="py-5">
            <div class="container">

                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="texto-oswald text-uppercase text-white fw-bold display-5 m-0">NUESTRO MENÚ ESPECIAL</h2>
                    <p class="text-white-50 fs-5">Sabores auténticos hechos en casa</p>
                </div>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <?php foreach ($productos as $value) { ?>
                        <div class="col" data-aos="fade-up" data-aos-delay="450">
                            <div class="tarjeta-plato rounded-4 overflow-hidden shadow">                           
                            
                                <img src="imagenes/productos/<?php echo $value["foto_producto"]; ?>" alt="<?php echo $value["nombre_producto"]; ?>" class="img-plato">
                                <div class="info-plato p-3 text-center">
                                    <h3 class="texto-oswald text-uppercase m-0 fs-5 fw-bold"><?php echo $value["nombre_producto"]; ?></h3>
                                    <p class="precio-plato m-0 mt-1 fs-5">$<?php echo $value["precio_producto"]; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section id="nosotros" class="py-5 text-white text-center">
            <div class="container" data-aos="fade-up">
                <div class="p-4 p-md-5 rounded-4 shadow-lg" style="background-color: rgba(0, 0, 0, 0.7); backdrop-filter: blur(5px);">
                    <h2 class="texto-oswald text-uppercase fw-bold display-5 mb-3 text-warning">SOBRE NOSOTROS</h2>
                    <p class="fs-5 max-w-75 mx-auto leading-relaxed">
                        En <strong>SABORES</strong> ofrecemos una experiencia gastronómica familiar única. Nos apasiona cocinar con ingredientes frescos y seleccionados para brindarte el auténtico sabor de la cocina hecha en casa.
                    </p>
                </div>
            </div>
        </section>

    </main>

    <footer id="contacto" class="footer-seccion">
        <div class="container-fluid p-0">
            <div class="row g-0">

                <div class="col-12 col-md-4 col-lg-3 mapa-contenedor">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3393.28424268615!2d-58.0163!3d-31.3929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDIzJzM0LjQiUyA1OMKwMDAnNTguNyJX!5e0!3m2!1ses!2sar!4v1620000000000!5m2!1ses!2sar"
                        width="100%"
                        height="100%"
                        style="border:0; min-height: 280px;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <div class="col-12 col-md-8 col-lg-9 info-footer p-4 p-lg-5 d-flex flex-column justify-content-between">

                    <div class="row align-items-center h-100">
                        <div class="col-12 col-md-8 text-white mb-3 mb-md-0">
                            <h3 class="texto-oswald text-uppercase fw-bold text-warning mb-3 fs-3">SABORES RESTAURANTE</h3>
                            <p class="m-1 fs-5"><i class="fa-solid fa-location-dot me-2 text-warning"></i> <strong>Dirección:</strong> Av. Principal 123</p>
                            <p class="m-1 fs-5"><i class="fa-solid fa-phone me-2 text-warning"></i> <strong>Tel:</strong> 0000-0000</p>
                            <p class="m-1 fs-5"><i class="fa-solid fa-clock me-2 text-warning"></i> <strong>Horarios:</strong> 12:00 a 23:00</p>
                        </div>

                        <div class="col-12 col-md-4 text-center text-md-end">
                            <h4 class="texto-oswald text-uppercase text-white fs-5 mb-3">Síguenos</h4>
                            <div class="d-flex justify-content-center justify-content-md-end gap-3">
                                <a href="#" class="icono-redes" title="Facebook"><i class="fa-brands fa-facebook-f fs-4"></i></a>
                                <a href="#" class="icono-redes" title="Instagram"><i class="fa-brands fa-instagram fs-4"></i></a>
                                <a href="#" class="icono-redes" title="WhatsApp"><i class="fa-brands fa-whatsapp fs-4"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="border-top border-secondary pt-3 mt-4 text-center text-white-50 small">
                        <p class="m-0">&copy; 2026 Sabores Restaurante. Todos los derechos reservados.</p>
                    </div>

                </div>

            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>