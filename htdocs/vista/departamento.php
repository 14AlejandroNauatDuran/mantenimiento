<?php
include 'templetes/head.php';
include 'templetes/navbar.php';
?>
      <!-- Main content -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Departamento</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="creardepartamento.php" method="post" class="form-register">
          <div class="card-body">
            <div class="form-group">
              <label for="InputDescripcion">Departamento:</label>
              <input type="text" class="form-control" id='nDepto' name="nDepto" placeholder="Departamento" required
           value="<?php
                      if(isset($_GET['editar']))
                        echo $getROW['departamento_nombre'];  
                  ?>" />
            </div>
            <!-- Campo de texto combinado con lista de opciones -->
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