<div class="modal fade" id="exampleModalScrollable1" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">listado de ordenes activas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-hover table-bordered shadow p-4 mb-8 bg-white rounded">
                                <tr>
                                    <th>OT</th>
                                    <th>Departamento <br> solicitante</th>
                                    <th>Fecha </th>
                                    <th>Hora</th>
                                    <th>Solicitante</th>
                                    <th>Equipo</th>
                                    <th>Area de mantenimiento </th>
                                    <th>Fallo</th>
                                    <th>Acciones</th>
                                </tr>
                                <?php
                                include '../modelo/sql_modal/modalR.php';


                                while ($row = $res->fetch_array()) {
                                ?>
                                    <tr>
                                        <td> <?php echo $row['id']; ?> </td>
                                        <td> <?php echo $row['depto_so']; ?> </td>
                                        <td> <?php echo $row['orden_fecha']; ?> </td>
                                        <td> <?php echo $row['orden_hora']; ?> </td>
                                        <td> <?php echo $row['persona_nombres']; ?> </td>
                                        <td> <?php echo $row['equipo_nombre']; ?> </td>
                                        <td> <?php echo $row['area_mante']; ?> </td>
                                        <td> <?php echo $row['orden_descripcion']; ?> </td>
                                        <?php switch($_SESSION['departamento_id']){
                                                    case'3':
                                                        ?><td></td><?php
                                                        break;
                                                    default:?>
                                                   <td> <a href="#edit_<?php echo $row['id']; ?>" class="fas fa-edit" data-toggle="modal"> </a> </td>
                                                    <?php include('editar.php');
                                                    break;
                                                }?>
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

            <div class="modal fade" id="exampleModalScrollable2" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">listado de ordenes activas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <table class="table table-hover table-bordered shadow p-4 mb-8 bg-white rounded">
                                <tr>
                                    <th>OT</th>
                                    <th>Departamento <br> solicitante</th>
                                    <th>Fecha </th>
                                    <th>hora</th>
                                    <th>Solicitante</th>
                                    <th>Equipo</th>
                                    <th>Area de mantenimiento </th>
                                    <th>Fallo</th>
                                    <th>Acciones</th>
                                </tr>
                                <?php
                                include '../modelo/sql_modal/modalP.php';


                                while ($row = $res->fetch_array()) {
                                ?>
                                    <tr>
                                        <td> <?php echo $row['id']; ?> </td>
                                        <td> <?php echo $row['depto_so']; ?> </td>
                                        <td> <?php echo $row['orden_fecha']; ?> </td>
                                        <td> <?php echo $row['orden_hora']; ?> </td>
                                        <td> <?php echo $row['persona_nombres']; ?> </td>
                                        <td> <?php echo $row['equipo_nombre']; ?> </td>
                                        <td> <?php echo $row['area_mante']; ?> </td>
                                        <td> <?php echo $row['orden_descripcion']; ?> </td>
                                        
                                        <?php switch($_SESSION['departamento_id']){
                                                    case'3':
                                                        ?><td></td><?php
                                                        break;
                                                    default:?>
                                                   <td> <a href="#edit_<?php echo $row['id']; ?>" class="fas fa-edit" data-toggle="modal"> </a> </td>
                                                    <?php include('editar.php');
                                                    break;
                                                }?>
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

            <div class="modal fade" id="exampleModalScrollable3" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">listado de ordenes activas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <table class="table table-hover table-bordered shadow p-4 mb-8 bg-white rounded">
                                <tr>
                                    <th>OT</th>
                                    <th>Departamento <br> solicitante</th>
                                    <th>Fecha </th>
                                    <th>hora</th>
                                    <th>Solicitante</th>
                                    <th>Equipo</th>
                                    <th>Area de mantenimiento </th>
                                    <th>Fallo</th>
                                    <th>N° de herramientas </th>
                                    <th>Descripción del trabajo</th>
                                    <th>Fecha y Hora <br> Inicio</th>
                                    <th>Fecha y Hora <br> fin</th>
                                    <th>Ejecutantes</th>
                                    <th>Entrega trabajo</th>
                                    <th>Acciones</th>
                                    
                                </tr>
                                <?php
                                include '../modelo/sql_modal/modalC.php';


                                while ($row = $res->fetch_array()) {
                                ?>
                                   
                                    <tr>
                                        <td> <?php echo $row['id']; ?> </td>
                                        <td> <?php echo $row['depto_so']; ?> </td>
                                        <td> <?php echo $row['orden_fecha']; ?> </td>
                                        <td> <?php echo $row['orden_hora']; ?> </td>
                                        <td> <?php echo $row['person_so']; ?> </td>
                                        <td> <?php echo $row['equipo_nombre']; ?> </td>
                                        <td> <?php echo $row['area_mante']; ?> </td>
                                        <td> <?php echo $row['orden_descripcion']; ?> </td>
                                        <td> <?php echo $row['num_herramienta']; ?> </td>
                                        <td> <?php echo $row['desripcion_trabajo']; ?> </td>
                                        <td> <?php echo $row['hora_inicio']; ?> </td>
                                        <td> <?php echo $row['hora_fin']; ?> </td>
                                        <td> <?php echo $row['ejecutantes']; ?> </td>
                                        <td> <?php echo $row['entrega_tra']; ?> </td>
                                        <td>  <button type="button" class="btn btn-primary" onclick= mostrar(<?php $row['id'];?>)><i class="fas fa-eye"></i></button> </td>
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