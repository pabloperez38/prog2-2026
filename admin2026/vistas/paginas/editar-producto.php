<?php
if (isset($_GET["id"]) && empty($_GET["id"])) {
    echo '<script>
        window.location = "productos";
    </script>';
    exit;
}

$dato = ProductosControlador::ctrMostrarProductos("id_producto", $_GET["id"]);
?>
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
         <h1 class="h2">Editar Producto</h1>
         <div class="btn-toolbar mb-2 mb-md-0">

             <a href="productos" class="btn btn-sm btn-warning">
                 <i class="fa-solid fa-circle-arrow-left"></i> Volver
             </a>
         </div>
     </div>

     <div class="row">
         <div class="col-md-8">
             <form method="post" class="row g-3">
                 <div class="col-md-6">
                     <label for="nombre" class="form-label">Nombre</label>
                     <input type="text" value="<?php echo $dato["nombre_producto"]?>" class="form-control" id="nombre" name="nombre" required>
                 </div>
                 <div class="col-md-6">
                     <label for="precio" class="form-label">Precio</label>
                     <input type="number" value="<?php echo $dato["precio_producto"]?>" class="form-control" id="precio" name="precio" required>
                 </div>
                                             
               
                    <?php
                        $editarDato = new ProductosControlador();
                        $editarDato->ctrEditarProductos();
                        ?>
                        <input type="hidden" value="<?php echo $dato["id_producto"]; ?>"  name="id_producto">
                 <div class="col-12">
                     <button type="submit" class="btn btn-primary">Editar Producto</button>
                 </div>
             </form>

         </div>
     </div>



 </main>