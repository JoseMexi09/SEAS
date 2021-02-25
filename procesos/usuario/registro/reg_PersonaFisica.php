<?php
require_once "../../../clases/Usuario.php";
session_start();
$idUsuario=$_SESSION['idUsuario'];

$tipo_persona="Fisica";
$tipo_usuario=$_SESSION['tipo_usu'];

$inputt=$_POST['calle'];
$inputt1=$_POST['razon_contancia'];
$inputt2=$_POST['experiencia'];


$fechaExp=explode ("-",$_POST['fechaExp']);
$fechaExp=$fechaExp[2]."-".$fechaExp[1]."-".$fechaExp[0];









//$nombrefile=$_POST['filename'];
//echo $nombrefile;
//$nombrear=$_FILES['file']['name'];
//echo $nombrear;






//////////////////////////////////////////////////////////////////////////////////

//----------------moviendo el archivo 1-------------


//////////////////////////////////////////////////////////////////////////////////

if (!empty($inputt)) {
//empieza a subir archivo 
if($_FILES['com_domi']['size'] > 0){


$carpetaUsuario='../../../archivos/'.$idUsuario;
if(!file_exists($carpetaUsuario)){

mkdir($carpetaUsuario,0777,true);
}


	$totalArchivos=count($_FILES['com_domi']['name']);

	for ($i=0; $i < $totalArchivos; $i++){

    $nombreArchivo=$_FILES['com_domi']['name'][$i];
    $explode = explode('.',$nombreArchivo);
    $tipoArchivo=array_pop($explode);

    $rutaAlmacenamiento=$_FILES['com_domi']['tmp_name'][$i];
    
    $rutaFinal= $carpetaUsuario. "/" .$nombreArchivo;

   // $datosRegistroArchivo= array( "idUsuario" =>$idUsuario,
                                 // "nombreArchivo" =>$nombreArchivo,
                                 // "tipo" =>$tipoArchivo,
                                  //"ruta" =>$rutaFinal 
                                  //); 

    if (move_uploaded_file($rutaAlmacenamiento, $rutaFinal)){
     // $Gestor = new Gestor();
       //$respuesta= $Gestor->agregaRegistroArchivo($datosRegistroArchivo);
      
    }

   //echo move_uploaded_file($rutaAlmacenamiento, $rutaFinal);
	}
//echo $respuesta;

}else{

	echo 0;
}

    
}///termina la evaluacion de la variable de la primera


else

{
	 //echo "No se esta subiendo el archivo!";

	//lo comente ya que si entra pero que no lo tome en cuenta
}
//////////////////////////////////////////////////////////////////////////////////

//----------------final archivo1-------------


//////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////

//----------------moviendo el archivo 2 -------------


//////////////////////////////////////////////////////////////////////////////////



if (!empty($inputt1)) {
//empieza a subir archivo 
if($_FILES['con_inhabil']['size'] > 0){


$carpetaUsuario='../../../archivos/'.$idUsuario;
if(!file_exists($carpetaUsuario)){

mkdir($carpetaUsuario,0777,true);
}


	$totalArchivos=count($_FILES['con_inhabil']['name']);

	for ($i=0; $i < $totalArchivos; $i++){

    $nombreArchivo=$_FILES['con_inhabil']['name'][$i];
    $explode = explode('.',$nombreArchivo);
    $tipoArchivo=array_pop($explode);

    $rutaAlmacenamiento=$_FILES['con_inhabil']['tmp_name'][$i];
    
    $rutaFinal= $carpetaUsuario. "/" .$nombreArchivo;

   // $datosRegistroArchivo= array( "idUsuario" =>$idUsuario,
                                 // "nombreArchivo" =>$nombreArchivo,
                                 // "tipo" =>$tipoArchivo,
                                  //"ruta" =>$rutaFinal 
                                  //); 

    if (move_uploaded_file($rutaAlmacenamiento, $rutaFinal)){
     // $Gestor = new Gestor();
       //$respuesta= $Gestor->agregaRegistroArchivo($datosRegistroArchivo);
      
    }

   //echo move_uploaded_file($rutaAlmacenamiento, $rutaFinal);
	}
//echo $respuesta;

}else{

	echo 0;
}

    
}///termina la evaluacion de la variable de la primera


else

{
	 //echo "No se esta subiendo el archivo 2!";

}


//////////////////////////////////////////////////////////////////////////////////

//----------------final de archivo 2-------------


//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////

//----------------moviendo el archivo 3 curriculum -------------


//////////////////////////////////////////////////////////////////////////////////





