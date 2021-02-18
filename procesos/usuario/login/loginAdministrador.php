<?php
//print_r($_POST);

session_start();
require_once "../../../clases/UsuarioAdmin.php";

$usuario=$_POST['login'];
$password=$_POST['password'];


$usuarioObj = new Usuario();


echo $usuarioObj->login($usuario,$password) ;


?>