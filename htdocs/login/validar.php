<?php
include ('db.php');
session_start();
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$res=$MySQLiconn->query("SELECT * FROM persona WHERE persona_usuario='$usuario'");

     while($user = mysqli_fetch_assoc($res)) :

      $nombre = $user['persona_nombres'];
      $rol = $user['rol_id'];
      $departamento = $user['departamento_id'];
      $usua = $user['persona_usuario'];
     endwhile;



$_SESSION['persona_nombres']=$nombre;
$_SESSION['rol_id']=$rol;
$_SESSION['departamento_id']=$departamento;
$_SESSION['persona_usuario']=$usua;




$consulta="SELECT*FROM persona where persona_usuario='$usuario' and persona_contrasena='$contraseña'";
$resultado = mysqli_query($MySQLiconn,$consulta);
$filas=mysqli_num_rows($resultado);

// este ciclo es la secuencia para los privilegios
if($filas){
    header("location: ../vista/dashboard.php");
}else{
    ?>
    <?php
    include('login.php');
    ?>
    <script src="Sistema de Gestion de Mantenimiento/login/sweetalert2/sweetalert211.js"></script>
    <script>
    Swal.fire({
  icon: 'error',
  
  text: 'Error de Autenticación!',
  })</script>
  
    <?php

   
}

?>
          