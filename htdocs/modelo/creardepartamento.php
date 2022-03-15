<?php
date_default_timezone_set("America/Mexico_City");
include ('db.php');
session_start();

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
		
	 echo "Guardando";
     $nDepto = $MySQLiconn->real_escape_string($_POST['nDepto']);
    
  $SQL = $MySQLiconn->query("INSERT INTO departamento(departamento_nombre) VALUES('$nDepto')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location: departamento.php");
}

?>