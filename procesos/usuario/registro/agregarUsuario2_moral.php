<?php 

require_once "../../../clases/Usuario.php";

//echo "si paso";
//print_r($_POST);
$password=sha1($_POST['password']);

$fechaNacimiento=explode ("-",$_POST['fechaNacimiento']);
$fechaNacimiento=$fechaNacimiento[2]."-".$fechaNacimiento[1]."-".$fechaNacimiento[0];


$fechaHacienda=explode ("-",$_POST['fechaHacienda']);
$fechaHacienda=$fechaHacienda[2]."-".$fechaHacienda[1]."-".$fechaHacienda[0];


$tipo_persona="Moral";

//$datos = array(
//"nombre"=>$_POST['nombre'],
//"fechaNacimiento"=>$fechaNacimiento,
//"email"=>$_POST['correo'],
//"password"=>$password

//);


$datos = array(

"nombre"=>$_POST['nombre'],
"app"=>$_POST['paterno'],
"apm"=>$_POST['materno'],
"fechaNacimiento"=>$fechaNacimiento,
"email"=>$_POST['correo'],
"usuario"=>$_POST['usuario'],
"password"=>$password,

"rfc"=>$_POST['rfc'],

"tipo_usuario"=>$_POST['listauser'],
//"tipo_persona"=>$_POST['listapersona'],
"tipo_persona"=>$tipo_persona,

"origen"=>$_POST['Origen'],
"pais_origen"=>$_POST['Pais'],

"calle"=>$_POST['calle'],
"exterior"=>$_POST['exterior'],
"interior"=>$_POST['interior'],
"Asentamiento"=>$_POST['Asentamiento'],
"cp"=>$_POST['cp'],
"listaestado"=>$_POST['listaestado'],
"listamunicipio"=>$_POST['listamunicipio'],
"Localidad"=>$_POST['Localidad'],
"listacolonia"=>$_POST['clistacolonia'],

"num_tel"=>$_POST['num_tel'],
"notificacion"=>$_POST['txtNoti'],




"fechaAltaHacienda"=>$fechaHacienda,
"num_escritura"=>$_POST['nu_escritura'],
"num_reg_public"=>$_POST['nu_reg_public_p'],
"estratificacion"=>$_POST['txtEstrati'],
"subcontratos"=>$_POST['Subcontratos'],
"num_representante_legal"=>$_POST['nu_representante'],
"tipo_acred_legal"=>$_POST['txtTipo_acred_legal'],
"num_poder"=>$_POST['nu_poder'],
"existe_modificacion"=>$_POST['Acta_modificacion'],


"actividad_sat"=>$_POST['actividad_anteSAT'],
"experiencia"=>$_POST['experiencia'],
"num_empleados"=>$_POST['num_empleados'],
"empresarial_sector"=>$_POST['txtSector'],
"giro"=>$_POST['txtGiro'],

"nombre_comparec"=>$_POST['nombre_compareciente'],
"app_comparec"=>$_POST['paterno_compareciente'],
"apm_comparec"=>$_POST['materno_compareciente'],
"identificacion"=>$_POST['Indentificacion'],
"num_identificacion"=>$_POST['num_identi'],
"tipo_poder"=>$_POST['tipo_poder']


);

$usuario=new Usuario();
echo $usuario->agregarUsuarioMoral($datos);

 ?>