<?php  
                                switch ($_SESSION['rol_id']) {
                                    case '1':
                                        $res = $MySQLiconn->query("SELECT orden_solicitud.id,orden_solicitud.estado_id,orden_solicitud.orden_descripcion,orden_solicitud.orden_fecha,orden_solicitud.orden_hora, departamento.departamento_nombre as area_mante, equipo.equipo_nombre, estado.estado_tipo, persona.persona_nombres, departamentoB.departamento_nombre as depto_so
                                                FROM orden_solicitud
                                                    INNER JOIN departamento
                                                        ON orden_solicitud.departamento_id = departamento.id
                                                    INNER JOIN equipo
                                                        ON orden_solicitud.equipo_id = equipo.id
                                                    INNER JOIN persona
                                                        ON orden_solicitud.persona_id = persona.id
                                                        INNER JOIN departamento AS departamentoB
                                                        ON persona.departamento_id = departamentoB.id
                                                    INNER JOIN estado
                                                        ON orden_solicitud.estado_id = estado.id where estado_id =2");
                                        break;
                                    case '2':
                                        switch ($_SESSION['departamento_id']) {
                                            case '4':
                                                # code...
                                                switch ($_SESSION['persona_usuario']) {
                                                    case 'EMONTERO':
                                                    case 'ROROZCO':
                                                        $res = $MySQLiconn->query("SELECT orden_solicitud.id,orden_solicitud.estado_id,orden_solicitud.orden_descripcion,orden_solicitud.orden_fecha,orden_solicitud.orden_hora, departamento.departamento_nombre as area_mante, equipo.equipo_nombre, estado.estado_tipo, persona.persona_nombres, departamentoB.departamento_nombre as depto_so
                                                        FROM orden_solicitud
                                                            INNER JOIN departamento
                                                                ON orden_solicitud.departamento_id = departamento.id
                                                            INNER JOIN equipo
                                                                ON orden_solicitud.equipo_id = equipo.id
                                                            INNER JOIN persona
                                                                ON orden_solicitud.persona_id = persona.id
                                                                INNER JOIN departamento AS departamentoB
                                                                ON persona.departamento_id = departamentoB.id
                                                            INNER JOIN estado
                                                                ON orden_solicitud.estado_id = estado.id where estado_id =2 and departamento.id in(4,9)");
                                                        break;
                                                    default:
                                                        $res = $MySQLiconn->query("SELECT orden_solicitud.id,orden_solicitud.estado_id,orden_solicitud.orden_descripcion,orden_solicitud.orden_fecha,orden_solicitud.orden_hora, departamento.departamento_nombre as area_mante, equipo.equipo_nombre, estado.estado_tipo, persona.persona_nombres, departamentoB.departamento_nombre as depto_so
                                                    FROM orden_solicitud
                                                        INNER JOIN departamento
                                                            ON orden_solicitud.departamento_id = departamento.id
                                                        INNER JOIN equipo
                                                            ON orden_solicitud.equipo_id = equipo.id
                                                        INNER JOIN persona
                                                            ON orden_solicitud.persona_id = persona.id
                                                            INNER JOIN departamento AS departamentoB
                                                            ON persona.departamento_id = departamentoB.id
                                                        INNER JOIN estado
                                                            ON orden_solicitud.estado_id = estado.id where estado_id =2 and departamento.id =4");
                                                        break;
                                                }

                                                break;
                                            case '7':
                                                $res = $MySQLiconn->query("SELECT orden_solicitud.id,orden_solicitud.estado_id,orden_solicitud.orden_descripcion,orden_solicitud.orden_fecha,orden_solicitud.orden_hora, departamento.departamento_nombre as area_mante, equipo.equipo_nombre, estado.estado_tipo, persona.persona_nombres, departamentoB.departamento_nombre as depto_so
                                                    FROM orden_solicitud
                                                        INNER JOIN departamento
                                                            ON orden_solicitud.departamento_id = departamento.id
                                                        INNER JOIN equipo
                                                            ON orden_solicitud.equipo_id = equipo.id
                                                        INNER JOIN persona
                                                            ON orden_solicitud.persona_id = persona.id
                                                            INNER JOIN departamento AS departamentoB
                                                            ON persona.departamento_id = departamentoB.id
                                                        INNER JOIN estado
                                                            ON orden_solicitud.estado_id = estado.id where estado_id =2 and departamento.id =9");
                                                break;
                                            case '3':
                                                $res = $MySQLiconn->query("SELECT orden_solicitud.id,orden_solicitud.estado_id,orden_solicitud.orden_descripcion,orden_solicitud.orden_fecha,orden_solicitud.orden_hora, departamento.departamento_nombre as area_mante, equipo.equipo_nombre, estado.estado_tipo, persona.persona_nombres, departamentoB.departamento_nombre as depto_so
                                                    FROM orden_solicitud
                                                        INNER JOIN departamento
                                                            ON orden_solicitud.departamento_id = departamento.id
                                                        INNER JOIN equipo
                                                            ON orden_solicitud.equipo_id = equipo.id
                                                        INNER JOIN persona
                                                            ON orden_solicitud.persona_id = persona.id
                                                            INNER JOIN departamento AS departamentoB
                                                            ON persona.departamento_id = departamentoB.id
                                                        INNER JOIN estado
                                                            ON orden_solicitud.estado_id = estado.id where estado_id =2 and departamentoB.id =3");
                                                break;
                                            default:
                                                # code...
                                                break;
                                        }
                                        break;
                                }?>