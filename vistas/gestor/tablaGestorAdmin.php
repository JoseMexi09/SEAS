
<?php 

session_start();
require_once "../../clases/Conexion.php";
$c= new Conectar();
$conexion=$c->conexion();

//$idUsuario=$_SESSION['idUsuario'];


$sql=" SELECT id_Usuario,
nombre_razon,
app,
apm,
email,
tipo_persona,
municipio 
FROM t_usuarios2
";

$result=mysqli_query($conexion,$sql);
//---------------------------------



 ?>

<div  class="row">
	
	<div class="col-sm-12">

		<div class="table-responsive">

			<table class="table table-hover table-dark" id="tableGestorDataTable">
				
				<thead>
					
					<tr>
						<th> Nombre</th>
						<th> Email</th>
						<th> Tipo Persona</th>
						<th> Municipio</th>
						<th>Descargar</th>

					</tr>
				</thead>
				<tbody>
                  <?php
                       while($mostrar= mysqli_fetch_array($result) ){
                       //	$rutaDescarga="../archivos/".$idUsuario."/".$mostrar['namefile'];
                       	$rutaDescarga="../archivos/".$mostrar['id_Usuario']."/";
                       	//$nombreArchivo=$mostrar['namefile'];
                        $idCarpeta=$mostrar['id_Usuario'];
                        $nombreUsuario=$mostrar['nombre_razon'];
                        $app=$mostrar['app'];
                        $apm=$mostrar['apm'];
                       	//$idArchivo=$mostrar['idfile'];

                  ?>

					<tr>
						<td> <?php echo $mostrar['nombre_razon'].' ', $mostrar['app'].' ',$apm; ?>  </td>
						<td><?php echo $mostrar['email']; ?> </td>
						<td> <?php echo $mostrar['tipo_persona']; ?></td>
						<td> <?php echo $mostrar['municipio']; ?></td>

						<td> 
       <form action="../archivos/buscador.php" method="post">

       <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-cloud-download-alt"></i> DESCARGAR</button>

  
      <!--<input name="Generar_zip" class="btn btn-primary btn-sm" type="submit" value="Descargar Archivos">-->
        <input name="Generar_zip" maxlength="10" type="hidden" style="width : 1px; heigth : 1px" class="form-control" >


       <input  name="idusu" maxlength="30" type="hidden"   class="form-control"
       value="<?php echo $idCarpeta;?>"/>

       <input  name="nom" maxlength="30"  type="hidden"  class="form-control"
       value="<?php echo $nombreUsuario; ?>"/>

       <input  name="app" maxlength="30" type="hidden"   class="form-control"
       value="<?php echo $app; ?>"/>

       <input  name="apm" maxlength="30" type="hidden"   class="form-control"
       value="<?php echo $apm; ?>"/>

        </form>
           
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
			$('#tableGestorDataTable').DataTable();
	});
</script>

