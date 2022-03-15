<?php
include 'templetes/head.php';
include 'templetes/navbar.php';
?>
      <!-- Main content -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Solicitud de Mantenimiento Correctivo</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="crearot.php" method="post" class="form-register">
          <div class="card-body">
            <div class="form-group">
              <label for="InputDescripcion">Descripción del fallo</label>
              <input type="text" class="form-control" name="InputDescripcion" placeholder="Describa el fallo" required>
            </div>
            <div class="form-group">
               <!-- Campo de texto combinado con lista de opciones -->
            <div class="form-group">
              <label for="exampleInputAsignar">Asignar</label>
              <input type="text" list="depto" class="form-control" name="depto" placeholder="Asignar departamento" required>
              <!-- Lista de opciones -->
              <datalist id="depto">
                <?php
                $departamento = $MySQLiconn->query("SELECT * FROM departamento WHERE id IN (4,9, 5)");
                while ($depto = mysqli_fetch_assoc($departamento)) :
                ?>
                  <option value="<?php echo  $depto['departamento_nombre']; ?>"></option>

                <?php endwhile; ?>
              </datalist>
            </div>
              <!-- Campo de texto combinado con lista de opciones -->
              <label for="InputEquipo">Equipo</label>
              <input type="text" list="items" class="form-control" name="InputEquipo" id="InputEquipo" placeholder="¿Cuál es el equipo dañado?" required>
              <datalist id="items">
              <option value=""></option>
                <?php
                /*switch ($depto['departamento_nombre']){
                  case 'Climas':
                    $equipo = $MySQLiconn->query("SELECT * FROM equipo where departamento_id = 9");
                    break;
                  case 'Mantenimiento Industrial':
                    $equipo = $MySQLiconn->query("SELECT * FROM equipo where departamento_id = 3");
                    break;
                  case 'Taller Automotriz':
                    $equipo = $MySQLiconn->query("SELECT * FROM equipo where departamento_id =5");
                    break;
                }*/
                $equipo = $MySQLiconn->query("SELECT * FROM equipo");
                while ($equi = mysqli_fetch_assoc($equipo)) :
               // $variable = $equi['equipo_nombre'];
                 // $variable = utf8_decode($variable);

                ?>
                  <option value="<?php echo  $equi['equipo_nombre']; ?>"></option>
                  <?php echo  $equi['equipo_nombre']; ?>
                <?php endwhile;?>
              </datalist>
               <!-- Agregamos la libreria Jquery -->
  <!--  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

 Iniciamos el segmento de codigo javascript 
<script type="text/javascript">
  $(document).ready(function(){
    var equipos = $('#items');
   // var disco_sel = $('#disco_sel');

    //Ejecutar accion al cambiar de opcion en el select de las bandas
    $('#depto').change(function(){
      var departamento = $(this).val(); //obtener el id seleccionado

      if(departamento !== ''){ //verificar haber seleccionado una opcion valida

        /*Inicio de llamada ajax*/
        $.ajax({
          data: {departamento:departamento}, //variables o parametros a enviar, formato => nombre_de_variable:contenido
          dataType: 'html', //tipo de datos que esperamos de regreso
          type: 'POST', //mandar variables como post o get
          url: 'get_equipo.php' //url que recibe las variables
        }).done(function(data){ //metodo que se ejecuta cuando ajax ha completado su ejecucion             

          equipo.html(data); //establecemos el contenido html de discos con la informacion que regresa ajax             
          equipo.prop('disabled', false); //habilitar el select
        });
        /*fin de llamada ajax*/

      }else{ //en caso de seleccionar una opcion no valida
        equipo.val(''); //seleccionar la opcion "- Seleccione -", osea como reiniciar la opcion del select
        equipo.prop('disabled', true); //deshabilitar el select
      }    
    });


    //mostrar una leyenda con el disco seleccionado
    $('#items').change(function(){
      $('#disco_sel').html($(this).val() + ' - ' + $('#discos option:selected').text());
    });

  });
</script>   --> 
            </div>
           

            <div class="form-group">
              <div class="inline fields">
                <label>¿Se necesita un paro de producción?</label>
                <div class="field">
                  <div class="ui radio checkbox">
                    <input type="radio" name="paro"  value="Sí">
                    <label>Sí</label>
                  </div>
                </div>
                <div class="field">
                  <div class="ui radio checkbox">
                    <input type="radio" name="paro"  value="No">
                    <label>No</label>
                  </div>
                </div>
              </div>
              
            </div>

          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="guardar">Enviar</button>
          </div>
        </form>
      </div>
      <!-- /Main content -->
      </div>
      <?php
include 'templetes/footer.php';

?>
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
          <h5>Title</h5>
          <p>Sidebar content</p>
        </div>
      </aside>
      <!-- /.control-sidebar -->
    <!-- ./wrapper -->
    </div>
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../Plantilla/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../Plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../Plantilla/dist/js/adminlte.min.js"></script>
</body>

</html>