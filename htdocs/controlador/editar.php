<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Orden de Trabajo</h3>

                    </div>

                    <form action="crearot.php?id=<?php echo $row['id']; ?>" method="post" class="form-register">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleInputEmail1">Equipo</label>
                                            <input type="text" readonly="readonly" class="form-control" placeholder="<?php echo $row['equipo_nombre']; ?>">
                                        </div>
                                        <div class="col">
                                            <label for="exampleInputEmail1">Area de mantenimiento</label>
                                            <input type="text" readonly="readonly" class="form-control" placeholder="<?php echo $row['area_mante']; ?>">
                                        </div>
                                        <div class="col">
                                            <label for="exampleInputEmail1">Problema</label>
                                            <input type="text" readonly="readonly" class="form-control" placeholder="<?php echo $row['orden_descripcion']; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col">
                                            <label for="exampleInputEmail1">Herramientas utilizadas:</label>
                                            <input type="number" class="form-control" name="cHerra" id="cHerra" placeholder="Ej. 5 o 8" >
                                        </div>
                                        <div class="col">
                                            <label for="exampleInputEmail1">Descripción del trabajo</label>
                                            <textarea type="text" class="form-control" name="dTra" id="dTra" placeholder="Describe tu solución.." ></textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleInputEmail1">Hora inicio</label>
                                            <input type="datetime-local" class="form-control" name="fIni" id="fIni" placeholder="" >
                                        </div>
                                        <div class="col">
                                            <label for="exampleInputEmail1">Hora finalizado</label>
                                            <input type="datetime-local" class="form-control" name="fFin" id="fFin" placeholder="" >
                                        </div>
                                        <div class="col">
                                            <label for="exampleInputEmail1">Ejecutantes</label>
                                            <textarea type="text" class="form-control" name="eje" id="eje" placeholder="Nombres de los ejecutantes..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col">
                                            <label for="exampleInputEmail1">Material:</label>
                                            <textarea type="text" class="form-control" name="re" id="re" placeholder="Describe los materiales o refacciones usados..."></textarea>
                                        </div>
                                </div>

                                <div class="card-footer">
                                <?php switch($row['estado_id']){
                                                    case'2':?>
                                                        <button type="submit" class="btn btn-primary" name="finalizar">Finalizar</button>
                                                      <?php  break;
                                                    default:?>
                                                   <button type="submit" class="btn btn-primary" name="finalizar">Finalizar</button>
                                                    <button type="submit" class="btn btn-danger" name="procesar">Posteriormente</button>
                                                   <?php break;
                                                }?>
                                    
                                </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>