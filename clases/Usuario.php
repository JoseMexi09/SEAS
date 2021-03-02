<?php 

/**
 * 
 */
require_once "Conexion.php";
class Usuario extends Conectar
{

	
	public function agregarUsuario($datos)
	//public function agregarUsuario()
	{
		$conexion=Conectar::conexion();

      // $sql="INSERT INTO t_usuarios(nombre,
                                 //  fechaNacimiento,
                                  // email,
                                  //  usuario,
                                  //  password)
                        //  values (?,?,?,?,?)";


                            $sql="INSERT INTO t_usuarios2(nombre_razon,
                                   app,
                                   apm,
                                   fechaNacimiento,
                                   email,
                                   usuario,
                                   password,
                                   rfc,
                                   tipo_usuario,
                                   tipo_persona,
                                   origen,
                                   pais_origen,
                                   
                                  calle_nombre,
                                  num_ext,
                                  num_int,
                                  tipo_asentamient,
                                  cp,
                                  estado,
                                  municipio,
                                  localidad,
                                  colonia,
                                  telefono,
                                  notificacion,
                                  
                                  actividad_sat,
                                  anos_experiencia,
                                  num_empleados,
                                  empresarial_sector,
                                  giro,
                                  nombre_comparec,
                                  app_comparec,
                                  apm_comparec,
                                  identificacion,
                                  num_identificacion,
                                  tipo_poder



                                   ) 
                                   
        values (?,?,?,?,?,?,?,?,?,?,?,?, ?,?,?,?,?,?,?,?,?,?,?, ?,?,?,?,?,?,?,?,?,?,?)";




   $query=$conexion->prepare($sql);

   $query->bind_param('ssssssssssssssisssssssssiissssssss',$datos['nombre'],
                             $datos['app'],
                             $datos['apm'],

   	                         $datos['fechaNacimiento'],
   	                         $datos['email'],
   	                         $datos['usuario'],
   	                         $datos['password'],

                              $datos['rfc'],
                             $datos['tipo_usuario'],
                             $datos['tipo_persona'],
                              $datos['origen'],
                             $datos['pais_origen'],

$datos['calle'],
$datos['exterior'],
$datos['interior'],
$datos['Asentamiento'],
$datos['cp'],
$datos['listaestado'],
$datos['listamunicipio'],
$datos['Localidad'],
$datos['listacolonia'],

$datos['num_tel'],
$datos['notificacion'],

$datos['actividad_sat'],
$datos['experiencia'],
$datos['num_empleados'],
$datos['empresarial_sector'],
$datos['giro'],

$datos['nombre_comparec'],
$datos['app_comparec'],
$datos['apm_comparec'],
$datos['identificacion'],
$datos['num_identificacion'],
$datos['tipo_poder']

 );



