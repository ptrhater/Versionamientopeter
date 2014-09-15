<?php

$user = null;
if(isset($_REQUEST['value']))
    $user = $_REQUEST['value'];
else return;

include_once 'config.php';
      
      $conn = mysql_connect($dbserver, $dbuser, $dbpass)
                or die("Error en la conexion de la base de datos ... ");
        
      mysql_select_db($db , $conn);
      $result = mysql_query("Select * from login where usuario='$user'", $conn);
      $count = mysql_num_rows($result);
      
      if($count >= 1){
          echo "<img src='images/cross.png' width='35' height='35' />";
          echo '<input type="hidden" name="cmd_exist" value="0" />';
      }
      else
      {
          echo "<img src='images/check.png' width='35' height='35' />";
          echo '<input type="hidden" name="cmd_exist" value="1" />';
      }
      
      mysql_close($conn);

?>