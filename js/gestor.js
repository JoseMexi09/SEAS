


 function agregarArchivosGestor(){


 	var formData = new FormData(document.getElementById('frmArchivos'));

			$.ajax({
				url: "../procesos/gestor/guardarArchivos.php",
				type:  "POST",
				datatype: "html",
				data:formData,
				cache:false,
				contentType:false,
				processData:false,
				success:function(respuesta){
                console.log(respuesta);

                respuesta = respuesta.trim();

                 if (respuesta==1){

                 	$('#tablaGestorArchivos').load("gestor/tablaGestor.php");
                 	swal(":D","agregado con exito!","success");
                 }else{

                 	 swal(":(","Fallo en agregar!","error");
                 }


				}
			
			});
 }

 function eliminarArchivo(idArchivo){
    swal({
  title: "Estas seguro de Eliminar este Archivo?",
  text: "Una vez borrado este Archivo no podra recuperarse!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.ajax({
           type:"POST",
           data:"idArchivo="+idArchivo,
           url:"../procesos/gestor/eliminaArchivo.php",
           success:function(respuesta){
            respuesta=respuesta.trim();
            if(respuesta==1){
            $('#tablaGestorArchivos').load("gestor/tablaGestor.php");
      	    swal("El registro se ha eliminado Correctamente!", {
            icon: "success",
            });


            }else{
            swal("Error al Eliminar", {
            icon: "error",
             });

            }

     

           }
    });

  } 
});


 }