   $exito=$query->execute();
   $query->close();
   return $exito;

	}



  public function agregarUsuarioMoral($datos)
 
  {
    $conexion=Conectar::conexion();



                            $sql="INSERT INTO t_usuarios2(nombre_razon,
                                   app,
                                   apm,
                                   fechaNacimiento,
                                   email,
                                   usuario,
                                   password,
                                   rfc,
                                   tipo_usuario,
                                   tipo_persona,
                                   origen,
                                   pais_origen,
                                   
                                  calle_nombre,
                                  num_ext,
                                  num_int,
                                  tipo_asentamient,
                                  cp,
                                  estado,
                                  municipio,
                                  localidad,
                                  colonia,
                                  telefono,
                                  notificacion,

                                  fechaAltaHacienda,
                                  num_escritura,
                                  num_reg_public,
                                  estratificacion,
                                  subcontratos,
                                  num_representante_legal,

                                  tipo_acred_legal,
                                  num_poder,
                                  existe_modificacion_acta,
                                  actividad_sat,
                                  anos_experiencia,
                                  num_empleados,
                                  empresarial_sector,
                                  giro,

                                  nombre_comparec,
                                  app_comparec,
                                  apm_comparec,
                                  identificacion,
                                  num_identificacion,
                                  tipo_poder



 ) 
                                
  values (?,?,?,?,?,?,?,?,?,?,?,?, ?,?,?,?,?,?,?,?,?,?,?,  ?,?,?,?,?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?,?)";

  


                           /*  $sql="INSERT INTO t_usuarios3(nombre_razon,
                                   app,
                                   apm,
                                   fechaNacimiento,
                                   email,
                                   usuario,
                                   password,
                                   rfc,
                                   tipo_usuario,
                                   tipo_persona,
                                   origen,
                                   pais_origen,
                                   
                                  calle_nombre,
                                  num_ext,
                                  num_int,
                                  tipo_asentamient,
                                  cp,
                                  estado,
                                  municipio,
                                  localidad,
                                  colonia,
                                  telefono,
                                  notificacion,


fechaAltaHacienda,
num_escritura,
num_reg_public,
estratificacion,
subcontratos,
num_representante_legal,
tipo_acred_legal,
num_poder,
existe_modificacion_acta,
actividad_sat,
anos_experiencia,
num_empleados,
empresarial_sector,
giro,
nombre_comparec,
app_comparec,
apm_comparec,
identificacion,
num_identificacion,
tipo_poder

 ) 
                                
  values (?,?,?,?,?,?,?,?,?,?,?,?, ?,?,?,?,?,?,?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?)";*/



   $query=$conexion->prepare($sql);
   //echo $query -> error;die;

   //$query->bind_param('sssssssssssssiissssssss ssssssssssiissssssss',$datos['nombre'],
   $query->bind_param('ssssssssssssssissssssssssssssssssssssssssss',$datos['nombre'],
                             $datos['app'],
                             $datos['apm'],

                             $datos['fechaNacimiento'],
                             $datos['email'],
                             $datos['usuario'],
                             $datos['password'],

                              $datos['rfc'],
                             $datos['tipo_usuario'],
                             $datos['tipo_persona'],
                              $datos['origen'],
                             $datos['pais_origen'],
$datos['calle'],
$datos['exterior'],
$datos['interior'],
$datos['Asentamiento'],
$datos['cp'],
$datos['listaestado'],
$datos['listamunicipio'],
$datos['Localidad'],
$datos['listacolonia'],

$datos['num_tel'],
$datos['notificacion'],

   
$datos['fechaAltaHacienda'],
$datos['num_escritura'],
$datos['num_reg_public'],
$datos['estratificacion'],

$datos['subcontratos'],
$datos['num_representante_legal'],

$datos['tipo_acred_legal'],
$datos['num_poder'],
$datos['existe_modificacion'],

$datos['actividad_sat'],
$datos['experiencia'],
$datos['num_empleados'],
$datos['empresarial_sector'],
$datos['giro'],

$datos['nombre_comparec'],
$datos['app_comparec'],
$datos['apm_comparec'],
$datos['identificacion'],
$datos['num_identificacion'],
$datos['tipo_poder']





 );



   $exito=$query->execute();
   $query->close();
   return $exito;

  }




  public function agregarUsuario_form_externo($datos)
  //public function agregarUsuario()
  {
  $conexion=Conectar::conexion();
    
$sql1="SELECT COUNT(*) as total FROM t_usuarios2";
$resultado1= mysqli_query($conexion,$sql1);
$datos1= mysqli_fetch_array($resultado1);


if ($datos1['total'] > 0){
  //echo "Hay registros ... ";
  

   if (self::buscarUsuarioRepetido($datos['usuario'])){

        return 2;
    }




     if (self::buscarCorreoRepetido($datos['email'])){

       return 3;
    }


   else {

    

                            $sql="INSERT INTO t_usuarios2(nombre_razon,
                                   app,
                                   apm,
                                   fechaNacimiento,
                                   email,
                                   usuario,
                                   password,
                                   flag1


                                   ) 
                                   
        values (?,?,?,?,?,?,?,?)";


   $query=$conexion->prepare($sql);

   $query->bind_param('ssssssss',$datos['nombre'],
                             $datos['app'],
                             $datos['apm'],

                             $datos['fechaNacimiento'],
                             $datos['email'],
                             $datos['usuario'],
                             $datos['password'],
                             $datos['flag1']

                             

 );



   $exito=$query->execute();
   $query->close();
   return $exito;
 }//fin de agregar validando usu y pass existentes
  
  
  
  
} else {
  //echo "No hay nada ... ";


 $sql2="INSERT INTO t_usuarios2(nombre_razon,
                                   app,
                                   apm,
                                   fechaNacimiento,
                                   email,
                                   usuario,
                                   password,
                                   flag1


                                   ) 
                                   
        values (?,?,?,?,?,?,?,?)";




   $query2=$conexion->prepare($sql2);

   $query2->bind_param('ssssssss',$datos['nombre'],
                             $datos['app'],
                             $datos['apm'],

                             $datos['fechaNacimiento'],
                             $datos['email'],
                             $datos['usuario'],
                             $datos['password'],
                             $datos['flag1']

                             

 );

   $exito2=$query2->execute();
   $query2->close();
   return $exito2;

} //fin del no hay nada


 }




  public function agregarUsu_fisi_cont($datos,$id_us)
  //public function agregarUsuario()

    //$id_usu= $_SESSION['idUsuario'];
  {
    $conexion=Conectar::conexion();
    $id_u_for_up=$id_us;
  
    /////----------------------------

     $sql= "UPDATE t_usuarios2 SET rfc=?,tipo_usuario=?,tipo_persona=?,
     origen=?,pais_origen=?,calle_nombre=?, num_ext=?, num_int=?,
     tipo_asentamient=?, cp=?,estado=?, municipio=?
      WHERE id_usuario=? ";
     
    $query =$conexion->prepare($sql);
    $query->bind_param("sssssssissssi",$datos['rfc'],
      $datos['tipo_usuario'],
      $datos['tipo_persona'],
      $datos['origen'],
      $datos['pais_origen'],
      $datos['calle'],

      $datos['exterior'],
      $datos['interior'],
      $datos['Asentamiento'],
      $datos['cp'],
      $datos['listaestado'],
      $datos['listamunicipio'],

      $id_u_for_up);
    $respuesta=$query->execute();
    //$query->close();
  

    ///----------------------------

    

   /* $sql="INSERT INTO t_usuarios2(rfc,origen,pais_origen,calle_nombre
                                  


                                   ) 
                                   
        values (?,?,?,?)";




   $query=$conexion->prepare($sql);

   $query->bind_param('ssss',$datos['rfc'],
    // $datos['tipo_usuario'],
     //$datos['tipo_persona'],
     $datos['origen'],
     $datos['pais_origen'],
     $datos['calle']
                            

                             

 );



   $exito=$query->execute();*/


   //$exito1=$exito;
   $exito1=$respuesta;
   $query->close();

   

  if($exito1==1){
    //$id_u="1";
    $id_u_for_up_flag=$id_us;
    $flag="2";

    $sql= "UPDATE t_usuarios2 SET flag1=? WHERE id_usuario=? ";
     
    $query =$conexion->prepare($sql);
    $query->bind_param("si",$flag,$id_u_for_up_flag);
    $respuesta=$query->execute();
    $query->close();
  



  }



   //return $exito;
     return $respuesta;

  }




  


