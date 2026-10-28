 <?php
    $datos = DatosControlador::ctrMostrarDatos(null, null);

    ?>
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
         <h1 class="h2">Datos</h1>
         <div class="btn-toolbar mb-2 mb-md-0">

             <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                 <span data-feather="calendar"></span>
                 This week
             </button>
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
                                 <span class="badge bg-success">Activo</span>

                             <?php } else {  ?>
                                 <span class="badge bg-danger">Inactivo</span>
                             <?php }   ?>
                         </td>
                         <td>
                             <button class="btn btn-warning">Editar</button>
                             <button class="btn btn-danger">Eliminar</button>
                         </td>
                     </tr>
                 <?php } ?>
             </tbody>
         </table>
     </div>
 </main>