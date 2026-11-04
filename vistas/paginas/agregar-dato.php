<?php
$estados = EstadosControlador::ctrMostrarEstados();
?>
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
         <h1 class="h2">Agregar datos</h1>
         <div class="btn-toolbar mb-2 mb-md-0">

             <a href="datos" class="btn btn-sm btn-warning">
                 <i class="fa-solid fa-circle-arrow-left"></i> Volver
             </a>
         </div>
     </div>

     <div class="row">
         <div class="col-md-8">
             <form method="post" class="row g-3">
                 <div class="col-md-6">
                     <label for="nombre" class="form-label">Nombre</label>
                     <input type="text" class="form-control" id="nombre" name="nombre" required>
                 </div>
                 <div class="col-md-6">
                     <label for="estado" class="form-label">Estado</label>
                     <select id="estado" name="estado" class="form-select" required>
                         <option value="">Seleccione un estado</option>
                         
                            <?php foreach ($estados as $estado) { ?>
                                <option value="<?php echo $estado['id_estado']; ?>"><?php echo $estado['nombre_estado']; 
                                }?>
                            </option>
                     </select>
                 </div>
                    <?php
                        $agregarDato = new DatosControlador();
                        $agregarDato->ctrAgregarDatos();
                        ?>
                 <div class="col-12">
                     <button type="submit" class="btn btn-primary">Agregar Dato</button>
                 </div>
             </form>

         </div>
     </div>



 </main>