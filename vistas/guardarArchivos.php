<?php
session_start();
//print_r($_FILES);
require_once "../../clases/Gestor.php";


$idUsuario=$_SESSION['idUsuario'];

//$totalArchivos= count($_FILES);
//$datos=array();
//for ($i=0; $i <= $totalArchivos; $i++){
	//array_push ($datos,$_FILES['archivos']['name'][$i]);
	//}
//print_r($datos);
//$totalArchivos=count($_FILES['archivos']['name']);

//for ($k=0; $k < $totalArchivos; $k++){
	//echo $_FILES['archivos']['name'][$k];
	//}


if($_FILES['archivos']['size'] > 0){


$carpetaUsuario='../../archivos/'.$idUsuario;
if(!file_exists($carpetaUsuario)){

mkdir($carpetaUsuario,077,true);
}


	$totalArchivos=count($_FILES['archivos']['name']);

	for ($i=0; $i < $totalArchivos; $i++){

    $nombreArchivo=$_FILES['archivos']['name'][$i];
    $explode = explode('.',$nombreArchivo);
    $tipoArchivo=array_pop($explode);

    $rutaAlmacenamiento=$_FILES['archivos']['tmp_name'][$i];
    
    $rutaFinal= $carpetaUsuario. "/" .$nombreArchivo;

    $datosRegistroArchivo= array( "idUsuario" =>$idUsuario,
                                  "nombreArchivo" =>$nombreArchivo,
                                  "tipo" =>$tipoArchivo,
                                  "ruta" =>$rutaFinal 
                                  ); 

    if (move_uploaded_file($rutaAlmacenamiento, $rutaFinal)){
      $Gestor = new Gestor();
       $respuesta= $Gestor->agregaRegistroArchivo($datosRegistroArchivo);
      
    }

   //echo move_uploaded_file($rutaAlmacenamiento, $rutaFinal);
	}
echo $respuesta;

}else{

	echo 0;
}


?>