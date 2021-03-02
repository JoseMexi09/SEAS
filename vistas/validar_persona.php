<?php

    session_start();

	$tipo_per=$_POST['listapersona'];
	$tipo_usu=$_POST['listauser'];

	$_SESSION['tipo_usu']=$tipo_usu;

	
//print $tipo_per;
//print $tipo_usu;

		
		if($tipo_per==1 && $tipo_usu=='Contratista'){
					
         header("Location: regPersonaFisica.php");					
						
		}


		if($tipo_per==1 && $tipo_usu=='Proveedor'){
					
         header("Location: regPersonaFisica.php");					
						
		}

		if($tipo_per==1 && $tipo_usu=='Proveedor y Contratista'){
					
         header("Location: regPersonaFisica.php");					
						
		}

		if($tipo_per==2 && $tipo_usu=='Contratista'){
					
        header("Location: regPersonaMoral.php");					
						
		}


		if($tipo_per==2 && $tipo_usu=='Proveedor'){
					
        header("Location: regPersonaMoral.php");					
						
		}


		if($tipo_per==2 && $tipo_usu=='Proveedor y Contratista'){
					
        header("Location: regPersonaMoral.php");					
						
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