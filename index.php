<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/all.css">

</head>
<body>


      <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="moral_o_fisica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
<h5 class="modal-title"  id="exampleModalLabel"><i class="fas fa-exclamation-circle"></i> Sigue las indicaciones.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      

   <h5>Click sobre el boton verde, si eres una persona Fisica. <i class="fa fa-hand-o-down"></i> </h5>
   <div class="col-md-14 text-center">
 <!-- <a href="registro2.php" role="button"   class="btn btn-success  popover-test" title="Fisica" data-content="Popover body content is set in this attribute.">  <i class="fa fa fa-user"></i>          Registrar Persona Fisica</a> </div>-->

   <a href="registro3.php" role="button"   class="btn btn-success  popover-test" title="Fisica" data-content="Popover body content is set in this attribute.">  <i class="fa fa fa-user"></i>          Registrar Persona Fisica</a> </div>
  <hr>

   <h5>Click sobre el boton azul, si eres una persona Moral.</h5>
   <div class="col-md-14 text-center">
 <!-- <a href="registro2_moral.php" role="button" class="btn btn-primary  popover-test" title="Moral" data-content="Popover body content is set in this attribute."><i class="fas fa-building"></i> Registrar Persona Moral</a> </div>-->

   <a href="registro3.php" role="button" class="btn btn-primary  popover-test" title="Moral" data-content="Popover body content is set in this attribute."><i class="fas fa-building"></i> Registrar Persona Moral</a> </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cerrar</button>
      
      </div>
    </div>
  </div>
</div>
      

















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
       <!--<button class="btn btn-primary" onclick="location.href='UPFILE/index2.php'">ENTRAR</button>-->
    <!-- Remind Passowrd -->
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