 <?php
    $datos = ProductosControlador::ctrMostrarProductos(null, null);

    ?>
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
         <h1 class="h2">Productos</h1>
         <div class="btn-toolbar mb-2 mb-md-0">

             <a href="agregar-producto" class="btn btn-sm btn-info">
                 <i class="fa-solid fa-plus"></i> Agregar Producto
             </a>
         </div>
     </div>

     <div class="table-responsive tablaDatos">
         <table id="example" class="table table-striped">
             <thead>
                 <tr>
                     <th scope="col">#</th>
                     <th scope="col">Nombre</th>
                     <th scope="col">Precio</th>
                     <th scope="col">Acciones</th>

                 </tr>
             </thead>
             <tbody>
                 <?php foreach ($datos as $value) { ?>
                     <tr>
                         <td><?php echo $value["id_producto"]; ?></td>
                         <td><?php echo $value["nombre_producto"]; ?></td>
                         <td>$.<?php echo number_format($value["precio_producto"], 2); ?></td>

                         </td>
                         <td>
                             <?php
                                $eliminarDato = new DatosControlador();
                                $eliminarDato->ctrEliminarDato();
                                ?>
                             <a href="index.php?ruta=editar-producto&id=<?php echo $value["id_producto"]; ?>" class="btn btn-warning">Editar</a>
                             <button class='btn btn-danger btnEliminarDato' idDato=<?php echo $value["id_producto"]; ?>><i class='fas fa-trash-alt'></i></button>
                         </td>
                     </tr>
                 <?php } ?>
             </tbody>
         </table>
     </div>
 </main>
 <?php

    $eliminarDato = new DatosControlador();
    $eliminarDato->ctrEliminarDato();

    ?>