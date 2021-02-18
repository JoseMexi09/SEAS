<?php
session_start();
if(isset($_SESSION['usuario'])) {


include "header.php"; 

?>



<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-4">Decargar Anexos </h1>

        


          <!-- Button trigger modal -->
 <!--<button class="btn btn-info  float-right" data-toggle="modal" data-target="#ShowInf">
  Informacion
</button>-->

         
           <hr>

		<div id="tablaGestorArchivosAnex"></div>
	</div>
</div>

<!-- start modal  -->





<!-- Modal pdf -->

<!--finm ventana modal pdf-->
























<?php include "footer.php"; ?>


<script src="../js/gestor.js"></script>

<script type="text/javascript">

	$(document).ready(function() {
		$('#tablaGestorArchivosAnex').load("gestor/tablaGestorAnex.php");

				
	});



</script>


 





<?php
}else{
header("location:../Administracion.php");
}

?>

