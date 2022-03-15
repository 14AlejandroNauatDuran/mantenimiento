<?php
include 'templetes/head.php';
include 'templetes/navbar.php';
?>
      <!-- Main content -->
      <div class="card">
        <div class="card-header">
          <h2 class="card-title">LISTADO DE ORDENES </h2>
        </div>
        <div class="card-body">
          <div class="row">
              <div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                  <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">OT</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" ></th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Departamento: activate to sort column ascending" >Departamento <br> solicitante</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Fecha: activate to sort column ascending" >Fecha</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Hora: activate to sort column ascending" >Hora</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Solicitante: activate to sort column ascending" >Solicitante</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Equipo dañado: activate to sort column ascending" >Equipo</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Area: activate to sort column ascending" >Area de mantenimiento</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Fallo: activate to sort column ascending" >Fallo</th>                 
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" >Estado</th>  
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                      include '../modelo/sql_modal/ordenes_man.php';
                      while ($row = $res->fetch_array()) {
                    ?>
                      <tr>
                        <td class="sorting_1 dtr-control"> <?php echo $row['id']; ?> </td>
                        <td style=""> <a href="#edit_<?php echo $row['id']; ?>" class="fas fa-edit" data-toggle="modal">   </td>
                        <td style=""> <?php echo $row['depto_so']; ?> </td>
                        <td style=""> <?php echo $row['orden_fecha']; ?> </td>
                        <td style=""> <?php echo $row['orden_hora']; ?> </td>
                        <td style=""> <?php echo $row['person_so']; ?> </td>
                        <td style=""> <?php echo $row['equipo_nombre']; ?> </td>
                        <td style=""> <?php echo $row['area_mante']; ?> </td>
                        <td style=""> <?php echo $row['orden_descripcion']; ?> </td>
                        <td style=""> <?php echo $row['estado_tipo']; ?> </td>
                        <?php include ('../controlador/editar2.php');?>
                     
                      </tr>
                    <?php
                      } 
                    ?>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>

    </div>
      
      <!-- Control Sidebar -->
      
    <!-- ./wrapper -->
    <?php
include 'templetes/footer.php';

?>
  </div>
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../plantilla/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../plantilla/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plantilla/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plantilla/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../plantilla/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../plantilla/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../plantilla/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../plantilla/plugins/jszip/jszip.min.js"></script>
    <script src="../plantilla/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../plantilla/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../plantilla/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../plantilla/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    
    <!-- AdminLTE App -->
    <script src="../plantilla/dist/js/adminlte.min.js"></script>
        <!-- Page specific script -->
    <script>
      $(function() {
        $("#example1").DataTable({
          "responsive": true,
          "lengthChange": false,
          "autoWidth": false,
          "buttons": ["excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
</body>

</html>