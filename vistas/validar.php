<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	//require("connect_db.php");
require_once "../clases/Conexion.php";
$idUsuario=$_SESSION['idUsuario'];
	//$username=$_POST['mail'];
	//$pass=$_POST['pass'];
   $c= new Conectar();
    $conexion=$c->conexion();


$sql=" SELECT *  
FROM t_usuarios2 WHERE id_usuario='$idUsuario'";

 $result=mysqli_query($conexion,$sql);






	//$sql=mysqli_query($mysqli,"SELECT * FROM t_usuarios2 ");


//$J=mysqli_fetch_assoc($result);
//print $tipo_per=$J['flag1'];

	
	if($f=mysqli_fetch_assoc($result)){
		
		//&& $pass=="123"
		
		if($f['flag1']==1){
			
			
			
		    //$_SESSION['Id_usu']=$f['Id_usu'];
			//$_SESSION['nombre']=$f['nombre'];
			//$_SESSION['rol']=$f['tipo_usu'];
			
			//variables de sesiones time
			
			 
		
       header("Location: inicioValidacion.php");
						
						
						
		}
		if($f['flag1']==2){
				//echo '<script>alert("Usted ya inicio sesion, consulte su administrador, gracias.")</script> ';
		
	    echo "<script>location.href='gestor.php'</script>";
			
		}
		
	}else{
		
		echo '<script>alert("Hay un errror en el sistema, comuniquese con el Administrador")</script> ';
		
		//echo "<script>location.href='index.php'</script>";	

	}


?>