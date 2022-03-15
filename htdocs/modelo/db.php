<?php
     define('_HOST_NAME','localhost');
     define('_DATABASE_USER_NAME','root');
     define('_DATABASE_PASSWORD','');
     define('_DATABASE_NAME','mante');
      
     $MySQLiconn = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);
     mysqli_set_charset($MySQLiconn, "utf8");
  
     if($MySQLiconn->connect_error)
     {
       die("ERROR : -> ".$MySQLiconn->connect_error);
     }
?>