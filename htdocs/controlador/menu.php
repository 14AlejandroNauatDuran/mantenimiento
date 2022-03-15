<?php switch($_SESSION['rol_id']){
                   case '1':?>
               
                        <li class="nav-item menu">
                            <a href="dashboard.php" class="nav-link active">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-closed">
                            <a class="nav-link active">
                                <i class="fas fa-cogs"></i>
                                <p>
                                    Mantenimiento
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="mantenimiento.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Crear OT</p>
                                    </a>
                                <li class="nav-item">
                                    <a href="ordenesmantenimiento.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ordenes de Mantto</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-closed">
                            <a href="" class="nav-link active">
                                <i class="fas fa-industry"></i>
                                <p>
                                    Equipos
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="equipo.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Nuevo equipo</p>
                                    </a>
                            </ul>
                        </li>
                        <li class="nav-item menu-closed">
                            <a class="nav-link active">
                                <i class="fas fa-industry"></i>
                                <p>
                                    Departamento
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="departamento.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Nuevo departamentos</p>
                                    </a>
                            </ul>
                        </li>
                        <li class="nav-item menu-closed">
                            <a class="nav-link active">
                                <i class="fas fa-users"></i>
                                <p>
                                    Usuarios
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Active Page</p>
                                    </a>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inactive Page</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                <?php break;
                    case '2':?>
                        <li class="nav-item menu">
                            <a href="dashboard.php" class="nav-link active">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-closed">
                            <a class="nav-link active">
                                <i class="fas fa-cogs"></i>
                                <p>
                                    Mantenimiento
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="mantenimiento.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Crear OT</p>
                                    </a>
                                <li class="nav-item">
                                    <a href="ordenesmantenimiento.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ordenes de Mantto</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                <?php break;}?>