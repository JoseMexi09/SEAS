<?php

require_once "../../../clases/Usuario.php";
session_start();
$idUsuario=$_SESSION['idUsuario'];
$tipo_persona="Fisica";
$tipo_usuario="Contratista";

	//$nombre=$_POST['nombre'];
	//$app=$_POST['app'];
	//$tipo_usu=$_POST['listauser'];
    //print $nombre;
	
	//echo $nombre;
	//echo $app;
$datos = array(

"rfc"=>$_POST['rfc'],
"tipo_usuario"=>$tipo_usuario,
"tipo_persona"=>$tipo_persona,
"origen"=>$_POST['Origen'],
"pais_origen"=>$_POST['txtPais'],
"calle"=>$_POST['calle'],

"exterior"=>$_POST['exterior'],
"interior"=>$_POST['interior'],
"Asentamiento"=>$_POST['txtAse'],
"cp"=>$_POST['cp'],
"listaestado"=>$_POST['txtEdo'],
"listamunicipio"=>$_POST['listamunicipio']


	);

$usuario=new Usuario();
echo $usuario->agregarUsu_fisi_cont($datos,$idUsuario);



?>