<!DOCTYPE html>
<html>
<head>
<title>Registro De Persona Fisica</title>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="librerias/jquery-ui-1.12.1/jquery-ui.theme.css">
 <link rel="stylesheet" type="text/css" href="librerias/jquery-ui-1.12.1/jquery-ui.css">
 <link rel="stylesheet" type="text/css" href="css/registro.css">
  <link rel="stylesheet" type="text/css" href="css/toastr.css">



</head>
<body>

	
<div align="center" class="container">
  <h1 style="text-align:center">Registro de Usuario</h1>
      <hr>
    <div class="panel-body">
      <br />

      <form name="frmRegistro" id="frmRegistro" 
        class="form-horizontal" method="post" onsubmit="return agregarUsuarioNuevo()" >

        <div class="row polaroid" style="background-color: #F8F9F9">


          <div class="col-sm-4">
            <div class="form-group">
              <label for="validate-text" class="titulosRegistro">Nombre:</label>
              <div class="input-group">
                <input class="form-control" name="nombre" id="nombre"
                 
                  title="Solo Letras. Tamaño mínimo: 3. Tamaño máximo: 50"
                  required="required">
              </div>
            </div>
          </div>



        <div id="adl" class="col-sm-4">
                
              <div class="form-group">
                <label for="validate-text" class="titulosRegistro">Apellido
                  Paterno:</label>
                <div class="input-group">
                  <input type="text" name="paterno" value="" id="paterno" class="form-control" title="Solo Letras. Tamaño mínimo: 3. Tamaño máximo: 50"  >
                </div>
              </div>          
          
        </div>


         <div id="adl2" class="col-sm-4" >
          
              <div class="form-group">
                <label for="validate-text" class="titulosRegistro">Apellido
                  Materno:</label>
                <div class="input-group">
                  <input type="text" name="materno" value="" id="materno" class="form-control" title="Solo Letras. Tamaño mínimo: 3. Tamaño máximo: 50" >
                </div>
              </div>
      
         </div>




          <div class="col-sm-4">
            <div class="form-group">
              <label  class="titulosRegistro">Fecha de Nacimiento:</label>
              <div id="divDate" class="input-group date">

                  <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control"  required="" readonly="" >

                <div class="input-group-addon">
                 <!-- <i class="fa fa-calendar" style="font-size: 24px"></i>-->
                </div>
              </div>
              <!--<div class="help-block with-errors"></div>-->
            </div>
          </div>


          <div class="col-sm-4">
            <div class="form-group">
              <label for="validate-text" class="titulosRegistro">Correo
                Electrónico:</label>
              <div class="input-group">
                <!--<input type="text" name="email" value="" id="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>-->
                <input name="correo" id="correo" class="form-control"
                  pattern="[a-z0-9._%+-]+@(?!yahoo|YAHOO)[a-z0-9.-]+\.[a-z]{2,3}$"
                  required="required" />
              </div>
            </div>
          </div>


          <div class="col-sm-4">
            <div class="form-group">
              <label for="validate-text" class="titulosRegistro">Confirmación
                de Correo:</label>
              <div class="input-group">
                <!--<input type="text" name="email" value="" id="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>-->
                <input name="ConfirmEmail" id="ConfirmEmail"
                  class="form-control"
                  pattern="[a-z0-9._%+-]+@(?!yahoo|YAHOO)[a-z0-9.-]+\.[a-z]{2,3}$"
                  required="required" />
              </div>
            </div>
          </div>
        

<div class="col-sm-4">
   <div class="form-group">

        <label for="validate-text" class="titulosRegistro">Nombre de Usuario</label>
          <div class="input-group">
        <input type="text" name="usuario" id="usuario" class="form-control" required="" >
      </div>
     </div>
   </div>

       <div class="col-sm-4">
        <div class="form-group">

        <label for="validate-text" class="titulosRegistro">Password o Contraseña</label>
         <div class="input-group">
        <input type="password" name="password" id="password" class="form-control" required="" class="form-control"  >
          </div>
         </div>
        </div>


     <div class="col-sm-4">
          <div class="form-group">

        <label for="validate-text" class="titulosRegistro">Confirmar Contraseña</label>
         <div class="input-group">
        <input type="password" name="password1" id="password1" class="form-control" required="" class="form-control"  >
          </div>
         </div>
        </div>






