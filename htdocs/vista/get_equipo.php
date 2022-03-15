<?php
require_once '../modelo/db.php'; //libreria de conexion a la base

$departemento = filter_input(INPUT_POST, 'departamento'); //obtenemos el parametro que viene de ajax

if($depertemento != ''){ //verificamos nuevamente que sea una opcion valida
  if(!$MySQLiconn){
    die("<br/>Sin conexi&oacute;n.");
  }

  /*Obtenemos los discos de la banda seleccionada*/

  $sql = "select * from equipo join departemento on equipo.departemento_id = departamento.id where departamento_nombre = ".$departemento;  
  $query = mysqli_query($MySQLiconn, $sql);
  
}

/**
 * Como notaras vamos a generar código `html`, esto es lo que sera retornado a `ajax` para llenar 
 * el combo dependiente
 */
?>

<?php 
while ($equi = mysqli_fetch_assoc($query)) :
               // $variable = $equi['equipo_nombre'];
                 // $variable = utf8_decode($variable);
                 print_r('<pre>');
                 print_r($query);
                 print_r('</pre>');
                ?>
                
                  <option value="<?php echo  $equi['equipo_nombre']; ?>"></option>
                  <?php echo  $equi['equipo_nombre']; ?>
                <?php endwhile; ?>