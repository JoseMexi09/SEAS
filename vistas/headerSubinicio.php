
<!DOCTYPE html>
<html>
<head>
	<title>Gestor de Archivos</title>
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap4/bootstrap.min.css">
	 <meta charset="utf-8">

   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../librerias/fontawesome/css/all.css">
     <link rel="stylesheet" type="text/css" href="../librerias/datatable/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" type="text/css" href="../css/gestor.css">
  



</head>
<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
		<div class="container">
			<a class="navbar-brand" href="inicio.php">
				<img src="../img/logo.png" alt=""   width="100px">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="subInicio.php"><span class="fas fa-home">
							
						</span> Inicio
							<span class="sr-only">(current)</span>
						</a>
					</li>
			



					<li class="nav-item" >
					<a class="nav-link" href="../procesos/usuario/salir.php" style="color:red">

							<span class="fas fa-power-off"></span> Salir</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<!-- fin de menu-->

<div align="center" class="container">

  <h1 style="text-align:center">Descargar Anexos</h1>
      <hr>

      

<div class="row">
    <div class="col">
     <!--<button type="button" class="btn btn-primary float-left">
      <i class="fas fa-hand-point-right"></i> ¡Ir al Gestor de Archivos!
     </button>-->

     <a href="gestor.php" class="btn btn-primary float-left"><i class="fas fa-hand-point-right"></i> ¡Ir al Gestor de Archivos!</a>



    </div>
</div>


    <div class="panel-body">
      <br />
      

<!--empieza tabla -->
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


</div>
</div>

      
   
  <br>



  
  <script src="../librerias/jquery-3.5.1.min.js"></script>
  <script src="../librerias/jquery-ui-1.12.1/jquery-ui.js"></script>
<script src="../librerias/sweetalert.min.js"></script>
<script src="../js/fisica-moral.js"></script>
<script src="../js/toastr.min.js"></script>

<script type="text/javascript">

  
    $(".readonly").on('keydown paste', function(e){
        e.preventDefault();
    });

</script>


</body>
</html>