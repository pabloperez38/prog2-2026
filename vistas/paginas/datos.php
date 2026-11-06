 <?php
    $datos = DatosControlador::ctrMostrarDatos(null, null);

    ?>
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
         <h1 class="h2">Datos</h1>
         <div class="btn-toolbar mb-2 mb-md-0">
<?php echo crypt("12345678", '$6$rounds=1000000$NJy4rIPjpOaU$0ACEYGg/aKCY3v8O8AfyiO7CTfZQ8/pabloperezholaquetalcomoestas/'); ?>
<br>

             <a href="agregar-dato" class="btn btn-sm btn-info">
                 <i class="fa-solid fa-plus"></i> Agregar Dato
             </a>
         </div>
     </div>

     <div class="table-responsive">
         <table class="table table-striped table-sm">
             <thead>
                 <tr>
                     <th scope="col">#</th>
                     <th scope="col">Nombre</th>
                     <th scope="col">Estado</th>
                     <th scope="col">Acciones</th>

                 </tr>
             </thead>
             <tbody>
                 <?php foreach ($datos as $value) { ?>
                     <tr>
                         <td><?php echo $value["id_dato"]; ?></td>
                         <td><?php echo $value["nombre"]; ?></td>
                         <td>
                             <?php if ($value["estado"] == 1) { ?>
                                 <span class="badge bg-success"><?php if($value["estado"] == 1) { echo "Activo"; } ?></span>

                                 <?php } else if ($value["estado"] == 5) {  ?>
                                     <span class="badge bg-danger"><?php if($value["estado"] == 5) { echo "En venta"; } ?></span>
                                 <?php } else if ($value["estado"] == 2) { ?>
                                     <span class="badge bg-warning"><?php if($value["estado"] == 2) { echo "Inactivo"; } ?></span>

                                 <?php  } else if ($value["estado"] == 3) { ?>
                                     <span class="badge bg-info"><?php if($value["estado"] == 3) { echo "En revisión"; } ?></span>

                                 <?php  }   else if ($value["estado"] == 4) { ?>
                                     <span class="badge bg-dark"><?php if($value["estado"] == 4) { echo "Pagado"; } ?></span>

                                 <?php  } ?>  
                         </td>
                         <td>
                             <?php
                        $eliminarDato = new DatosControlador();
                        $eliminarDato->ctrEliminarDato();
                        ?>
                             <a href="index.php?ruta=editar-dato&id=<?php echo $value["id_dato"]; ?>" class="btn btn-warning">Editar</a>
                             <button class='btn btn-danger btnEliminarCategoria' idCategoria=<?php echo $value["id_dato"]; ?>><i class='fas fa-trash-alt'></i></button>
                         </td>
                     </tr>
                 <?php } ?>
             </tbody>
         </table>
     </div>
 </main>