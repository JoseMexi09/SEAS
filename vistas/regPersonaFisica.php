<?php 
session_start();
if (isset($_SESSION['usuario'])){
include "header_regPersonaFisica.php";

 ?>
<div class="container">
	<div class="row">
		<div class="col-small-12">
			

		</div>
	</div>
</div>




<?php
//include "footer.php";
}else{
	header("location:../index.php");
}

 ?>