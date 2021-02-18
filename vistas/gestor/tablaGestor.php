
<?php 

session_start();
require_once "../../clases/Conexion.php";
$c= new Conectar();
$conexion=$c->conexion();
$idUsuario=$_SESSION['idUsuario'];
$sql="SELECT 
archivos.id_archivo as idfile ,
usuario.nombre_razon as nameuse,
archivos.nombre as namefile,
archivos.tipo as kindfile,
archivos.ruta as rootfile,
archivos.fecha as fecha,
usuario.municipio as municipio

FROM t_archivos AS archivos
INNER JOIN 
t_usuarios2 AS usuario ON archivos.id_userFK=usuario.id_usuario
AND archivos.id_userFK='$idUsuario'";

$result=mysqli_query($conexion,$sql);

 ?>

<div  class="row">
	
	<div class="col-sm-12">

		<div class="table-responsive">

			<table class="table table-hover table-dark" id="tableGestorDataTable">
				
				<thead>
					
					<tr>
						<th> Nombre</th>
						<th> Tipo de Archivo</th>
						<th> Descargar</th>
						<!--<th> Visualizar</th>-->
						<th> Eliminar</th>

					</tr>
				</thead>
				<tbody>
                  <?php
                       while($mostrar= mysqli_fetch_array($result) ){
                       	$rutaDescarga="../archivos/".$idUsuario."/".$mostrar['namefile'];
                       	$nombreArchivo=$mostrar['namefile'];
                       	$idArchivo=$mostrar['idfile'];

                  ?>

					<tr>
						<td> <?php echo $mostrar['namefile']; ?>  </td>
						<td><?php echo $mostrar['kindfile']; ?> </td>
						<td>
				    <a  href="<?php echo $rutaDescarga;?>" 
				    	download="<?php echo $nombreArchivo;?>" class="btn btn-success btn-sm">
				    	<span class="fas fa-download"></span>
						    </a>
						</td>
						<!--<td></td>-->
						<td>
					<span class="btn btn-danger btn-sm" 
					onclick="eliminarArchivo('<?php echo $idArchivo ?>')" >
							<span class="fas fa-trash-alt"></span>
							</span>
						</td>
					</tr>
					<?php
					}
					 ?>
				</tbody>
			</table>
		</div>
	</div>

</div>

<script type="text/javascript">
	$(document).ready(function() {
$('#tableGestorDataTable').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
  });

 

  


	});
</script>