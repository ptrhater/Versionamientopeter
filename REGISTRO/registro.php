
<?php

 if(isset($_POST['cmd_registro'])) 
 {
     
     $nombre = $_POST['txtedad'];
     $apellido = $_POST['txtapellido'];
     $edad = $_POST['txtnombre'];
     $user = $_POST['username'];
     
     if(seguridad())
     {
         registrar();
     }
 }

?>

<?php

function seguridad()
{
    
  
    $pass_ok = $_POST['pass'];
    
    
    if(empty($nombre) 
            || empty($apellido) 
            || empty($edad)
            || empty($user) )
    {
        echo "<p><b>Todos los campos son obligatorios...</b></p>";
        return false;
    }
   

}

function registrar()
{
    header("Location:index.php");
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
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
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

 <script>
            
            function __exist(valor)
            {
                  var parametros = {
                        "value" : valor
                    };

                   $.ajax({
                       type: "POST",
                       url: "user_exist.php",
                       data: parametros,
                       beforeSend:function(){
                            //aca va todo antes del envio request.
                            //por ejemplo puede ir un loading
                       },
                       success: function(valor){
                           $("#div_exist").html(valor);
                       },
                       error: function()
                       {
                           $("#div_exist").html("Opps !! ha ocurrido un error en el proceso");
                       }
                   });
            }
            
             
            function __password()
            {
              
                var val1 = document.getElementById("password").value;
                var val2 = document.getElementById("rep_password").value;
                if(val1 == val2)
                {
                    document.getElementById("pass_ok").innerHTML = "<img src='images/check.png' width='35' height='35' />";
                    document.getElementById("pass").value = "0";
                }
                else
                {
                    document.getElementById("pass_ok").innerHTML = "<img src='images/cross.png' width='35' height='35' />";
                    document.getElementById("pass").value = "1";
                }
            }
            
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
    <!--TITLE--><h1>REGISTRO PERSONAL INFO</h1><!--END TITLE-->
    <!--DESCRIPTION--><span>SE PARTE DE NOSOTROS REGISTRATE YA</span><!--END DESCRIPTION-->
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
        <p>
        <table>
           <tr>
           <td><!--USERNAME--><!--END USERNAME-->
          <input name="username" type="text" class="input username" value="Username" onfocus="this.value=''" onkeyup="__exist(this.value);"/></td>
          <td><div id="div_exist"></div></td>
           </tr>
        </table>
          
        </p>
        <p>&nbsp; </p>
      
        <p>
          <input name="txtnombre" type="text" class="input username"  placeholder="Nombre" onfocus="this.value=''" />
        </p>
      <p>&nbsp;</p>
        <p>
          <input name="txtapellido" type="text" class="input username"  placeholder="Apellido" onfocus="this.value=''" />
        </p>
      <p>&nbsp;</p>
        <p>
          <input name="txtedad" 
                 type="text" 
                 class="input username"  
                 placeholder="Edad" onfocus="this.value=''" />
          <!--PASSWORD--><input
              name="password" 
              type="password" 
              id="password"
              class="input password"
              placeholder="Password" 
              onfocus="this.value=''" /><!--END PASSWORD-->
          <table>
              <tr>
                  <td>
                        <input name="rep_password" 
                            type="password" 
                            id="rep_password"
                            class="input password" 
                            placeholder="Repetir Password"  
                            onkeyup="__password();"/>
                  </td>
                  <td>
                      <div id="pass_ok"></div>
                  </td>
              </tr>
          </table>
          <input type="hidden" id="pass" name="pass" value="" />
        </p>
    
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer">
    <!--REGISTER BUTTON--><input type="submit" name="cmd_registro" value="Resgistrar" class="register" /><!--END REGISTER BUTTON-->
    </div>
    <!--END FOOTER-->

</form>
<!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->

</body>
</html>