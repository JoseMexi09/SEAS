<?php 

/**
 * 
 */
require_once "Conexion.php";
class Usuario extends Conectar
{
	



public function login($usuario,$password) {
$conexion=Conectar::conexion();
$sql="SELECT count(*) as existeUsuario  FROM t_administrador
 WHERE usuario='$usuario' AND password='$password'";

  $result= mysqli_query($conexion,$sql);
  $respuesta= mysqli_fetch_array($result)['existeUsuario'];

if ($respuesta>0){
  
  $_SESSION['usuarioA']=$usuario;

  $sql="SELECT id_administrador  FROM t_administrador
 WHERE usuario='$usuario' AND password='$password'";

  $result= mysqli_query($conexion,$sql);
  $idAdministrador= mysqli_fetch_row($result)[0];

   $_SESSION['idAdministrador']=$idAdministrador;
    return 1;

}else{

  return 0;
}




}




}

 ?>