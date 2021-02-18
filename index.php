<!DOCTYPE html>
<html>
<head>
	<title>SEAS Inicio de Sesion</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/all.css">

</head>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/logo.png" id="icon" alt="User Icon" />
      <h1>Gestor de Archivos</h1>
    </div>

    <!-- Login Form -->
    <form method="post" id="frmLogin" onsubmit="return logear()">

      <input type="text" id="login" action="otraPagina.html" class="fadeIn second" name="login" placeholder="usuario" required="">

      <input type="password" id="password" class="fadeIn third" name="password" placeholder="contraseña" required="">
      <input type="submit" class="fadeIn fourth" value="Ingresar">

    </form >
     
    <div id="formFooter">
      <a class="underlineHover" href="registro3.php">Registrar</a>
      
      <!-- <a class="underlineHover" href="#" data-toggle="modal" data-target="#moral_o_fisica" >Registrar</a>-->

      

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
      url:"procesos/usuario/login/login.php",
       success:function(respuesta){
        //alert(respuesta);

        respuesta=respuesta.trim();
        if(respuesta==1){
           //window.location="vistas/inicio.php";
           window.location="vistas/validar.php";

        }else{

          swal("","Fallo al entrar!","error")
        }


       }

    });
    return false;

  }

  </script>



</body>
<script src="librerias/bootstrap4/bootstrap.min.js"></script>

</html>