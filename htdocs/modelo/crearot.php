<?php
date_default_timezone_set("America/Mexico_City");
include ('db.php');
session_start();

if(!empty($_POST['fac'])) {
  
  $fac = $MySQLiconn->real_escape_string($_POST['fac']);
  $can = $MySQLiconn->query("SELECT * FROM orden_solicitud WHERE id LIKE '$fac'");
}
/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
		
	 echo "Guardando";
     $area = $MySQLiconn->real_escape_string($_POST['depto']);
     $descrip = $MySQLiconn->real_escape_string($_POST['InputDescripcion']);
    
     // COndicional para validad el genero
     if (isset($_POST['paro'])){
      $paro = $_POST['paro'];// Muestra el CheckBox marcado.
     }
     $equipo = $MySQLiconn->real_escape_string($_POST['InputEquipo']);
     $fecha = $MySQLiconn->real_escape_string(date("Y-m-d"));
     $hora = $MySQLiconn->real_escape_string(date("H:i:s"));
     $idEstado = $MySQLiconn->real_escape_string(1);
     $tipo = $MySQLiconn->real_escape_string(1);
     $recibe = $MySQLiconn->real_escape_string('');
     $nombre = $MySQLiconn->real_escape_string($_SESSION['persona_nombres']);



      $res=$MySQLiconn->query("SELECT * FROM equipo WHERE equipo_nombre = '$equipo'");
      while($equi = mysqli_fetch_assoc($res)) :
        $idequipo = $equi['id'];
      endwhile;

      $re=$MySQLiconn->query("SELECT * FROM departamento WHERE departamento_nombre = '$area'");
      while($depto = mysqli_fetch_assoc($re)) :
        $iddepto = $depto['id'];
      endwhile;

      
      $rs=$MySQLiconn->query("SELECT * FROM persona WHERE persona_nombres = '$nombre'");
      while($nom = mysqli_fetch_assoc($rs)) :
        $idpersona = $nom['id'];
      endwhile;

      
  $SQL = $MySQLiconn->query("INSERT INTO orden_solicitud(departamento_id, orden_descripcion, orden_paro, orden_fecha, orden_hora,
  orden_recibe_persona, equipo_id, estado_id, persona_id, tipo_id) 
                     VALUES('$iddepto','$descrip','$paro','$fecha','$hora','$recibe','$idequipo','$idEstado','$idpersona','$tipo')");
  
  if(!$SQL)
  {
   
   echo $MySQLiconn->error;
  } 
  header("Location:mantenimiento.php");
}
/* Codigo para Editar Datos */
if(isset($_POST['finalizar'])){
 
  
    $idorden = $_GET['id'];
    $cHerra = $_POST['cHerra'];
    $dTra = $_POST['dTra'];
    $fIni = $_POST['fIni'];
    $fFin = $_POST['fFin'];
    $eje = $_POST['eje'];
    $re=$_POST['re'];
    $id = $idorden;
    $fi = $MySQLiconn->real_escape_string(3);
    $nombre = $MySQLiconn->real_escape_string($_SESSION['persona_nombres']);

    $rs=$MySQLiconn->query("SELECT * FROM persona WHERE persona_nombres = '$nombre'");
    while($nom = mysqli_fetch_assoc($rs)) :
      $idpersona = $nom['id'];
    endwhile;
    $SQL = $MySQLiconn->query("INSERT INTO orden_trabajo(id,num_herramienta,desripcion_trabajo, hora_inicio, hora_fin, ejecutantes, refacciones, trabajo_recibe_persona, orden_id, persona_id) 
                                                  VALUES('$id','$cHerra','$dTra','$fIni','$fFin','$eje','$re',null,'$idorden','$idpersona') ");
    $SQLi = $MySQLiconn->query("UPDATE orden_solicitud SET estado_id = '$fi' WHERE orden_solicitud.id = '$idorden'");
   
    //if-else statement in executing our query
    

    if(!$SQL)
    {
     echo $MySQLiconn->error;
    } 
    if(!$SQLi)
    {
     echo $MySQLiconn->error;
    } 
    header("Location:dashboard.php");
  }

if(isset($_POST['procesar']))
{
		
	 echo "Guardando";
   $id = $_GET['id'];
     $idEstado = $MySQLiconn->real_escape_string(2);
     

  $SQL = $MySQLiconn->query("UPDATE orden_solicitud SET estado_id = '$idEstado' WHERE orden_solicitud.id = '$id'");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location:dashboard.php");
}
?>