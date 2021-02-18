<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">

</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/logo.png" id="icon" alt="User Icon" />
      <h1>Administración</h1>
    </div>

    <!-- Login Form -->
    <form method="post" id="frmLogin" onsubmit="return logear()">
      <input type="text" id="login" action="otraPagina.html" class="fadeIn second" name="login" placeholder="username" required="">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required="">
      <input type="submit" class="fadeIn fourth" value="Log In">

    </form >
       <!--<button class="btn btn-primary" onclick="location.href='UPFILE/index2.php'">ENTRAR</button>-->
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <!--<a class="underlineHover" href="registro2.php">Registrar</a>-->
    </div>

  </div>
</div>
<script src="librerias/jquery-3.5.1.min.js"></script>
<script src="librerias/sweetalert.min.js"></script>
<script type="text/javascript">

  function  logear() {
    $.ajax({
      type:"POST",
      data:$('#frmLogin').serialize(),
      url:"procesos/usuario/login/loginAdministrador.php",
       success:function(respuesta){
        //alert(respuesta);

        respuesta=respuesta.trim();
        if(respuesta==1){
           window.location="vistas/gestorAdministracion.php";

        }else{

          swal("","Fallo al entrar, Revise Usuario y Password!","error")
        }


       }

    });
    return false;

  }

  </script>



</body>
</html>