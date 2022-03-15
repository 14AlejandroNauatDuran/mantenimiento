<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title w-100 text-center" id="title-ver-orden">ORDEN</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-12" id="contenedor-orden">
            <div class="card border-secondary mx-auto mb-3" style="max-width: 45rem;">
              <div class="card-header text-center">Orden: <?php echo $row['id']; ?>
                <a href="crearpdf.php" target="_blank" class="float-right">Reporte</a>
              </div>
              <div class="card-body text-secondary">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <p class="card-text">Departamento solicitante: <?php echo $row['depto_so']; ?></p>
                  </div>
                  <div class="col-12 col-md-6">
                    <p class="card-text">Area de mantenimiento: <?php echo $row['area_mante']; ?></p>

                  </div>
                  <div class="col-12 col-md-6">
                    <p class="card-text">Fecha: <?php echo $row['orden_fecha']; ?></p>
                    <p class="card-text">Hora: <?php echo $row['orden_hora']; ?></p>
                    <p class="card-text">Solicita: <?php echo $row['person_so']; ?></p>
                    <p class="card-text">Equipo: <?php echo $row['equipo_nombre']; ?></p>
                  </div>
                  <div class="col-12 col-md-6">
                    <p class="card-text">Descripción del fallo: <?php echo $row['orden_descripcion']; ?></p>
                  </div>
                </div>
                <?php include 'editor2_ext.php'?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>