public function buscarUsuarioRepetido($usuario){
	$conexion=Conectar::conexion();

	$sql="SELECT usuario FROM t_usuarios2 WHERE usuario = '$usuario'";

	$result= mysqli_query($conexion,$sql);
	$datos= mysqli_fetch_array($result);

  if ($datos['usuario']!="" || $datos['usuario']==$usuario ){

return 1;
}else{
return 0;
}
}

public function buscarCorreoRepetido($email){
  $conexion=Conectar::conexion();
  $sql="SELECT email FROM t_usuarios2 WHERE email = '$email'";

  $result= mysqli_query($conexion,$sql);
  $datos= mysqli_fetch_array($result);

  if ($datos['email']!="" || $datos['email']==$email ){

return 1;
}else{
return 0;
}
}





public function login($usuario,$password) {
$conexion=Conectar::conexion();
$sql="SELECT count(*) as existeUsuario  FROM t_usuarios2
 WHERE usuario='$usuario' AND password='$password'";

  $result= mysqli_query($conexion,$sql);
  $respuesta= mysqli_fetch_array($result)['existeUsuario'];

if ($respuesta>0){
  
  $_SESSION['usuario']=$usuario;

  $sql="SELECT id_usuario,tipo_persona  FROM t_usuarios2
 WHERE usuario='$usuario' AND password='$password'";
  $result= mysqli_query($conexion,$sql);

  $idUsuario= mysqli_fetch_row($result)[0];
   

   $_SESSION['idUsuario']=$idUsuario;
  

//if ($result = $mysqli -> query($sql)) {
  //while ($row = $result -> fetch_row()) {
    //printf ("%s (%s)\n", $row[0], $row[1]);

    //$tipo_persona=$row[1];
    //$_SESSION['tipo_persona']=$tipo_persona;

  //}
 // $result -> free_result();
//}










    return 1;

}else{

  return 0;
}




}

