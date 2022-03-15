<?php switch ($row['estado_tipo'] ){
    case 'COMPLETADO':
    ?>
      <div class="row">
        <div class="col-12 col-md-6">
          <p class="card-text">N° de herramientas: <?php echo $row['num_herramienta']; ?></p>
        </div>
        <div class="col-12 col-md-6">
          <p class="card-text">Descripción del trabajo: <?php echo $row['desripcion_trabajo']; ?></p>

        </div>
        <div class="col-12 col-md-6">
          <p class="card-text">Fecha y Hora Inicio: <?php echo $row['hora_inicio']; ?></p>
          <p class="card-text">Fecha y Hora fin: <?php echo $row['hora_fin']; ?></p>

          <p class="card-text">Ejecutantes: <?php echo $row['ejecutantes']; ?></p>
        </div>
        <div class="col-12 col-md-6">
          <p class="card-text">Entrega trabajo: <?php echo $row['entrega_tra']; ?></p>
        </div>
      </div>

  <?php break; 
  } 
?>