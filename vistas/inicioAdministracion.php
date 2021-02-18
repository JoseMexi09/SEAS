<?php 
session_start();
if (isset($_SESSION['usuarioA'])){
include "headerAdministracion.php";

 ?>
<div class="container">
	<div class="row">
		<div class="col-small-12">
			

		</div>
	</div>
</div>








<?php
include "footer.php";
}else{
	header("location:../Administracion.php");
}

 ?>