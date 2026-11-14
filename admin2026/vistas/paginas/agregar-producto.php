
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
         <h1 class="h2">Agregar producto</h1>
         <div class="btn-toolbar mb-2 mb-md-0">

             <a href="productos" class="btn btn-sm btn-warning">
                 <i class="fa-solid fa-circle-arrow-left"></i> Volver
             </a>
         </div>
     </div>

     <div class="row">
         <div class="col-md-8">
            
             <form method="post" class="row g-3" enctype="multipart/form-data">
                 <div class="col-md-6">
                     <label for="nombre" class="form-label">Nombre</label>
                     <input type="text" class="form-control" id="nombre" name="nombre" required>
                 </div>
                    <div class="col-md-6">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
                    </div>
                    <div class="col-md-6">
                        <label for="imagen_producto" class="form-label">Imagen</label>
                        <input type="file" class="form-control" name="imagen_producto" required>
                    </div>
                    <?php
                        $agregarDato = new ProductosControlador();
                        $agregarDato->ctrAgregarProductos();
                        ?>
                 <div class="col-12">
                     <button type="submit" class="btn btn-primary">Agregar Producto</button>
                 </div>
             </form>

         </div>
     </div>



 </main>