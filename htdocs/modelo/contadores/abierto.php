<?php
 switch ($_SESSION['rol_id']) {
    case '1':
        $result = $MySQLiconn->query("SELECT COUNT(*) estado_id FROM orden_solicitud WHERE estado_id=1");
        $fila = mysqli_fetch_assoc($result);
        echo $fila['estado_id'];
    break;
    case '2':
        switch ($_SESSION['departamento_id']) {
            case '4':
                # code...
                switch ($_SESSION['persona_usuario']) {
                    case 'EMONTERO':
                        $result = $MySQLiconn->query("SELECT COUNT(*) estado_id FROM orden_solicitud WHERE estado_id=1 and departamento_id IN (4,9)");
                        $fila = mysqli_fetch_assoc($result);
                        echo $fila['estado_id'];
                    break;
                    case 'ROROZCO':
                        $result = $MySQLiconn->query("SELECT COUNT(*) estado_id FROM orden_solicitud WHERE estado_id=1 and departamento_id IN (4,9)");
                        $fila = mysqli_fetch_assoc($result);
                        echo $fila['estado_id'];
                    break;
                    default:
                        $result = $MySQLiconn->query("SELECT COUNT(*) estado_id FROM orden_solicitud WHERE estado_id=1 and departamento_id = 4");
                        $fila = mysqli_fetch_assoc($result);
                        echo $fila['estado_id'];
                    break;
                }
            break;
            case '7':
                $result = $MySQLiconn->query("SELECT COUNT(*) estado_id FROM orden_solicitud WHERE estado_id=1 and departamento_id =9");
                $fila = mysqli_fetch_assoc($result);
                echo $fila['estado_id'];
            break;
            case '3':
                $result = $MySQLiconn->query("SELECT COUNT(*) estado_id FROM orden_solicitud WHERE estado_id=1 and departamento_id IN (4,9,5) and persona_id IN (10,11,12,13,14)");
                $fila = mysqli_fetch_assoc($result);
                echo $fila['estado_id'];
            break;
            default:
                 # code...
            break;
        }
    break;
}
?>