//****************************************************************************************************
 //* **********************************empezando el area de seccionados fisica********************************
 //****************************************************************************************************
 
 
   public function agregar_usu_fisico($datos,$id_us)
  //public function agregarUsuario()

    //$id_usu= $_SESSION['idUsuario'];
  {
    $conexion=Conectar::conexion();
    $id_u_for_up=$id_us;
  
    /////----------------------------

     $sql= "UPDATE t_usuarios2 SET rfc=?,tipo_usuario=?,tipo_persona=?,
     origen=?,pais_origen=?,telefono=?,calle_nombre=?,num_ext=?,num_int=?,tipo_asentamient=?,cp=?,
	 estado=?,municipio=?,localidad=?,colonia=?,
	 nombre_expedicion_cons=?,num_ref_const=?,fecha_exped_const=?,
	 actividad_sat=?,anos_experiencia=?,num_empleados=?,empresarial_sector=?,giro=?,
	 nombre_comparec=?,app_comparec=?,apm_comparec=?,identificacion=?,num_identificacion=?,tipo_poder=?,
	 num_especialida=?,nom_especialidad=?
	 
	 
      WHERE id_usuario=? ";
     
    $query =$conexion->prepare($sql);
    $query->bind_param("sssssssssssssssssssiissssssssssi",$datos['rfc'],
      $datos['tipo_usuario'],
      $datos['tipo_persona'],
      $datos['origen'],
      $datos['pais_origen'],
	  $datos['num_tel'],
	  $datos['calle'],
	  
	  $datos['exterior'],
      $datos['interior'],
      $datos['Asentamiento'],
      $datos['cp'],
	  
	  $datos['listaestado'],
      $datos['listamunicipio'],
	  $datos['Localidad'],
      $datos['listacolonia'],
	  
	  $datos['nombre_quien_expide'],
	  $datos['num_ref'],
      $datos['fecha_exp'],
	  
	  $datos['actividad_sat'],
      $datos['experiencia'],
      $datos['num_empleados'],
      $datos['empresarial_sector'],
      $datos['giro'],
	  
	  $datos['nombre_comparec'],
      $datos['app_comparec'],
      $datos['apm_comparec'],
      $datos['identificacion'],
      $datos['num_identificacion'],
      $datos['tipo_poder'],
	  
	  $datos['num_espe'],
      $datos['nom_espe'],



      $id_u_for_up
	  );
    $respuesta=$query->execute();
 


   //$exito1=$exito;
   $exito1=$respuesta;
   $query->close();

   

  if($exito1==1){
    
  // header("Location: ../vistas/subInicio.php");  
  
    $id_u_for_up_flag=$id_us;
    $flag="2";

    $sql= "UPDATE t_usuarios2 SET flag1=? WHERE id_usuario=? ";
     
    $query =$conexion->prepare($sql);
    $query->bind_param("si",$flag,$id_u_for_up_flag);
    $respuesta=$query->execute();
    $query->close();
  }

   //return $exito;
     return $respuesta;

  }
  
  //****************************************************************************************************
 //* **********************************empezando el area de seccionados moral********************************
 //****************************************************************************************************
 
 public function agregar_usu_moral($datos,$id_us)
  //public function agregarUsuario()

    //$id_usu= $_SESSION['idUsuario'];
  {
    $conexion=Conectar::conexion();
    $id_u_for_up=$id_us;
  
    /////----------------------------

     $sql= "UPDATE t_usuarios2 SET rfc=?,tipo_usuario=?,tipo_persona=?,
     origen=?,pais_origen=?,telefono=?,calle_nombre=?,num_ext=?,num_int=?,tipo_asentamient=?,cp=?,
	 estado=?,municipio=?,localidad=?,colonia=?,
	 nombre_expedicion_cons=?,num_ref_const=?,fecha_exped_const=?,
	 actividad_sat=?,anos_experiencia=?,num_empleados=?,empresarial_sector=?,giro=?,
	 nombre_comparec=?,app_comparec=?,apm_comparec=?,identificacion=?,num_identificacion=?,tipo_poder=?,
	 num_especialida=?,nom_especialidad=?,
	 fechaAltahacienda=?,num_escritura=?,num_reg_public=?,estratificacion=?,subcontratos=?,num_representante_legal=?,
	 tipo_acred_legal=?,num_poder=?,existe_modificacion_acta=?
	 
	 
      WHERE id_usuario=? ";
     
    $query =$conexion->prepare($sql);
    $query->bind_param("sssssssssssssssssssiisssssssssssssssssssi",$datos['rfc'],
      $datos['tipo_usuario'],
      $datos['tipo_persona'],
      $datos['origen'],
      $datos['pais_origen'],
	  $datos['num_tel'],
	  $datos['calle'],
	  
	  $datos['exterior'],
      $datos['interior'],
      $datos['Asentamiento'],
      $datos['cp'],
	  
	  $datos['listaestado'],
      $datos['listamunicipio'],
	  $datos['Localidad'],
      $datos['listacolonia'],
	  
	  $datos['nombre_quien_expide'],
	  $datos['num_ref'],
      $datos['fecha_exp'],
	  
	  $datos['actividad_sat'],
      $datos['experiencia'],
      $datos['num_empleados'],
      $datos['empresarial_sector'],
      $datos['giro'],
	  
	  $datos['nombre_comparec'],
      $datos['app_comparec'],
      $datos['apm_comparec'],
      $datos['identificacion'],
      $datos['num_identificacion'],
      $datos['tipo_poder'],
	  
	  $datos['num_espe'],
      $datos['nom_espe'],
	  
	  
	  $datos['fechaAltaHacienda'],
      $datos['num_escritura'],
      $datos['num_reg_public'],
      $datos['estratificacion'],
      $datos['subcontratos'],
      $datos['num_representante_legal'],
      $datos['tipo_acred_legal'],
      $datos['num_poder'],
      $datos['existe_modificacion'],
	  
	  



      $id_u_for_up
	  );
    $respuesta=$query->execute();
 


   //$exito1=$exito;
   $exito1=$respuesta;
   $query->close();

   

  if($exito1==1){
	  
	  
    $id_u_for_up_flag=$id_us;
    $flag="2";

    $sql= "UPDATE t_usuarios2 SET flag1=? WHERE id_usuario=? ";
     
    $query =$conexion->prepare($sql);
    $query->bind_param("si",$flag,$id_u_for_up_flag);
    $respuesta=$query->execute();
    $query->close();
    
  
  }

   //return $exito;
     return $respuesta;

  }
  
   


}

 ?>