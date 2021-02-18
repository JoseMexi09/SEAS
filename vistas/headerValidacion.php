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
						<a class="nav-link" href="inicioValidacion.php"><span class="fas fa-home">
							
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

<div align="center" class="container">
  <h1 style="text-align:center">Seleciona el tipo de Persona y Usuario</h1>
      <hr>
    <div class="panel-body">
      <br />

<form action="validar_persona.php" name="frmRegistro" id="frmRegistro" class="form-horizontal" method="post" >

        <!--<div class="row polaroid" style="background-color: #F8F9F9">-->


 <div class="col-sm-4">
            <div class="form-group">
              <label for="validate-text" class="titulosRegistro">Tipo
                de persona:</label>
              <div class="input-group">
                
                  <select class="form-control custom-select" name="listapersona"
                    id="listapersona" required="required">
                    <option value="">Seleccione Persona</option>
                    
                      <option value="1">FISICA</option>
                    
                      <option value="2">MORAL</option>
                    
                  </select>   
              </div>
            </div>
          </div>




         <div class="col-sm-4">
            <div class="form-group">
              <label for="validate-text" class="titulosRegistro">Tipo
                de usuario:</label>
              
                <select class="form-control custom-select" name="listauser"
                  id="listauser" required="required">
                  <option value="">Seleccione Usuario</option>
                  
                    <option value="CONTRATISTA">CONTRATISTA</option>
                  
                    <option value="PROVEEDOR">PROVEEDOR</option>
                  
                    <option value="PROVEEDOR Y CONTRATISTA">PROVEEDOR Y CONTRATISTA</option>
                  
                </select>
              
            </div>
          </div>


 

      <button type="submit" value="Aceptar" class="btn btn-primary ">Siguiente</button>
 


      

        <br>
        
         <!--<div class="row">
          <div class="col-sm-6 text-left">
              <button class="btn btn-primary btn-lg">Registrar</button>
          </div>-->
       
        
        
        


      </form><!--termina el form-->
</div>
</div>

      
   
  <br>
  <br>
  <br>
  <br>



<!--  ////////%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<!--  ////////%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<!--  ////////%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<!--  ////////%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

  
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