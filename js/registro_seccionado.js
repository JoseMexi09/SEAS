



$(document).ready(function() {

     toastr["error"]("Verificar que todos los campos se encuentren debidamente colocados.",'  SEAS', {
    timeOut : 9000,
     closeButton: true
  });

     toastr["success"]("¡ Revisar que el RFC este bien escrito con su Homoclave, una vez enviada la información, no hay cambio de este dato. !",'  SEAS', {
    timeOut : 7000,
     closeButton: true
  });




});
//capchat los optios

///cambia los input files

 function cambiar_curriculum (){
    var pdrs = document.getElementById('curriculum').files[0].name;
    document.getElementById('info3').innerHTML = pdrs;
}

 
 function cambiar_conts (){
    var pdrs = document.getElementById('com_domi').files[0].name;
    document.getElementById('info').innerHTML = pdrs;
}

 function cambiar_inhabil (){
    var pdrs = document.getElementById('con_inhabil').files[0].name;
    document.getElementById('info2').innerHTML = pdrs;
}

 function cambiar_acta (){
    var pdrs = document.getElementById('acta_c').files[0].name;
    document.getElementById('info5').innerHTML = pdrs;
}




/////FUNCIONES DODE SE ENVIAN LOS DATOS POR POST PARA SER EJECUTADOS HACIA LA BD


//FUNCTION 
function  agregar_usuario_primera_seccion(){
  //alert(“Enviando el formulario”);
   $.ajax({
     method:"POST",
     data: $('#frmRegistro').serialize(),
     url:"../procesos/usuario/registro/reg_fisica_contratista.php",
     success: function(respuesta){
     //alert(respuesta);
         respuesta = respuesta.trim();

         if (respuesta==1){
        $("#frmRegistro")[0].reset();
        swal(":D","Sus datos fueron agregados con exito!","success");

      


       }else if(respuesta == 2){
                swal("Este usuario ya existe en la base de datos");

       }else{

        swal(":(","Fallo en agregar!","error");
       }

       console.log(respuesta);

     
    
     }
     
   });
   
   return false;

 }
/////////////////////////////agregando personas///////////////////////////
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////

function agregar_usuario_fisico() {
	var error_e = '';
if ($('#especialidad').val().trim() === '') {
        //alert('Debe seleccionar una opción');
		 error_error_e = 'Debe seleccionar una opcion.';
		  $('#errorEspe').text(error_error_e);
		  return false;

    }else{

//si es full inserta


  var formData = new FormData($( "#frmRegistro" )[0]);  
     $.ajax({  
          url: '../procesos/usuario/registro/reg_PersonaFisica.php' ,  
          type: 'POST',  
          data: formData,  
          async: false,  
          cache: false,  
          contentType: false,  
          processData: false,  
		    
		  
	  success: function(respuesta){
      //alert(respuesta);
       //respuesta = respuesta.trim();

       if (respuesta==1){
        //$("#frmRegistro")[0].reset();
       swal(":D","agregado con exito!","success");
	   location.href ="../vistas/subInicio.php";
	   
	   //location.href ='../vistas/subInicio.php';
	    //alert('Datos Guardados con exito!!');
		 

       }else{

        swal(":(","Fallo en agregar!","error");
       }
       console.log(respuesta);
    
     }
		  
		  
		  
		  
     });  //termina ajax
	   return false;
	   
	}//termina else full
}



