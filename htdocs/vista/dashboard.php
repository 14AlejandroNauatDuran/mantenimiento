<?php
include 'templetes/head.php';
include 'templetes/navbar.php';
?>
<style>
    .row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -.005px;
  margin-left: -.005px;
}
</style>
            <!-- Main content -->
            <div class="row">
                <div class="col-lg-4 col-6">

                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                               <?php include '../modelo/contadores/abierto.php'; ?>
                            </h3>
                            <?php switch($_SESSION['departamento_id']){
                                     case'3':
                                        ?><p>Ordenes Enviadas</p><?php
                                     break;
                                     default:?>
                                     <p>Ordenes Recibidas</p>
                                     <?php
                                    break;
                                    }?>
                            
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a class="small-box-footer" data-toggle="modal" data-target="#exampleModalScrollable1">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-6">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>
                               <?php include '../modelo/contadores/proceso.php'; ?>
                            </h3>
                            <p>Ordenes en Proceso</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a class="small-box-footer" data-toggle="modal" data-target="#exampleModalScrollable2">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-6">

                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>
                               <?php include '../modelo/contadores/cerrado.php'; ?>
                            </h3>
                            <p>Ordenes Terminadas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a class="small-box-footer" data-toggle="modal" data-target="#exampleModalScrollable3">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
                                </div>
            <!-- /Main content -->
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
            <?php
            include '../controlador/modalesD.php';
            ?>

       
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