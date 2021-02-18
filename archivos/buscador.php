<?php




session_start();
// validamos el envio el formualrio para que se active la creacion del comprimido
if(isset($_POST["Generar_zip"])){
/* Este código PHP nos permite comprimir todos los archivos de una carpeta previamente declarada en la variable $archivos  */    
$adarchivos = array();

//$id_usu_carp=$_SESSION["id_c"];
//$id_usu_carp='1';
$id_usu_carp=$_POST["idusu"];

$nom=$_POST["nom"];
$app=$_POST["app"];
$apm=$_POST["apm"];
//$directorio='mis-archivos/';
//echo $id_usu_carp;

//$directorio='1/';
$directorio=$id_usu_carp.'/';



//$name='Jose';
//Nombre concatenado
$name=$nom.'_'.$app.'_'.$apm;



$adarchivos=obtenerListadoDeArchivos($directorio);


// Creamos el array y declaramos los ficheros de la carpeta
/*$adarchivos = array(
  'mis-archivos/Erasmo_de_Roterdam.docx',
  'mis-archivos/01.jpg',
  'mis-archivos/02.jpg'
);*/

// Declaramos el nombre del archivo comprimido
$nombre_zip = 'SEAS_USUARIO_'.$name.'.zip';

// Instanciamos la clase, esta viene en el paquete de PHP
$mizip = new ZipArchive();
$mizip->open($nombre_zip, ZipArchive::CREATE);

// Agregamos los archivos a comprimir
foreach ($adarchivos as $nuevo){
    /* Removemos la palabra 'download/', ya que si no hacemos esto
     * va a crear el zip dentro de una carpeta llamada download
     * Tip: si queremos crear archivos comprimidos dentro de carpetas
     * ya saben como hacerlo ;) */
    $mizip->addFile($nuevo, str_replace('download/', '', $nuevo));
}
$mizip->close();

// Generar la descarga en el navegador
header('Content-Type: application/zip');
header('Content-disposition: attachment; filename='.$nombre_zip);
header('Content-Length: ' . filesize($nombre_zip));
readfile($nombre_zip);

// Eliminamos el archivo que se creo en nuestro servidor
unlink($nombre_zip);
}

//EL METODO
function obtenerListadoDeArchivos($directorio){
  // Array en el que obtendremos los resultados
  $res = array();
  // Agregamos la barra invertida al final en caso de que no exista
  if(substr($directorio, -1) != "/") $directorio .= "/";

  // Creamos un puntero al directorio y obtenemos el listado de archivos
  $dir = @dir($directorio) or die("getFileList: Error abriendo el directorio $directorio para leerlo");
  while(($archivo = $dir->read()) !== false) {
      // Obviamos los archivos ocultos
      if($archivo[0] == ".") continue;
      if(is_dir($directorio . $archivo)) {
        array_push($res , $directorio . $archivo . "/" );
      } else if (is_readable($directorio . $archivo)) {
        array_push($res , $directorio . $archivo );
      }
  }
  $dir->close();
  return $res;
}
?>