function agregar_usuario_moral() {
	
//alert("1111111");

if ($('#especialidad').val().trim() === '') {
        //alert('Debe seleccionar una opción');
		 error_error_e = 'Debe seleccionar una opcion.';
		  $('#errorEspe').text(error_error_e);
		  return false;

    }else{

  var formData = new FormData($( "#frmRegistro" )[0]);  
     $.ajax({  
          url: '../procesos/usuario/registro/reg_PersonaMoral.php' ,  
          type: 'POST',  
          data: formData,  
          async: false,  
          cache: false,  
          contentType: false,  
          processData: false,  
		  
          //////////success: function (returndata) {  
              ////////alert(returndata); 
              //////// alert('Datos Guardados con exito !!');			  
         ///////// },  
         //////////// error: function (returndata) {  
		   //////////swal(":(","Fallo en agregar!","error");
              //alert(returndata);  
			 
      
          //////////}  
		success: function(respuesta){
      //alert(respuesta);
       //respuesta = respuesta.trim();

       if (respuesta==1){
        //$("#frmRegistro")[0].reset();
       swal(":D","agregado con exito!","success");
	   location.href ="../vistas/subInicio.php";
	   
	   //location.href ='../vistas/subInicio.php';
	    //alert('Datos Guardados con exito!!');
		 

       }else{

        swal(":(","Fallo en agregar!","error");
       }
       console.log(respuesta);
    
     }
		  

		  
		  
		  
     });  //end ajax
	   return false;
	   
	   }//termina else full


}