if (!empty($inputt2)) {
//empieza a subir archivo 
if($_FILES['curriculum']['size'] > 0){


$carpetaUsuario='../../../archivos/'.$idUsuario;
if(!file_exists($carpetaUsuario)){

mkdir($carpetaUsuario,0777,true);
}


	$totalArchivos=count($_FILES['curriculum']['name']);

	for ($i=0; $i < $totalArchivos; $i++){

    $nombreArchivo=$_FILES['curriculum']['name'][$i];
    $explode = explode('.',$nombreArchivo);
    $tipoArchivo=array_pop($explode);

    $rutaAlmacenamiento=$_FILES['curriculum']['tmp_name'][$i];
    
    $rutaFinal= $carpetaUsuario. "/" .$nombreArchivo;


    if (move_uploaded_file($rutaAlmacenamiento, $rutaFinal)){
      
    }

	}
//echo $respuesta;
}else{

	echo 0;
}

    
}///termina la evaluacion de la variable de la primera


else

{
	 //echo "No se esta subiendo el archivo 2!";

}

///////////////////////////////////////////////////end de subir archivos////
$valida_radio=$_POST['chkPassPort'];

if ($valida_radio=='no') {
//echo "jajajjajajaj!";


$nombre_c=" ";
$pa=" ";
$ma=" ";
$ide=" ";
$nui=" ";
$tp=" ";


$datos = array(

"rfc"=>$_POST['rfc'],
"tipo_usuario"=>$tipo_usuario,
"tipo_persona"=>$tipo_persona,
"origen"=>$_POST['Origen'],
"pais_origen"=>$_POST['txtPais'],
"num_tel"=>$_POST['num_tel'],
"calle"=>$_POST['calle'],
"exterior"=>$_POST['exterior'],
"interior"=>$_POST['interior'],
"Asentamiento"=>$_POST['txtAse'],
"cp"=>$_POST['cp'],
"listaestado"=>$_POST['Edo'],
"listamunicipio"=>$_POST['listamunicipio'],
"Localidad"=>$_POST['Localidad'],
"listacolonia"=>$_POST['clistacolonia'],
"nombre_quien_expide"=>$_POST['razon_contancia'],
"num_ref"=>$_POST['num_ref'],
"fecha_exp"=>$fechaExp,

"actividad_sat"=>$_POST['search'],
"experiencia"=>$_POST['experiencia'],
"num_empleados"=>$_POST['num_empleados'],
"empresarial_sector"=>$_POST['txtSector'],
"giro"=>$_POST['txtGiro'],

"nombre_comparec"=>$nombre_c,
"app_comparec"=>$pa,
"apm_comparec"=>$ma,
"identificacion"=>$ide,
"num_identificacion"=>$nui,
"tipo_poder"=>$tp,

"num_espe"=>$_POST['especialidad'],
"nom_espe"=>$_POST['txtEspe']



  );

$usuario=new Usuario();
echo $usuario->agregar_usu_fisico($datos,$idUsuario);








}


if ($valida_radio=='si'){




$datos = array(

"rfc"=>$_POST['rfc'],
"tipo_usuario"=>$tipo_usuario,
"tipo_persona"=>$tipo_persona,
"origen"=>$_POST['Origen'],
"pais_origen"=>$_POST['txtPais'],
"num_tel"=>$_POST['num_tel'],
"calle"=>$_POST['calle'],
"exterior"=>$_POST['exterior'],
"interior"=>$_POST['interior'],
"Asentamiento"=>$_POST['txtAse'],
"cp"=>$_POST['cp'],
"listaestado"=>$_POST['Edo'],
"listamunicipio"=>$_POST['listamunicipio'],
"Localidad"=>$_POST['Localidad'],
"listacolonia"=>$_POST['clistacolonia'],
"nombre_quien_expide"=>$_POST['razon_contancia'],
"num_ref"=>$_POST['num_ref'],
"fecha_exp"=>$fechaExp,

"actividad_sat"=>$_POST['search'],
"experiencia"=>$_POST['experiencia'],
"num_empleados"=>$_POST['num_empleados'],
"empresarial_sector"=>$_POST['txtSector'],
"giro"=>$_POST['txtGiro'],

"nombre_comparec"=>$_POST['nombre_compareciente'],
"app_comparec"=>$_POST['paterno_compareciente'],
"apm_comparec"=>$_POST['materno_compareciente'],
"identificacion"=>$_POST['Indentificacion'],
"num_identificacion"=>$_POST['num_identi'],
"tipo_poder"=>$_POST['tipo_poder'],

"num_espe"=>$_POST['especialidad'],
"nom_espe"=>$_POST['txtEspe']



  );

$usuario=new Usuario();
echo $usuario->agregar_usu_fisico($datos,$idUsuario);

}



?>