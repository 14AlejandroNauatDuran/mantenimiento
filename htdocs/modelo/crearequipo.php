<?php
date_default_timezone_set("America/Mexico_City");
include ('db.php');
session_start();

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
		
	 echo "Guardando";
     $nEqui = $MySQLiconn->real_escape_string($_POST['nEqui']);
     $marc = $MySQLiconn->real_escape_string($_POST['marc']);
     $model = $MySQLiconn->real_escape_string($_POST['model']);
     $manu = $MySQLiconn->real_escape_string($_POST['manu']);
     $noDepto = $MySQLiconn->real_escape_string($_POST['noDepto']);

     $clave = $MySQLiconn->real_escape_string($_POST['clave']);
     $serie = $MySQLiconn->real_escape_string($_POST['ser']);
     $anio = $MySQLiconn->real_escape_string($_POST['anio']);
     $colo = $MySQLiconn->real_escape_string($_POST['colo']);
    
     
     $res=$MySQLiconn->query("SELECT * FROM departamento WHERE departamento_nombre = '$noDepto'");

     while($depto = mysqli_fetch_assoc($res)) :

      $iddepto = $depto['id'];

     endwhile;
  $SQL = $MySQLiconn->query("INSERT INTO equipo(equipo_clave, equipo_nombre, equipo_marca, equipo_modelo, equipo_manual, equipo_serie, equipo_ano, equipo_color, departamento_id) 
                                      VALUES('$clave','$nEqui','$marc','$model','$manu','$serie','$anio','$colo','$idDepto')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location: equipo.php");
}
?>