////////////////programacion Boton next 1/////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////




  var error_rfc = '';
  var error_mobile_no = '';
  var error_origen = '';
  var error_pais = '';

 
  var filter = /^[A-Z&Ñ]{3,4}[0-9]{2}(0[1-9]|1[012])(0[1-9]|[12][0-9]|3[01])[A-Z0-9]{2}[0-9A]/;
  var mobile_validation = /^\d{10}$/;
 
 $('#next1').click(function(){
	 //VALIDAR ORIGEN
	 if ($('#listOrigen').val().trim() === '') {
        //alert('Debe seleccionar una opción');
		 error_origen = 'Debe seleccionar una opcion.';
		  $('#errorOrigen').text(error_origen);

    } else {
        //alert('Campo correcto');
		 error_origen = '';
    $('#errorOrigen').text(error_origen);
    }
	
		 //VALIDAR PAIS
	 if ($('#listPais').val().trim() === '') {
        
		 error_pais = 'Debe seleccionar una opcio.n';
		  $('#errorPais').text(error_pais);

    } else {
        
		 error_pais = '';
    $('#errorPais').text(error_pais);
    }
	 
	 
	//alert("mio entre");
	
	/////////////RFC
	 if($.trim($('#rfc').val()).length == 0)
  {
   error_rfc = 'El campo RFC es requerido.';
   $('#errorRfc').text(error_rfc);
   $('#rfc').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#rfc').val()))
   {
    error_rfc = 'RFC invalido.';
    $('#errorRfc').text(error_rfc);
    $('#rfc').addClass('has-error');
   }
   else
   {
	   
    error_rfc = '';
    $('#errorRfc').text(error_rfc);
    $('#rfc').removeClass('has-error');
   }
  }
  
   /////////////////////cel
  if($.trim($('#num_tel').val()).length == 0)
  {
   error_mobile_no = 'El numero telefono es requerido.';
   $('#error_mobile_no').text(error_mobile_no);
   $('#num_tel').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#num_tel').val()))
   {
    error_mobile_no = 'Numero de Telefono invalido.';
    $('#error_mobile_no').text(error_mobile_no);
    $('#num_tel').addClass('has-error');
   }
   else
   {
    error_mobile_no = '';
    $('#error_mobile_no').text(error_mobile_no);
    $('#num_tel').removeClass('has-error');
   }
  }
  
  
if(error_rfc != '' || error_mobile_no != '' || error_origen  != '' || error_pais)
  {
   return false;
   alert("1111111");
  }  
  
  else
 {
          //esto era si agregabaaceptaba los formularios
		 //agregar_usuario_primera_seccion();
	   //$('#list_info_users').removeClass('active active_tab1');
	   //$('#list_info_users').removeAttr('href data-toggle');
	   //$('#Info_User_content').removeClass('active');
	   //$('#list_info_users').addClass('inactive_tab1');
	   //$('#list_info_dir').removeClass('inactive_tab1');
	   //$('#list_info_dir').addClass('active_tab1 active');
	   $('#list_info_dir').attr('href', '#info_dir_content');
	  // $('#list_info_dir').attr('data-toggle', 'tab');
	   //$('#info_dir_content').addClass('active in');
  
  }
  
 });
 
 ////////////////programacion Boton next 2/////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////





  var error_calle = '';
  
  
  var error_cons = '';
  var error_ext='';
  var error_int='';
   var error_cp='';
    var error_ase='';
	  var error_muni='';
	  var error_edo='';
	  var error_local='';
      var error_col='';



 
 $('#next2').click(function(){ 
	//alert("2");
	
if($.trim($('#calle').val()).length == 0)
  {
   error_calle = 'El campo es requerido.';
   $('#errorCalle').text(error_calle);
  
  }else{
	   
    error_calle = '';
    $('#errorCalle').text(error_calle);
  
   }
   //ext
   
   if($.trim($('#exterior').val()).length == 0)
  {
   error_ext = 'El campo es requerido.';
   $('#errorExt').text(error_ext);
  
  }else{
	   
    error_ext= '';
    $('#errorExt').text(error_ext);
  
   }
   
   
   
   
      //int
   
   if($.trim($('#interior').val()).length == 0)
  {
   error_int = 'El campo es requerido.';
   $('#errorInt').text(error_int);
  
  }else{
	   
    error_int= '';
    $('#errorInt').text(error_int);
  
   }
   //cp
    if($.trim($('#cp').val()).length == 0)
  {
   error_cp = 'El campo es requerido';
   $('#errorCp').text(error_cp);
  
  }else{
	   
    error_cp= '';
    $('#errorCp').text(error_cp);
  
   }
   
   
   	 //VALIDAR ase
	 if ($('#listAsentamiento').val().trim() === '') {
        
		 error_ase = 'Debe seleccionar una opcion.';
		  $('#errorAse').text(error_ase);

    } else {
        
		 error_ase = '';
    $('#errorAse').text(error_ase);
    }
	
	
	  //edo
    if($.trim($('#Edo').val()).length == 0)
  {
   error_edo = 'El campo es requerido.';
   $('#errorEdo').text(error_edo);
  
  }else{
	   
    error_edo= '';
    $('#errorEdo').text(error_edo);
  
   }
   
   //municipio
    if($.trim($('#listamunicipio').val()).length == 0)
  {
   error_muni = 'El campo es requerido.';
   $('#errorMuni').text(error_muni);
  
  }else{
	   
    error_muni= '';
    $('#errorMuni').text(error_muni);
  
   }
    //localidad
    if($.trim($('#Localidad').val()).length == 0)
  {
   error_local = 'El campo es requerido.';
   $('#errorLocal').text(error_local);
  
  }else{
	   
    error_local= '';
    $('#errorLocal').text(error_local);
  
   }
   
   		 //VALIDAR colonia
	 if ($('#clistColonia').val().trim() === '') {
        
		 error_col = 'Debe seleccionar una opcion.';
		  $('#errorCol').text(error_col);

    } else {
        
		 error_col = '';
    $('#errorCol').text(error_col);
    }
	 
   
   
   
   
	/////////////file
	if(document.frmRegistro.com_domi.value==""){
			//alert("suba c");
		error_cons = 'Porfavor, seleccione una constancia!';
		  $('#errorCons').text(error_cons);
		}else {
        
		 error_cons = '';
    $('#errorCons').text(error_cons);
    }
	
  
   /////////////////////cel
if(error_cons != '' || error_calle != '' || error_ext != ''|| error_cp != '' || error_ase!= ''|| error_edo != ''|| error_muni != ''|| error_local != '' ||error_col != ''|| error_int!= '' )
  {
   return false;
   alert("1111111");
  }  
  
  else
 {
        
  }
  
 });
 
 
  
 ////////////////programacion Boton next 3/////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////


  var error_razon = '';
  var error_ref = '';
    var error_fech_exp = '';
  
  var error_inhabil = '';


 
 $('#next3').click(function(){ 
	//alert("3");
	
if($.trim($('#razon_contancia').val()).length == 0)
  {
   error_razon = 'El campo es requerido.';
   $('#errorRazon').text(error_razon);
  
  }else{
	   
    error_razon = '';
    $('#errorRazon').text(error_razon);
  
   }
   /////refer
   if($.trim($('#num_ref').val()).length == 0)
  {
   error_ref = 'El campo es requerido.';
   $('#errorRef').text(error_ref);
  
  }else{
	   
    error_ref = '';
    $('#errorRef').text(error_ref);
  
   }
   ///
   /////fecha exp
   if($.trim($('#fechaExp').val()).length == 0)
  {
   error_fech_exp = 'El campo es requerido.';
   $('#errorExp').text(error_fech_exp);
  
  }else{
	   
    error_fech_exp = '';
    $('#errorExp').text(error_fech_exp);
  
   }
	/////////////file
	if(document.frmRegistro.con_inhabil.value==""){
			//alert("suba c");
		error_inhabil = 'Porfavor, seleccione un archivo!';
		  $('#errorInhabil').text(error_inhabil);
		}else {
        
		 error_inhabil = '';
    $('#errorInhabil').text(error_inhabil);
    }
	
  
   /////////////////////GRAL
if(error_inhabil != '' || error_razon != ''|| error_ref != ''|| error_fech_exp != '' )
  {
   return false;
   alert("1111111");
  }  
  
  else
 {
        
  }
  
 });
 

 ////////////////programacion Boton next 4/////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////
  var error_experiencia = '';
  
  
  var error_curriculum = '';
  var error_emple = '';
  var error_sector= '';
  var error_giro= '';
    var error_search= '';


 
 $('#next4').click(function(){ 
	//alert("4");	
	//AÑOS EXP
if($.trim($('#experiencia').val()).length == 0)
  {
   error_experiencia = 'El campo es requerido.';
   $('#erroExp').text(error_experiencia);
  
  }else{
	   
    error_experiencia = '';
    $('#erroExp').text(error_experiencia);
  
   }
   //EMPLEADOS
   
   if($.trim($('#num_empleados').val()).length == 0)
  {
   error_emple = 'El campo es requerido.';
   $('#erroEmpleado').text(error_emple);
  
  }else{
	   
    error_emple = '';
    $('#erroEmpleado').text(error_emple);
  
   }
   	 //VALIDAR sector
	 if ($('#sector_empresarial').val().trim() === '') {
        
		 error_sector = 'Debe seleccionar una opcion.';
		  $('#errorSector').text(error_sector);

    } else {
        
		 error_sector = '';
    $('#errorSector').text(error_sector);
    }
	
	//VALIDAR giro
	 if ($('#Giro').val().trim() === '') {
        
		 error_giro = 'Debe seleccionar una opcion.';
		  $('#errorGiro').text(error_giro);

    } else {
        
		 error_giro = '';
    $('#errorGiro').text(error_giro);
    }
	
   //search
if($.trim($('#search').val()).length == 0)
  {
   error_search = 'El campo es requerido.';
   $('#errorSearch').text(error_search);
  
  }else{
	   
    error_search = '';
    $('#errorSearch').text(error_search);
  
   }
   //EMPLEADOS
	
	
	/////////////file
	if(document.frmRegistro.curriculum.value==""){
			//alert("suba c");
		error_curriculum = 'Porfavor, seleccione un archivo!';
		  $('#errorCu').text(error_curriculum);
		}else {
        
		 error_curriculum = '';
    $('#errorCu').text(error_curriculum);
    }
	
  
   /////////////////////gral
if(error_curriculum != '' || error_experiencia!= '' || error_emple!= '' || error_sector!= ''|| error_giro!= '' || error_search!= '')
  {
   return false;
   alert("1111111");
  }  
  
  else
 {
        
  }
  
 });
