<?php

Class Conectar{
    
 public static function conexion(){
        
$servidor = "localhost";
$user = "root";
$password = "";
$database = "eshop";
        
        $con = mysql_connect($servidor, $user, $password) or die('No se pudo conectar a la base de datos');
     mysql_select_db($database) or die ('No existe la base de datos');
      return $con;  
    }
}
/*Variables para conexion local*/


/*Variables para conexion remota
$servidor = "mysql5.000webhost.com";
$user = "a3817172_root";
$password = "chris123";
$database = "a3817172_shop";*/





?>