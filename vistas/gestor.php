<?php
session_start();
if(isset($_SESSION['usuario'])) {


include "header.php";

$nom=$_SESSION['usuario'];
$idUsuario=$_SESSION['idUsuario'];

//$tipo_persona=$_SESSION['tipo_persona'];
//echo "<p>La id es:</p>". $idUsuario;
//echo "<p>El nombre es:</p>". $nom;
//echo "<p>El tipo es:</p>".$tipo_persona;

//echo ;

 ?>







<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-4">Gestor de Archivos</h1>

        <span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarArchivos">
        	
        <span class="fas fa-plus-circle"> </span>Agregar Archivo
        </span>

        <span class="btn btn-outline-danger float-right" data-toggle="modal" data-target="#ShowInf">
          
        <span class="fas fa-info-circle"> </span>Informacion
        </span>

         
           <hr>

		<div id="tablaGestorArchivos"></div>
	</div>
</div>

<!-- start modal  -->


<!-- Modal -->
<div class="modal fade" id="modalAgregarArchivos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Click en Seleccionar Archivo:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	<form id="frmArchivos" name="frmArchivos" enctype="multipart/form-data" method="post">
             
      <!--<input  type="file"  class="form-control-file" name="archivos[]" id="archivos[]"   multiple >-->


        <label for="file-upload" class="subir">
        <i class="fas fa-folder-open"></i> Seleccionar Archivo
        </label>

         <input id="file-upload" name="archivos[]"onchange='cambiar()' type="file" style='display: none;'accept="application/pdf, .doc, .docx, .odf,image/png, .jpeg, .jpg"/>
          <div id="info"></div>
      		 
      	</form>
        
      </div>
      <div class="modal-footer">
        <button type="button" id="close" class="btn btn-secondary" data-dismiss="modal">
          <i class="fas fa-window-close"></i> Cerrar</button>
    <button   disabled="disabled" type="button" class="btn btn-primary" id="btnGuardarArchivos" >
     <i class="fas fa-cloud-upload-alt"></i>
    Subir Archivo</button>
      </div>
    </div>
  </div>
</div>


<!-- end modal  -->



<!-- Modal pdf -->
<div class="modal fade" id="ShowInf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title  col-11 text-center"  id="myModalLabel ">CONTRATISTAS PERSONAS FISICAS</h4> 

      </div>
      <div class="modal-body">
        <div style="text-align: center;">

<iframe src="Files/TRIPTICO_CONTRATISTAS_PER_FISICA1.pdf" 
style="width:750px; height:500px;" frameborder="0"></iframe>




</div>
      </div>

     <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">
        <i class="fas fa-window-close"></i> Cerrar</button>
    


<a download="TRIPTICO_CONTRATISTAS_PER_FISICA1" href="Files/TRIPTICO_CONTRATISTAS_PER_FISICA1.pdf">Descargar</a>
 




      </div>
    </div>
  </div>
</div>
<!--finm ventana modal pdf-->


<?php 
include "footer.php"; 
?>


<script src="../js/gestor.js"></script>

<script type="text/javascript">

	$(document).ready(function() {
		$('#tablaGestorArchivos').load("gestor/tablaGestor.php");

		$('#btnGuardarArchivos').click(function() {

			agregarArchivosGestor();
			
			/* Act on the event */
		});			
	});



</script>


 <script type="text/javascript">

  function cambiar(){
   // alert("Hello! I am an alert box!!");
    var pdrs = document.getElementById('file-upload').files[0].name;
    //var pdrs = document.getElementById('archivos[]');
    document.getElementById('info').innerHTML = pdrs;
}

///evaluacion del input file
// https://parzibyte.me/blog
const MAXIMO_TAMANIO_BYTES = 10000000; // 1MB = 1 millón de bytes

// Obtener referencia al elemento
const $miInput = document.querySelector("#file-upload");

$miInput.addEventListener("change", function () {
  // si no hay archivos, regresamos
  if (this.files.length <= 0) return;

  // Validamos el primer archivo únicamente
  const archivo = this.files[0];
  if (archivo.size > MAXIMO_TAMANIO_BYTES) {
    const tamanioEnMb = MAXIMO_TAMANIO_BYTES / 1000000;
    //alert(`El archivo  ${tamanioEnMb} MB`);
    alert(`El archivo es demasiado grande, porfavor vuelva a seleccionar otro, que no pese mas de 10 M`);
    // Limpiar
    $miInput.value = "";
    

  } else {
    // Validación pasada. Envía el formulario o haz lo que tengas que hacer
  }
});















$("#file-upload").change(function(){
    $("button").prop("disabled", this.files.length == 0);
});




</script>




<?php
}else{
header("location:../index.php");
}

?>