////////////////programacion Boton next 5/////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////
  var error_compa= '';
  var error_appc = '';
  var error_apmc = '';
  var error_idec = '';
  var error_numic = '';
  var error_tp= '';
 $('#next5').click(function(){ 
	//alert("4");	
	
	
	
	
	
   var radiovalue=document.frmRegistro.chkPassPort.value;
  // alert("Valor seleccionado: " + radiovalue);
  if (radiovalue=='si' || radiovalue==0 ){
	 
	 
  if($.trim($('#nombre_compareciente').val()).length == 0)
  {
   error_compa = 'El campo es requerido.';
   $('#errorCompa').text(error_compa);
  
  }else{
	   
    error_compa = '';
    $('#errorCompa').text(error_compa);
  
   }
   //app   	 
  if($.trim($('#paterno_compareciente').val()).length == 0)
  {
   error_appc = 'El campo es requerido.';
   $('#errorAppc').text(error_appc);
  
  }else{
	   
    error_appc = '';
    $('#errorAppc').text(error_appc);
   }
    //apmc  	 
  if($.trim($('#materno_compareciente').val()).length == 0)
  {
   error_apmc = 'El campo es requerido.';
   $('#errorApmc').text(error_apmc);
  
  }else{
	   
    error_apmc = '';
    $('#errorApmc').text(error_apmc);
   }
   
     //numero identificacion	 
  if($.trim($('#num_identi').val()).length == 0)
  {
   error_numic = 'El campo es requerido.';
   $('#errorNi').text(error_numic);
  
  }else{
	   
    error_numic = '';
    $('#errorNi').text(error_numic);
   }
   
   
     //tipo poder	 
  if($.trim($('#tipo_poder').val()).length == 0)
  {
   error_tp = 'El campo es requerido.';
   $('#errorTp').text(error_tp);
  
  }else{
	   
    error_tp = '';
    $('#errorTp').text(error_tp);
   }
   
   
		 //VALIDAR identificacion
	 if ($('#Indentificacion').val().trim() === '') {
        
		 error_idec = 'Debe seleccionar una opcion.';
		  $('#errorIde').text(error_idec);

    } else {
        
		 error_idec = '';
    $('#errorIde').text(error_idec);
    }

  
   /////////////////////
if(error_compa != ''|| error_appc != ''|| error_apmc != ''||error_numic != '' ||error_tp != ''||error_idec != '')
  {
   return false;
   alert("1111111");
  }  
  
  else
 {
        
  }
	  
	 
	//////////////else de radio 
	  
  }else{
	  //por si se equivocael usuario y ya habia puesto algo en los inputs
	 error_compa = '';
    $('#errorCompa').text(error_compa);
	 document.getElementById("nombre_compareciente").value = "";
	 
	   error_ = '';
    $('#errorAppc').text(error_);
	 document.getElementById("paterno_compareciente").value = "";
	 

    $('#errorApmc').text(error_);
	 document.getElementById("materno_compareciente").value = "";
	 
	$('#errorNi').text(error_);
	 document.getElementById("num_identi").value = "";
	 
	 $('#errorTp').text(error_);
	 document.getElementById("tipo_poder").value = "";
	 
	  $('#errorIde').text(error_);
	 $('#Indentificacion').val($('#Indentificacion > option:first').val());
	 
	 
  }
  
	  
  
 });
 
 ////////////////programacion Boton next 5 solo para MORAL/////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////
  var error_compaM= '';
  var error_appcM = '';
  var error_apmcM = '';
  var error_idecM = '';
  var error_numicM = '';
  var error_tpM= '';
 $('#next5MoralComparec').click(function(){ 
	//alert("4");	
		 
	 
  if($.trim($('#nombre_compareciente').val()).length == 0)
  {
   error_compaM = 'El campo es requerido.';
   $('#errorCompa').text(error_compaM);
  
  }else{
	   
    error_compaM = '';
    $('#errorCompa').text(error_compaM);
  
   }
   //app   	 
  if($.trim($('#paterno_compareciente').val()).length == 0)
  {
   error_appcM = 'El campo es requerido.';
   $('#errorAppc').text(error_appcM);
  
  }else{
	   
    error_appcM = '';
    $('#errorAppc').text(error_appcM);
   }
    //apmc  	 
  if($.trim($('#materno_compareciente').val()).length == 0)
  {
   error_apmcM = 'El campo es requerido.';
   $('#errorApmc').text(error_apmcM);
  
  }else{
	   
    error_apmcM = '';
    $('#errorApmc').text(error_apmcM);
   }
   
     //numero identificacion	 
  if($.trim($('#num_identi').val()).length == 0)
  {
   error_numicM = 'El campo es requerido.';
   $('#errorNi').text(error_numicM);
  
  }else{
	   
    error_numicM = '';
    $('#errorNi').text(error_numicM);
   }
   
   
     //tipo poder	 
  if($.trim($('#tipo_poder').val()).length == 0)
  {
   error_tpM = 'El campo es requerido.';
   $('#errorTp').text(error_tpM);
  
  }else{
	   
    error_tpM = '';
    $('#errorTp').text(error_tpM);
   }
   
   
		 //VALIDAR identificacion
	 if ($('#Indentificacion').val().trim() === '') {
        
		 error_idecM = 'Debe seleccionar una opcion.';
		  $('#errorIde').text(error_idecM);

    } else {
        
		 error_idecM = '';
    $('#errorIde').text(error_idecM);
    }

  
   /////////////////////
if(error_compaM != ''|| error_appcM != ''|| error_apmcM != ''||error_numicM != '' ||error_tpM != ''||error_idecM != '')
  {
   return false;
   alert("1111111");
  }  
  
  else
 {
        
  }
	  
	  
  
 });





 
 
  ////////////////programacion Boton next datos Legales/////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////
  
    var error_escritura= '';
    var error_rg= '';
	var error_hacienda= '';
	var error_acta_= '';
	var error_acredita='';
	var error_estrati='';
	var error_repre='';
	var error_poder='';
	var error_modif='';
	var error_sub='';
 $('#nextLegal').click(function(){
	 //escritura
	if($.trim($('#nu_escritura').val()).length == 0)
  {
   error_escritura = 'El campo es requerido.';
   $('#errorEscri').text(error_escritura);
  
  }else{
	   
    error_escritura = '';
    $('#errorEscri').text(error_escritura);
  
   }
   /////registro publico
   if($.trim($('#nu_reg_public_p').val()).length == 0)
  {
   error_rg = 'El campo es requerido.';
   $('#errorNurpp').text(error_rg);
  
  }else{
	   
    error_rg = '';
    $('#errorNurpp').text(error_rg);
  
   }
   ///
   /////fecha constutuitiva
   if($.trim($('#fechaHacienda').val()).length == 0)
  {
   error_hacienda = 'El campo es requerido.';
   $('#errorFechaAlta').text(error_hacienda);
  
  }else{
	   
    error_hacienda = '';
    $('#errorFechaAlta').text(error_hacienda);
  
   }
	/////////////file acta constitutiva
	if(document.frmRegistro.acta_c.value==""){
			//alert("suba c");
		error_acta_ = 'Porfavor, seleccione un archivo!';
		  $('#errorActa_').text(error_acta_);
		}else {
        
		 error_acta_ = '';
    $('#errorActa_').text(error_acta_);
	
    }
	
		
	//VALIDAR acreditacion
	 if ($('#Tipo_acreditacion').val().trim() === '') {
        
		 error_acredita = 'Debe seleccionar una opcion.';
		  $('#errorAcre').text(error_acredita);

    } else {
        
		 error_acredita = '';
    $('#errorAcre').text(error_acredita);
    }
	
	//VALIDAR estrati
	 if ($('#Estratificacion').val().trim() === '') {
        
		 error_estrati = 'Debe seleccionar una opcion.';
		  $('#errorEstra').text(error_estrati);

    } else {
        
		 error_estrati = '';
    $('#errorEstra').text(error_estrati);
    }
	//num_representante_legal
	if($.trim($('#nu_representante').val()).length == 0)
  {
   error_repre = 'El campo es requerido.';
   $('#errorRepre').text(error_repre);
  
  }else{
	   
    error_repre = '';
    $('#errorRepre').text(error_repre);
  
   }
   
   	//num_de poder
	if($.trim($('#nu_poder').val()).length == 0)
  {
   error_repre = 'El campo es requerido.';
   $('#errorPoder').text(error_repre);
  
  }else{
	   
    error_repre = '';
    $('#errorPoder').text(error_repre);
  
   }
   //acta modificacion
    if(!document.querySelector('input[name="Acta_modificacion"]:checked')) {
      //alert('Error, rellena el campo horario');
      hasError = true;
	  
	   error_modif = 'El campo es requerido.';
       $('#errorModi').text(error_modif);
	  
      }else{
	   
    error_modif = '';
    $('#errorModi').text(error_modif);
  
   }
   
     //subcontratos?
    if(!document.querySelector('input[name="Subcontratos"]:checked')) {
      //alert('Error, rellena el campo horario');
      hasError = true;
	  
	   error_sub = 'El campo es requerido.';
       $('#errorSub').text(error_sub);
	  
      }else{
	   
    error_sub = '';
    $('#errorSub').text(error_sub);
  
   }


	
	
  
   /////////////////////GRAL
if(error_escritura != '' || error_rg != ''|| error_hacienda != ''|| error_acta_ != '' ||error_acredita != ''||error_estrati != ''||error_repre != ''||error_poder != ''||  error_modif != '' || error_sub != '' )


  {
   return false;
   alert("1111111");
  }  
  
  else
 {
        
  }

	
	
	 
	 
	
	

  

  
 });


 
 ////////////////programacion Boton Agregar persona fisica/////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////


  var error_espe= '';
 
 $('#agregar').click(function(){
	 //alert('Campo add');
	 //VALIDAR espe
	 if ($('#especialidad').val().trim() === '') {
       
		 error_espe = 'Debe seleccionar una opcion.';
		  $('#errorEspe').text(error_espe);

    } else {
       
    error_espe = '';
    $('#errorEspe').text(error_espe);
    }
	
	
	 
	 
	//alert("mio entre");
	

  
  
  
if(error_espe != '' )
  {
   return false;
   alert("1111111");
  }  
  
  else
 {
          //esto era si agregabaaceptaba los formularios
		 //agregar_usuario_primera_seccion();
		 agregar_usuario_fisico();
		 
		 location.href ='../vistas/subInicio.php';
	   //$('#list_info_users').removeClass('active active_tab1');
	   //$('#list_info_users').removeAttr('href data-toggle');
	   //$('#Info_User_content').removeClass('active');
	   //$('#list_info_users').addClass('inactive_tab1');
	   //$('#list_info_dir').removeClass('inactive_tab1');
	   //$('#list_info_dir').addClass('active_tab1 active');
	   //$('#list_info_dir').attr('href', '#info_dir_content');
	  // $('#list_info_dir').attr('data-toggle', 'tab');
	   //$('#info_dir_content').addClass('active in');
  
  }
  
 });


 ////////////////programacion Boton AgregarMoral/////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////



  var error_espe1= '';
 
 $('#agregarMoral').click(function(){
	 //alert('Campo add');
	 //VALIDAR espe
	 if ($('#especialidad').val().trim() === '') {
       
		 error_espe1 = 'Debe seleccionar una opcion.';
		  $('#errorEspe').text(error_espe1);

    } else {
       
    error_espe1 = '';
    $('#errorEspe').text(error_espe1);
    }
	
	
	 
	 
	//alert("mio entre");
	

  
  
  
if(error_espe1 != '' )
  {
   return false;
   alert("1111111");
  }  
  
  else
 {
          //esto era si agregabaaceptaba los formularios
		 //agregar_usuario_primera_seccion();
		 agregar_usuario_moral();
	   //$('#list_info_users').removeClass('active active_tab1');
	   //$('#list_info_users').removeAttr('href data-toggle');
	   //$('#Info_User_content').removeClass('active');
	   //$('#list_info_users').addClass('inactive_tab1');
	   //$('#list_info_dir').removeClass('inactive_tab1');
	   //$('#list_info_dir').addClass('active_tab1 active');
	   //$('#list_info_dir').attr('href', '#info_dir_content');
	  // $('#list_info_dir').attr('data-toggle', 'tab');
	   //$('#info_dir_content').addClass('active in');
  
  }
  
 });



$(function(){
   var fechaA= new Date();
   var yyyy=fechaA.getFullYear();
$("#fechaHacienda").datepicker({
  changeMonth:true,
  changeYear:true,
  yearRange:'1900:'+ yyyy,
  dateFormat: "dd-mm-yy"

});
});











 
  
  