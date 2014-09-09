<?php

session_start();

if(isset($_SESSION["usuario"]))
{
   header("Location:dashboard.php");
}

if(isset($_POST['cmd_login']))
{
    logueo();
}
else if(isset($_POST['cmd_registro']))
{
    registro();
}


?>

<?php 

  function logueo()
  {
      $is_log = false;
      
      include_once 'config.php';
      
      $conn = mysql_connect($dbserver, $dbuser, $dbpass)
                or die("Error en la conexion de la base de datos ... ");
      
      $user = $_POST['username'];
      $pass = $_POST['password'];
      
      
      mysql_select_db($db , $conn);
      $result = mysql_query("Select * from info_profiles where usuario='$user' and password='$pass'" , $conn);
      
     if($data = mysql_fetch_array($result, MYSQL_ASSOC))
      {
          $is_log = true;
          
              $_SESSION['usuario'] = array(
                  $data["id_login"],
                  $data["usuario"],
                  $data["password"]
              );
        /*$result = mysql_query("Select * from usuario where id_login=" . $data["id_login"]  , $conn);
        if($data = mysql_fetch_array($result, MYSQL_ASSOC))
        {
            print_r($data);
        }*/
      }
      
      mysql_close($conn);
      if($is_log)
      {
       header("Location:dashboard.php");
      }
      
  }

  function registro()
  {
     header("Location:registro.php");
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>


<!--META-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>

<!--STYLESHEETS-->
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!--SCRIPTS-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<!--Slider-in icons-->
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>

</head>
<body>

<!--WRAPPER-->
<div id="wrapper">

	<!--SLIDE-IN ICONS-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<form name="login-form" class="login-form" action="#" method="post">

	<!--HEADER-->
    <div class="header">
    <!--TITLE--><h1>PERSONAL INFO</h1><!--END TITLE-->
    <!--DESCRIPTION--><span>PARA ENTRAR AL PANEL DE CONTROL PRIMERO DEBE LOGUEARSE</span><!--END DESCRIPTION-->
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
	<!--USERNAME--><input name="username" type="text" class="input username" value="Username" onfocus="this.value=''" /><!--END USERNAME-->
    <!--PASSWORD--><input name="password" type="password" class="input password" value="Password" onfocus="this.value=''" /><!--END PASSWORD-->
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer">
    <!--LOGIN BUTTON--><input type="submit" name="cmd_login" value="Login" class="button" /><!--END LOGIN BUTTON-->
    <!--REGISTER BUTTON--><input type="submit" name="cmd_registro" value="Register" class="register" /><!--END REGISTER BUTTON-->
    </div>
    <!--END FOOTER-->

</form>
<!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->

</body>
</html>