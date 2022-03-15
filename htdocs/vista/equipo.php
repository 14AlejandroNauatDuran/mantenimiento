<?php
include 'templetes/head.php';
include 'templetes/navbar.php';
?>
      <!-- Main content -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Equipo</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="../modelo/crearequipo.php" method="post" class="form-register">
          <div class="card-body">
            <div class="row">
              <div class="form-group col">
                <label for="InputDescripcion">Clave de equipo:</label>
                <input type="text" class="form-control" id='clave' name="clave" placeholder="Escribe clave" required
                    value="<?php
                        if(isset($_GET['editar']))
                          echo $getROW['equipo_nombre'];  
                    ?>" />
              </div>
              <div class="form-group col">
                <label for="InputDescripcion">Nombre_equipo:</label>
                <input type="text" class="form-control"  id='nEqui' name="nEqui" placeholder="Nombre del equipo ej..Laptop" 
                    value="<?php
                        if(isset($_GET['editar']))
                          echo $getROW['equipo_marca'];  
                    ?>" />
              </div>
            </div>
            <div class="row">
              <div class="form-group col">
                  <label for="InputDescripcion">Marca:</label>
                  <input type="text" class="form-control"  id='marc' name="marc" placeholder="Marca del equipo ej..Lenovo" 
                   value="<?php
                       if(isset($_GET['editar']))
                       echo $getROW['equipo_modelo'];  
                  ?>" />
              </div>
              <div class="form-group col">
                  <label for="InputDescripcion">Modelo:</label>
                  <input type="text" class="form-control"  id='model' name="model" placeholder="Modelo del equipo ej..ideapad S340" multiple="" accept=".docx, .pdf"  
                      value="<?php
                             if(isset($_GET['editar']))
                               echo $getROW['equipo_manual'];  
                  ?>" />
              </div>
            </div>
            <div class="row">
              <div class="form-group col">
                <label for="InputDescripcion">Manual:</label>
                <input type="file" class="form-control" id='manu' name="manu" placeholder="Cargue un archivo.." multiple="" accept=".docx, .pdf"  
                    value="<?php
                        if(isset($_GET['editar']))
                          echo $getROW['equipo_nombre'];  
                    ?>" />
              </div>
              <div class="form-group col">
                <label for="InputDescripcion">Serie:</label>
                <input type="text" class="form-control"  id='ser' name="ser" placeholder="Serie del equipo" 
                    value="<?php
                        if(isset($_GET['editar']))
                          echo $getROW['equipo_marca'];  
                    ?>" />
              </div>
            </div>
            <div class="row">
              <div class="form-group col">
                  <label for="InputDescripcion">Año:</label>
                  <input type="text" class="form-control"  id='anio' name="anio" placeholder="¿Tiene algun año?..." 
                   value="<?php
                       if(isset($_GET['editar']))
                       echo $getROW['equipo_modelo'];  
                  ?>" />
              </div>
              <div class="form-group col">
                  <label for="InputDescripcion">Color:</label>
                  <input type="text" class="form-control"  id='colo' name="colo" placeholder="algun color.."   
                      value="<?php
                             if(isset($_GET['editar']))
                               echo $getROW['equipo_manual'];  
                  ?>" />
              </div>
            </div>
            
            <div class="form-group">
              <!-- Campo de texto combinado con lista de opciones -->
              <label for="InputEquipo">Departamento</label>
              <input type="text" list="items" class="form-control" name="noDepto" id="noDepto" placeholder="Selecciona el departamento al que pertenece..">
              <datalist id="items">
             
                <?php
               $departamento = $MySQLiconn->query("SELECT * FROM departamento");
               while ($depa = mysqli_fetch_assoc($departamento)):
                ?>
                  <option value="<?php echo $depa['departamento_nombre'];?>"   
                  ></option>
                  
                <?php endwhile; ?>
                </datalist>
            </div>
            <!-- Campo de texto combinado con lista de opciones -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="guardar">Enviar</button>
            <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#modalequipos">Ver registros</button>
          </div>
        </form>

      </div>
      <!-- /Main content -->
    <div class="modal fade" id="modalequipos" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Listado de equipos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-hover table-bordered shadow p-4 mb-8 bg-white rounded">
              <tr>
                <th>OT</th>
                <th>Clave</th>
                <th>Equipo</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Manual</th>
                <th>Departamento</th>
                <th> </th>
              </tr>
              <?php
              $res = $MySQLiconn->query("SELECT equipo.*, departamento.departamento_nombre
                                            FROM equipo
                                                INNER JOIN departamento
                                                    ON equipo.departamento_id = departamento.id");
              while ($row = $res->fetch_array()) {
              ?>
                <tr>
                  <td> <?php echo $row['id']; ?> </td>
                  <td> <?php echo $row['equipo_clave']; ?> </td>
                  <td> <?php echo $row['equipo_nombre']; ?> </td>
                  <td> <?php echo $row['equipo_marca']; ?> </td>
                  <td> <?php echo $row['equipo_modelo']; ?> </td>
                  <td> <?php echo $row['equipo_manual']; ?> </td>
                  <td> <?php echo $row['departamento_nombre']; ?> </td>

                  
                </tr>
              <?php
              }
              ?>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
      <!-- Control Sidebar -->
      </div>
      <?php
include 'templetes/footer.php';

?>
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
          <h5>Title</h5>
          <p>Sidebar content</p>
        </div>
      </aside>
      <!-- /.control-sidebar -->
      <br>




      </br>
      

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