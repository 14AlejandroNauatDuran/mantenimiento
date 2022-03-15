<?php
switch ($_SESSION['rol_id']) {
                                        case '1':
                                            $res = $MySQLiconn->query("SELECT orden_solicitud.id,orden_solicitud.orden_descripcion,orden_solicitud.orden_fecha,
                                            orden_solicitud.orden_hora, departamento.departamento_nombre as area_mante, equipo.equipo_nombre, estado.estado_tipo, 
                                            persona.persona_nombres as person_so, departamentoB.departamento_nombre as depto_so,orden_trabajo.num_herramienta,orden_trabajo.desripcion_trabajo,
                                            orden_trabajo.hora_inicio,orden_trabajo.hora_fin,orden_trabajo.ejecutantes,b.persona_nombres as entrega_tra
                                                    FROM orden_trabajo
                                                        INNER JOIN persona AS b
                                                             ON orden_trabajo.persona_id = b.id
                                                        right JOIN orden_solicitud
                                                            ON orden_trabajo.id = orden_solicitud.id                                               
                                                        INNER JOIN departamento
                                                            ON orden_solicitud.departamento_id = departamento.id
                                                        INNER JOIN equipo
                                                            ON orden_solicitud.equipo_id = equipo.id
                                                        INNER JOIN persona
                                                            ON orden_solicitud.persona_id = persona.id
                                                            INNER JOIN departamento AS departamentoB
                                                            ON persona.departamento_id = departamentoB.id

                                                        INNER JOIN estado
                                                            ON orden_solicitud.estado_id = estado.id");
                                            break;
                                        case '2':
                                            switch ($_SESSION['departamento_id']) {
                                                case '4':
                                                    # code...
                                                    switch ($_SESSION['persona_usuario']) {
                                                        case 'EMONTERO':
                                                        case 'ROROZCO':
                                                            $res = $MySQLiconn->query("SELECT orden_solicitud.id,orden_solicitud.orden_descripcion,orden_solicitud.orden_fecha,
                                                            orden_solicitud.orden_hora, departamento.departamento_nombre as area_mante, equipo.equipo_nombre, estado.estado_tipo, 
                                                            persona.persona_nombres as person_so, departamentoB.departamento_nombre as depto_so,orden_trabajo.num_herramienta,orden_trabajo.desripcion_trabajo,
                                                            orden_trabajo.hora_inicio,orden_trabajo.hora_fin,orden_trabajo.ejecutantes,b.persona_nombres as entrega_tra
                                                                    FROM orden_trabajo
                                                                        right JOIN orden_solicitud
                                                                            ON orden_trabajo.id = orden_solicitud.id                                               
                                                                        INNER JOIN departamento
                                                                            ON orden_solicitud.departamento_id = departamento.id
                                                                        INNER JOIN equipo
                                                                            ON orden_solicitud.equipo_id = equipo.id
                                                                        INNER JOIN persona
                                                                            ON orden_solicitud.persona_id = persona.id
                                                                            INNER JOIN departamento AS departamentoB
                                                                            ON persona.departamento_id = departamentoB.id
                                                                        INNER JOIN persona AS b
                                                                        ON orden_trabajo.persona_id = b.id
                                                                        INNER JOIN estado
                                                                            ON orden_solicitud.estado_id = estado.id where departamento.id in (4,9) ");
                                                            break;
                                                        default:
                                                        $res = $MySQLiconn->query("SELECT orden_solicitud.id,orden_solicitud.orden_descripcion,orden_solicitud.orden_fecha,
                                                        orden_solicitud.orden_hora, departamento.departamento_nombre as area_mante, equipo.equipo_nombre, estado.estado_tipo, 
                                                        persona.persona_nombres as person_so, departamentoB.departamento_nombre as depto_so,orden_trabajo.num_herramienta,orden_trabajo.desripcion_trabajo,
                                                        orden_trabajo.hora_inicio,orden_trabajo.hora_fin,orden_trabajo.ejecutantes,b.persona_nombres as entrega_tra
                                                                FROM orden_trabajo
                                                                    right JOIN orden_solicitud
                                                                        ON orden_trabajo.id = orden_solicitud.id                                               
                                                                    INNER JOIN departamento
                                                                        ON orden_solicitud.departamento_id = departamento.id
                                                                    INNER JOIN equipo
                                                                        ON orden_solicitud.equipo_id = equipo.id
                                                                    INNER JOIN persona
                                                                        ON orden_solicitud.persona_id = persona.id
                                                                        INNER JOIN departamento AS departamentoB
                                                                        ON persona.departamento_id = departamentoB.id
                                                                    INNER JOIN persona AS b
                                                                    ON orden_trabajo.persona_id = b.id
                                                                    INNER JOIN estado
                                                                        ON orden_solicitud.estado_id = estado.id where departamento.id = 4");
                                                            break;
                                                    }
    
                                                    break;
                                                case '7':
                                                    $res = $MySQLiconn->query("SELECT orden_solicitud.id,orden_solicitud.orden_descripcion,orden_solicitud.orden_fecha,
                                                    orden_solicitud.orden_hora, departamento.departamento_nombre as area_mante, equipo.equipo_nombre, estado.estado_tipo, 
                                                    persona.persona_nombres as person_so, departamentoB.departamento_nombre as depto_so,orden_trabajo.num_herramienta,orden_trabajo.desripcion_trabajo,
                                                    orden_trabajo.hora_inicio,orden_trabajo.hora_fin,orden_trabajo.ejecutantes,b.persona_nombres as entrega_tra
                                                            FROM orden_trabajo
                                                                right JOIN orden_solicitud
                                                                    ON orden_trabajo.id = orden_solicitud.id                                               
                                                                INNER JOIN departamento
                                                                    ON orden_solicitud.departamento_id = departamento.id
                                                                INNER JOIN equipo
                                                                    ON orden_solicitud.equipo_id = equipo.id
                                                                INNER JOIN persona
                                                                    ON orden_solicitud.persona_id = persona.id
                                                                    INNER JOIN departamento AS departamentoB
                                                                    ON persona.departamento_id = departamentoB.id
                                                                INNER JOIN persona AS b
                                                                ON orden_trabajo.persona_id = b.id
                                                                INNER JOIN estado
                                                                    ON orden_solicitud.estado_id = estado.id where  departamento.id =9");
                                                    break;
                                                case '3':
                                                    $res = $MySQLiconn->query("SELECT orden_solicitud.id,orden_solicitud.orden_descripcion,orden_solicitud.orden_fecha,
                                                    orden_solicitud.orden_hora, departamento.departamento_nombre as area_mante, equipo.equipo_nombre, estado.estado_tipo, 
                                                    persona.persona_nombres as person_so, departamentoB.departamento_nombre as depto_so,orden_trabajo.num_herramienta,orden_trabajo.desripcion_trabajo,
                                                    orden_trabajo.hora_inicio,orden_trabajo.hora_fin,orden_trabajo.ejecutantes,b.persona_nombres as entrega_tra
                                                            FROM orden_trabajo
                                                                right JOIN orden_solicitud
                                                                    ON orden_trabajo.id = orden_solicitud.id                                               
                                                                INNER JOIN departamento
                                                                    ON orden_solicitud.departamento_id = departamento.id
                                                                INNER JOIN equipo
                                                                    ON orden_solicitud.equipo_id = equipo.id
                                                                INNER JOIN persona
                                                                    ON orden_solicitud.persona_id = persona.id
                                                                    INNER JOIN departamento AS departamentoB
                                                                    ON persona.departamento_id = departamentoB.id
                                                                INNER JOIN persona AS b
                                                                ON orden_trabajo.persona_id = b.id
                                                                INNER JOIN estado
                                                                    ON orden_solicitud.estado_id = estado.id where departamentoB.id =3");
                                                    break;
                                                default:
                                                    # code...
                                                    break;
                                            }
                                            break;
                                    }
                                    ?>