</div><!-- este div el la tereminacion de row polaroid este el marco de color mate -->




        <br>
        <div class="row pading">
         <!--<div class="row">-->
          <div class="col-sm-6 text-left">
              <button class="btn btn-primary btn-lg">Registrar</button>
          </div>
          <div class="col-sm-6 text-right">
            <a href="index.php" class="btn btn-success btn-lg"   >Login</a>
          </div>
        
         </div> 


      </form><!--termina el form-->
</div>
</div>

      
   
  <br>
  <br>
  <br>
  <br>



<!--  ////////%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<!--  ////////%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<!--  ////////%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<!--  ////////%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

  
<script src="librerias/jquery-3.5.1.min.js"></script>
<script src="librerias/jquery-ui-1.12.1/jquery-ui.js"></script>
<script src="librerias/sweetalert.min.js"></script>
<script src="js/fisica-moral.js"></script>
<script src="js/toastr.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {

    // show when page load
    //toastr.info('Page Loaded!');
     toastr["error"]("Verificar que todos los campos se encuentren debidamente colocados.",'  SEAS', {
    timeOut : 7000,
     closeButton: true
  });

     toastr["success"]("¡ Revisar que el RFC este bien escrito, una vez enviada la información, no hay cambio de este dato. !",'  SEAS', {
    timeOut : 7000,
     closeButton: true
  });




});



  
    $(".readonly").on('keydown paste', function(e){
        e.preventDefault();
    });




$(function(){
   var fechaA= new Date();
   var yyyy=fechaA.getFullYear();
$("#fechaNacimiento").datepicker({
  changeMonth:true,
  changeYear:true,
  yearRange:'1900:'+ yyyy,
  dateFormat: "dd-mm-yy"

});
});

 function  agregarUsuarioNuevo(){
   $.ajax({
     method:"POST",
     data: $('#frmRegistro').serialize(),
     url:"procesos/usuario/registro/agregarUsuario3.php",
     success: function(respuesta){
     // alert(respuesta);
       respuesta = respuesta.trim();

       if (respuesta==1){
        $("#frmRegistro")[0].reset();
        swal(":D","agregado con exito!","success");
          location.href ="index.php";

       }else if(respuesta == 2){
                swal("Este usuario ya existe, porfavor escribe otro!!");

       }else if(respuesta == 3){
                swal("Este correo ya existe, porfavor escribe otro!!");

       }




       else{

        swal(":(","Fallo en agregar!","error");
       }
       console.log(respuesta);
    
     }
     
   });
   
   return false;

 }

      function traer() {
      var endpoint_sepomex  = "http://api-sepomex.hckdrk.mx/query/";
      var method_sepomex = 'info_cp/';
      
      var cp = $("#cp").val();
      console.log(cp);
      var variable_string = '?type=simplified';
      var url = endpoint_sepomex + method_sepomex + cp + variable_string;
      
      $.get( url ,function(data){
        
      console.log(data);
      //este a partir de aqui empezamos a programar
      var content = data['response'] || [];
    
      $('#Localidad').val(content['ciudad']);
      //$('#entidad').val(content['estado']);
      
      $('#listamunicipio').val(content['municipio']);
      //$('#asentamiento').val(content['tipo_asentamiento']);
      
      carga_asentamientos(content['asentamiento']);
      })
      //alert("HOLA MUNDO");    
      } 
    
    function carga_asentamientos(list){
      var select = document.getElementsByName('clistacolonia')[0];

      for (value in list) {
        var option = document.createElement("option");
        option.text = list[value];
        select.add(option);
      }
    }




</script>

<script>
 $.datepicker.regional['es'] = {
 closeText: 'Cerrar',
 prevText: '< Ant',
 nextText: 'Sig >',
 currentText: 'Hoy',
 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
 weekHeader: 'Sm',
 dateFormat: 'dd/mm/yy',
 firstDay: 1,
 isRTL: false,
 showMonthAfterYear: false,
 yearSuffix: ''
 };
 $.datepicker.setDefaults($.datepicker.regional['es']);
$(function () {
$("#fechaNacimiento").datepicker();
});
</script>
</body>
</html>