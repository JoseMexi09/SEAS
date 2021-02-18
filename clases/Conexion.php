<?php 

/**
 * 
 */
class Conectar
{
	
	public function conexion()
	{
		//$servidor="localhost";
		//$usuario="root";
		//$password="";
		//$base="seas";


 
		//$servidor="localhost";
		//$usuario="id15362130_josesin";
		//$password="~TE/g!I}sbS@6->9";
		//$base="id15362130_teotest";

       //este es servidor de unbuntu
		$servidor="localhost";
		$usuario="root";
		$password="";
		$base="seas";





		$conexion= mysqli_connect($servidor,$usuario,$password,$base);

		return $conexion;

	}
}

 ?>