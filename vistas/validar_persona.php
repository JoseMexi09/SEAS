<?php

    session_start();

	$tipo_per=$_POST['listapersona'];
	$tipo_usu=$_POST['listauser'];

	
//print $tipo_per;
//print $tipo_usu;

		
		if($tipo_per==1 && $tipo_usu=='CONTRATISTA'){
			
			 
		
         header("Location: regPersonaFisica.php");
						
						
						
		}
		//falta programar la entrada aqui se eliminara flag1
		if($f['flag1']==2){
	
		
			echo "<script>location.href='gestor.php'</script>";
			
		}
		
	else{
		
		echo '<script>alert("Modulos En Construccion")</script> ';
		
		//echo "<script>location.href='index.php'</script>";	

	}


?>