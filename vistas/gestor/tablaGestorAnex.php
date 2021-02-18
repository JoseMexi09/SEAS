
<?php 

session_start();
//require_once "../../clases/Conexion.php";






 ?>

<div  class="row">
	
	<div class="col-sm-12">

		<div class="table-responsive">

			<table class="table table-hover table-dark" id="tableGestorDataTable">
				
				<thead>
					
					<tr>
						<th> Nombre de Anexo</th>
						<th> Descargar</th>
						
						

					</tr>
				</thead>
				<tbody>
                 

					<tr>
						<td> Anexo 1  </td>
						<td>
							   <a  href="Files/Anexos/ANEXO_uno.docx" 
				    	download="ANEXO_uno" class="btn btn-success btn-md">
				    	<span class="fas fa-download"></span>
						    </a>

						</td>
						
					</tr>

					<tr>
						<td> Anexo 2  </td>
						<td>
							   <a  href="Files/Anexos/ANEXO_dos.docx" 
				    	download="ANEXO_dos" class="btn btn-success btn-md">
				    	<span class="fas fa-download"></span>
						    </a>

						</td>
						
					</tr>

					<tr>
						<td> Anexo 3  </td>
						<td>
							   <a  href="Files/Anexos/ANEXO_tres.docx" 
				    	download="ANEXO_tres" class="btn btn-success btn-md">
				    	<span class="fas fa-download"></span>
						    </a>

						</td>
						
					</tr>

					<tr>
						<td> Anexo 4  </td>
						<td>
							   <a  href="Files/Anexos/ANEXO_cuatro.docx" 
				    	download="ANEXO_cuatro" class="btn btn-success btn-md">
				    	<span class="fas fa-download"></span>
						    </a>

						</td>
						
					</tr>
					
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