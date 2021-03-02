<?php 

require_once "../../../clases/Usuario.php";

//echo "si paso";
//print_r($_POST);
$password=sha1($_POST['password']);

$fechaNacimiento=explode ("-",$_POST['fechaNacimiento']);
$fechaNacimiento=$fechaNacimiento[2]."-".$fechaNacimiento[1]."-".$fechaNacimiento[0];

$flag_1="1";

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

"flag1"=>$flag_1

);

$usuario=new Usuario();
echo $usuario->agregarUsuario_form_externo($datos);

 ?>