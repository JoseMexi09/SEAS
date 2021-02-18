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

     <link rel="stylesheet" href="../multipasos/style.css">
     <link rel="stylesheet" type="text/css" href="../librerias/jquery-ui-1.12.1/jquery-ui.theme.css">
    <link rel="stylesheet" type="text/css" href="../librerias/jquery-ui-1.12.1/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/toastr.css">
  



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
<!-- fin menu-->

<header class="header">
  <h1 class="header__title">Registro Persona Fisica</h1>
</header>


<div class="content">
  <div class="content__inner">
  

      <h2 class="content__title">Click en los botones 'Atras' y 'Siguiente' </h2>
    
    <div class="container overflow-hidden">
      <div class="multisteps-form">
	  
        <div class="row">
          <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Informacion Usuario</button>
              <button class="multisteps-form__progress-btn" type="button" title="Address">Direccion</button>

              <button class="multisteps-form__progress-btn" type="button" title="Constancia">Constancia de no Inhabilitado</button>
              <button class="multisteps-form__progress-btn" type="button" title="Order Info">Datos Tecnicos</button>
              <button class="multisteps-form__progress-btn" type="button" title="Message">Datos Compareciente </button>
			  <button class="multisteps-form__progress-btn" type="button" title="Message">Especialidad</button>
            </div>
          </div>
        </div>
		
		
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
            <!--PARA MENSAJEWS DE ERROR -->
            <!--<div class="alert alert-success hide"></div> --> 
		  
		  
            <form name="frmRegistro" id="frmRegistro"   method="post" class="multisteps-form__form"
                 >

              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Informacion de Usuario</h3>
                <div class="multisteps-form__content">
				
                  <div class="form-row mt-4"><!--inicio -->

                    <div class="col-12 col-sm-6">
                      <input name="rfc" id="rfc" class="multisteps-form__input form-control" type="text" placeholder="RFC con Homoclave" required=""/>
                    </div>

                    <div class="col-6 col-sm-6 mt-4 mt-sm-0">
                      <select name="Origen"
                      id="listOrigen" class="multisteps-form__select form-control">
                        <option selected="selected">Origen...</option>
                           <option value="NACIONAL">NACIONAL</option>
                    
                           <option value="INTERNACIONAL">INTERNACIONAL</option>
                      </select>
                    </div>


                     </div><!--fin -->

                  <input  id="txtPais"name="txtPais" maxlength="30" value="" type="hidden"  class="form-control"/>





                     
                     <div class="form-row mt-4">

                  
                    <div class="col-6 col-sm-6 mt-4 mt-sm-0">
                      <select name="pais"
                       id="listPais" class="multisteps-form__select form-control" onchange="selectPais();">
                        <option selected="selected">Pais...</option>
                         <option value="401">Afganistan</option>
                    
                      <option value="101">Albania</option>
                    
                      <option value="126">Alemania</option>
                    
                      <option value="124">Andorra</option>
                      <option value="202">Angola</option>
                    
                      <option value="310">Antigua Y Barbuda</option>
                    
                      <option value="966">Antiguos Territ.De S.Esp.</option>
                    
                      <option value="555">Apatridas</option>
                    
                      <option value="402">Arabia Saudita</option>
                    
                      <option value="203">Argelia</option>
                    
                      <option value="340">Argentina</option>
                    
                      <option value="148">Armenia</option>
                    
                      <option value="501">Australia</option>
                    
                      <option value="102">Austria</option>
                    
                      <option value="442">Azerbaiyan</option>
                    
                      <option value="311">Bahamas</option>
                    
                      <option value="403">Bahrein</option>
                    
                      <option value="404">Bangladesh</option>
                    
                      <option value="312">Barbados</option>
                    
                      <option value="138">Belarus</option>
                    
                      <option value="103">Belgica</option>
                    
                      <option value="313">Belice</option>
                    
                      <option value="204">Benin</option>
                    
                      <option value="341">Bolivia</option>
                    
                      <option value="145">Bosnia Y Herzegovina</option>
                    
                      <option value="205">Botswana</option>
                    
                      <option value="342">Brasil</option>
                    
                      <option value="439">Brunei</option>
                    
                      <option value="104">Bulgaria</option>
                    
                      <option value="201">Burkina Faso</option>
                    
                      <option value="206">Burundi</option>
                    
                      <option value="207">Cabo Verde</option>
                    
                      <option value="417">Camboya</option>
                    
                      <option value="208">Camerun</option>
                    
                      <option value="301">Canada</option>
                    
                      <option value="246">Chad</option>
                    
                      <option value="344">Chile</option>
                    
                      <option value="407">China</option>
                    
                      <option value="106">Chipre</option>
                    
                      <option value="343">Colombia</option>
                    
                      <option value="209">Comores</option>
                    
                      <option value="210">Congo</option>
                    
                      <option value="430">Corea</option>
                    
                      <option value="431">Corea Del Norte (Rep.Pop)</option>
                    
                      <option value="211">Costa De Marfil</option>
                    
                      <option value="314">Costa Rica</option>
                    
                      <option value="146">Croacia</option>
                    
                      <option value="315">Cuba</option>
                    
                      <option value="107">Dinamarca</option>
                    
                      <option value="212">Djibouti</option>
                    
                      <option value="316">Dominica</option>
                    
                      <option value="345">Ecuador</option>
                    
                      <option value="213">Egipto</option>
                    
                      <option value="317">El Salvador</option>
                    
                      <option value="408">Emiratos Arabes Unidos</option>
                    
                      <option value="253">Eritrea</option>
                    
                      <option value="147">Eslovenia</option>
                    
                      <option value="108">España</option>
                    
                      <option value="302">Estados Unidos De America</option>
                    
                      <option value="141">Estonia</option>
                    
                      <option value="214">Etiopia</option>
                    
                      <option value="502">Fiji</option>
                    
                      <option value="409">Filipinas</option>
                    
                      <option value="109">Finlandia</option>
                    
                      <option value="110">Francia</option>
                    
                      <option value="215">Gabon</option>
                    
                      <option value="216">Gambia</option>
                    
                      <option value="139">Georgia</option>
                    
                      <option value="217">Ghana</option>
                    
                      <option value="318">Granada</option>
                    
                      <option value="111">Grecia</option>
                    
                      <option value="319">Guatemala</option>
                    
                      <option value="218">Guinea</option>
                    
                      <option value="220">Guinea Ecuatorial</option>
                    
                      <option value="219">Guinea-Bissau</option>
                    
                      <option value="346">Guyana</option>
                    
                      <option value="320">Haiti</option>
                    
                      <option value="321">Honduras</option>
                    
                      <option value="112">Hungria</option>
                    
                      <option value="410">India</option>
                    
                      <option value="411">Indonesia</option>
                    
                      <option value="413">Iran</option>
                    
                      <option value="412">Iraq</option>
                    
                      <option value="113">Irlanda</option>
                    
                      <option value="114">Islandia</option>
                    
                      <option value="513">Islas Cook</option>
                    
                      <option value="440">Islas Marshall</option>
                    
                      <option value="506">Islas Salomon</option>
                    
                      <option value="414">Israel</option>
                    
                      <option value="115">Italia</option>
                    
                      <option value="322">Jamaica</option>
                    
                      <option value="415">Japon</option>
                    
                      <option value="416">Jordania</option>
                    
                      <option value="443">Kazajstan</option>
                    
                      <option value="221">Kenia</option>
                    
                      <option value="444">Kirguistan</option>
                    
                      <option value="418">Kuwait</option>
                    
                      <option value="419">Laos</option>
                    
                      <option value="222">Lesotho</option>
                    
                      <option value="136">Letonia</option>
                    
                      <option value="420">Libano</option>
                    
                      <option value="223">Liberia</option>
                    
                      <option value="224">Libia</option>
                    
                      <option value="116">Liechtenstein</option>
                    
                      <option value="142">Lituania</option>
                    
                      <option value="117">Luxemburgo</option>
                    
                      <option value="156">Macedonia</option>
                    
                      <option value="225">Madagascar</option>
                    
                      <option value="421">Malasia</option>
                    
                      <option value="226">Malawi</option>
                    
                      <option value="422">Maldivas</option>
                    
                      <option value="227">Mali</option>
                    
                      <option value="118">Malta</option>
                    
                      <option value="228">Marruecos</option>
                    
                      <option value="229">Mauricio</option>
                    
                      <option value="230">Mauritania</option>
                    
                      <option value="511">Micronesia</option>
                    
                      <option value="137">Moldavia</option>
                    
                      <option value="119">Monaco</option>
                    
                      <option value="423">Mongolia</option>
                    
                      <option value="158">Montenegro</option>
                    
                      <option value="231">Mozambique</option>
                    
                      <option value="405">Myanmar</option>
                    
                      <option value="303">México</option>
                    
                      <option value="232">Namibia</option>
                    
                      <option value="515">Nauru</option>
                    
                      <option value="424">Nepal</option>
                    
                      <option value="323">Nicaragua</option>
                    
                      <option value="233">Niger</option>
                    
                      <option value="234">Nigeria</option>
                    
                      <option value="120">Noruega</option>
                    
                      <option value="504">Nueva Zelanda</option>
                    
                      <option value="425">Oman</option>
                    
                      <option value="121">Paises Bajos</option>
                    
                      <option value="499">Paises Sin Relaciones Dip</option>
                    
                      <option value="299">Paises Sin Relaciones Dip</option>
                    
                      <option value="399">Paises Sin Relaciones Dip</option>
                    
                      <option value="199">Paises Sin Relaciones Dip</option>
                    
                      <option value="599">Paises Sin Relaciones Dip</option>
                    
                      <option value="426">Pakistan</option>
                    
                      <option value="516">Palaos</option>
                    
                      <option value="324">Panama</option>
                    
                      <option value="505">Papua Nueva Guinea</option>
                    
                      <option value="347">Paraguay</option>
                    
                      <option value="348">Peru</option>
                    
                      <option value="122">Polonia</option>
                    
                      <option value="123">Portugal</option>
                    
                      <option value="427">Qatar</option>
                    
                      <option value="125">Reino Unido</option>
                    
                      <option value="250">Rep.Democratica Del Congo</option>
                    
                      <option value="235">Republica Centroafricana</option>
                    
                      <option value="143">Republica Checa</option>
                    
                      <option value="326">Republica Dominicana</option>
                    
                      <option value="144">Republica Eslovaca</option>
                    
                      <option value="237">Ruanda</option>
                    
                      <option value="128">Rumania</option>
                    
                      <option value="154">Rusia</option>
                    
                      <option value="507">Samoa</option>
                    
                      <option value="329">San Cristobal Y Nieves</option>
                    
                      <option value="129">San Marino</option>
                    
                      <option value="325">San Vicente Y Las Granadi</option>
                    
                      <option value="328">Santa Lucia</option>
                    
                      <option value="130">Santa Sede</option>
                    
                      <option value="238">Santo Tome Y Principe</option>
                    
                      <option value="239">Senegal</option>
                    
                      <option value="157">Serbia</option>
                    
                      <option value="240">Seychelles</option>
                    
                      <option value="241">Sierra Leona</option>
                    
                      <option value="432">Singapur</option>
                    
                      <option value="433">Siria</option>
                    
                      <option value="242">Somalia</option>
                    
                      <option value="434">Sri Lanka</option>
                    
                      <option value="236">Sudafrica</option>
                    
                      <option value="243">Sudan</option>
                    
                      <option value="131">Suecia</option>
                    
                      <option value="132">Suiza</option>
                    
                      <option value="349">Surinam</option>
                    
                      <option value="244">Swazilandia</option>
                    
                      <option value="445">Tadyikistan</option>
                    
                      <option value="435">Tailandia</option>
                    
                      <option value="438">Taiwan</option>
                    
                      <option value="245">Tanzania</option>
                    
                      <option value="517">Timor Oriental</option>
                    
                      <option value="247">Togo</option>
                    
                      <option value="508">Tonga</option>
                    
                      <option value="327">Trinidad Y Tobago</option>
                    
                      <option value="248">Tunez</option>
                    
                      <option value="446">Turkmenistan</option>
                    
                      <option value="436">Turquia</option>
                    
                      <option value="512">Tuvalu</option>
                    
                      <option value="135">Ucrania</option>
                    
                      <option value="249">Uganda</option>
                    
                      <option value="350">Uruguay</option>
                    
                      <option value="447">Uzbekistan</option>
                    
                      <option value="509">Vanuatu</option>
                    
                      <option value="351">Venezuela</option>
                    
                      <option value="437">Vietnam</option>
                    
                      <option value="441">Yemen</option>
                    
                      <option value="251">Zambia</option>
                    
                      <option value="252">Zimbabwe</option>
                    
                      <option value=""></option>
                    
                  
                         
                      </select>
                    </div>

                    <div class="col-12 col-sm-6">
                      <input name="num_tel" id="num_tel" class="multisteps-form__input form-control" type="text" placeholder="Celular/Telefono" required=""/>
                    </div>


                     </div>

					
                 <!--<div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <input name="app" class="multisteps-form__input form-control" type="text" placeholder="Segundo Apellido"/>
                    </div>-->
                  
                  
				  
                 <!-- <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Login"/>
                    </div>
					
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" type="email" placeholder="Email"/>
                    </div>
                  </div>
				  
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="password" placeholder="Password"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" type="password" placeholder="Repeat Password"/>
                    </div>
                  </div>-->

                  <div class="button-row d-flex mt-4">
                      <div class="campo sigPag"> 
                    <button  class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Siguiente</button>
                    </div>
<!--<button   class="btn btn-success ml-auto" onclick="return agregarUsuarioNuevo()" >Registar</button>-->
                  </div>
                </div>
              </div>
			  
			      

              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Direccion</h3>
                <div class="multisteps-form__content">

                  <div class="form-row mt-4">
                    <div class="col">
                      <input name="calle" class="multisteps-form__input form-control" type="text" placeholder="Calle"/>
                    </div>
                  </div>
                  

                  <div class="form-row mt-4"><!--inicio -->

                    <div class="col-12 col-sm-6">
                      <input name="exterior" id="exterior"  class="multisteps-form__input form-control" type="text" placeholder="Num. Ext." required=""/>
                    </div>

                    <div class="col-12 col-sm-6">
                      <input name="interior" id="interior"  class="multisteps-form__input form-control" type="text" placeholder="Num. Int." required=""/>
                    </div>

                  </div>

                    <div class="form-row mt-4"><!--inicio -->

                    <div class="col-12 col-sm-6">
                  <input name="cp" id="cp"  class="multisteps-form__input form-control" type="text" placeholder="Codigo Postal" required="" onchange="traer()"/>
                    </div>

                    <div class="col-6 col-sm-6 mt-4 mt-sm-0">
                      <select name="Asentamiento" id="listAsentamiento" class="multisteps-form__select form-control" onchange="selectAse();">
                        <option selected="selected">Asentamiento...</option>


                    
                      <option value="2">AMPLIACIÓN</option>
                    
                      <option value="3">BARRIO</option>
                    
                      
                    
                      <option value="5">CIUDAD</option>
                    
                      <option value="6">CIUDAD INDUSTRIAL</option>
                    
                      <option value="7">COLONIA</option>
                    
                      <option value="8">CONDOMINIO</option>
                    
                      <option value="9">CONJUNTO HABITACIONAL</option>
                    
                      <option value="10">CORREDOR INDUSTRIAL</option>
                    
                    
                    
                      <option value="13">EJIDO</option>
                    
                      <option value="14">EXHACIENDA</option>
                    
                      
                    
                      <option value="15">FRACCIÓN</option>
                    
                      
                    
                      <option value="18">HACIENDA</option>
                    
                      
                    
                      <option value="44">LOCALIDAD</option>
                    
                      <option value="20">MANZANA</option>
                    
                      
                    
                  
                    
                      <option value="22">PARQUE INDUSTRIAL</option>
                    
                      <option value="23">PRIVADA</option>
                    
                      <option value="24">PROLONGACIÓN</option>
                    
                      <option value="25">PUEBLO</option>
                    
                      <option value="26">PUERTO</option>
                    
                      <option value="27">RANCHERÍA</option>
                    
                      <option value="28">RANCHO</option>
                    
                      <option value="29">REGIÓN</option>
                    
                      <option value="30">RESIDENCIAL</option>
                    
                      <option value="31">RINCONADA</option>
                    
                      <option value="32">SECCIÓN</option>
                    
                      <option value="33">SECTOR</option>
                    
                      <option value="34">SUPERMANZANA</option>
                    
                      <option value="35">UNIDAD</option>
                    
                      <option value="36">UNIDAD HABITACIONAL</option>
                    
                      <option value="37">VILLA</option>
                    
                      <option value="43">ZONA COMERCIAL</option>
                    
                      <option value="38">ZONA FEDERAL</option>
                    
                      <option value="39">ZONA INDUSTRIAL</option>
                    
                      <option value="40">ZONA MILITAR</option>
                    
                      <option value="41">ZONA NAVAL</option>
                     
                      </select>
                    </div>

                    <input  id="txtAse"name="txtAse" maxlength="30" value="" type="hidden"  class="form-control"/>



                  </div>
                   <div class="form-row mt-4"><!--inicio -->

                       <input  id="txtEdo"name="txtEdo" maxlength="30" value="" type="hidden"  class="form-control"/>

                        <div class="col-12 col-sm-6">
                      <input name="Edo" id="Edo"  class="multisteps-form__input form-control" type="text" placeholder="Estado" required=""/>
                    </div>

                     <div class="col-12 col-sm-6">
                      <input name="listamunicipio" id="listamunicipio"  class="multisteps-form__input form-control" type="text" placeholder="Municipio" required=""/>
                    </div>

                   </div>


                   <div class="form-row mt-4"><!--inicio -->

                     <div class="col-12 col-sm-6">
                      <input name="Localidad" id="Localidad"  class="multisteps-form__input form-control" type="text" placeholder="Localidad" required=""/>          
                    </div>


                     <div class="col-6 col-sm-6 mt-4 mt-sm-0">
                      <select name="clistacolonia"
                      id="clistColonia" class="multisteps-form__select form-control">
                        <option selected="selected">Colonia...</option>

                         
                      </select>
                    </div>

                   </div>


                   <div class="form-row mt-4"><!--inicio -->

                 
                      <div class="form-group">
                     <label for="validate-text" class="titulosRegistro">Anexar Comprobante Domicilio:</label>
                       </div>


                  <input  type="file"  class="form-control-file" name="archivos[]" id="archivos[]"   multiple >

                   </div>


                <!--  <div class="form-row mt-4">
                    <div class="col">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Address 2"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="text" placeholder="City"/>
                    </div>

                    <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">State...</option>
                        <option>...</option>
                      </select>
                    </div>

                    <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Zip"/>
                    </div>
                  </div>-->

                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Atras</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Siguiente</button>

                   <!-- <button   class="btn btn-success ml-auto" onclick="return agregarUsuarioNuevo()" >Registar</button>-->


                  </div>


                  
                </div>
              </div>
			  
			  
			<div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
            <h3 class="multisteps-form__title">Constancia de no Inhabilitado</h3>
            <div class="multisteps-form__content">
			
			  <div class="form-row mt-4">
                    <div class="col">
                      <input name="razon_contancia" class="multisteps-form__input form-control" type="text" placeholder="Nombre o razon social a quien se expide la constancia"/>
                    </div>
                  </div>
                  

                  <div class="form-row mt-4"><!--inicio -->

                    <div class="col-12 col-sm-6">
                      <input name="num_ref" id="num_ref"  class="multisteps-form__input form-control" type="text" placeholder="Num. Ref." required=""/>
                    </div>
					
					 <div class="col-12 col-sm-6">
					  <input type="text" name="fechaExp" id="fechaExp" class="form-control" placeholder="Fecha de Expedicion" readonly=""  >
					  <div class="input-group-addon">
                 
                      </div>
					 </div>   

                  </div>
				  
				  
				   <div class="form-row mt-4"><!--inicio subir constancia de no inhabilitado -->

                 
                      <div class="form-group">
                     <label for="validate-text" class="titulosRegistro">Anexar Constancia de no inhabilitado:</label>
                       </div>


                  <input  type="file"  class="form-control-file" name="archivos[]" id="archivos[]"   multiple >

                   </div>
				
			
			
			
			
			
			
			
			
			       <div class="row">
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Atras</button>

                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Siguiente</button>

                       


                    </div>
                  </div>
				
				
			</div>
			</div>
			  
			  
			  
			  
			  
			  
			  
			  
			  

              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Datos Tecnicos</h3>
                <div class="multisteps-form__content">

                   <div class="form-row mt-4"><!--inicio -->

                
                

                    <div class="col-12 col-sm-6">
                      <input name="ae" id="ae"  class="multisteps-form__input form-control" type="text" placeholder="Años de experiencia" required=""/>
                    </div>

                     <div class="col-12 col-sm-6">
                      <input name="ne" id="ne"  class="multisteps-form__input form-control" type="text" placeholder="Numero de Empleados" required=""/>          
                    </div>




                  </div>



                   <div class="form-row mt-4"><!--inicio -->

                 


                     <div class="col-6 col-sm-6 mt-4 mt-sm-0">
                      <select name="se"
                      id="se" class="multisteps-form__select form-control">
                        <option selected="selected">Sector Empresarial...</option>

                      <option value="1">Actividades  Artísticas, de entretenimiento y recreativas </option>
                      <option value="2">Actividades de alojamiento y de servicio de comidas</option>
                      <option value="3">Actividades de atencion de la salud humana y de asistencia social</option>
                      <option value="4">Actividades de los hogares como empleadores</option>
                      <option value="5">Actividades de organizaciones y organos extraterritoriales</option>
                      <option value="6">Actividades de Servicios administrativos y de apoyo</option>
                      <option value="7">Actividades financieras y de seguros</option>
                      <option value="8">Actividades Inmobiliarias</option>
                      <option value="9">Actividades  legislativas, gubernamentales, de imparticion de justicia y de organismos internos</option>
                      <option value="10">Actividades  profesionales, cientificas y tecnicas</option>
                      <option value="11">Administracion publica y defensa, planes de seguridad social de afiliación obligatoria</option>
                      <option value="12">Agricultura, agandería, silvicultura y pesca</option>
                      <option value="13">Comercio al por mayor</option>
                      <option value="14">Comercio al por menor</option>
                      <option value="15">Construccion</option>
                      <option value="16">Corporativos</option>
                      <option value="17">Enseñanza</option>
                      <option value="18">Industrias manufactureras</option>
                      <option value="19">Informacion y comunicaciones</option>
                      <option value="20">Mineria</option>
                      <option value="21">Reparación de Vehículos</option>
                      

                         
                      </select>
                    </div>

                      <div class="col-6 col-sm-6 mt-4 mt-sm-0">
                      <select name="ge"
                      id="ge" class="multisteps-form__select form-control">
                        <option selected="selected">Giro de Empresa...</option>

                      <option value="1">INDUSTRIAL: EXTRACTIVA</option>
                      <option value="2">INDUSTRIAL: MANUFACTURERA</option>
                      <option value="3">INDUSTRIAL: PRODUCTORA DE BIENES DE CONSUMO FINAL</option>
                      <option value="4">INDUSTRIAL: PRODUCTORA DE BIENES DE CAPITAL</option>
                      <option value="5">INDUSTRIAL: AGROPECUARIA</option>
                      <option value="6">COMERCIAL: MAYORISTA</option>
                      <option value="7">COMERCIAL: MENUDEO</option>
                      <option value="8">COMERCIAL: MINORISTA O DETALLISTA</option>
                      <option value="9">COMERCIAL: COMISIONISTA</option>
                      <option value="10">SERVICIO: TRANSPORTE</option>
                      <option value="11">SERVICIO: TURISMO</option>
                      <option value="12">SERVICIO: INSTITUCI&Oacute;N FINANCIERA</option>
                      <option value="13">SERVICIO: SERVICIOS P&Uacute;BLICOS VARIOS</option>
                      <option value="14">SERVICIO: SERVICIOS PROFESIONALES</option>
                      <option value="15">SERVICIO: EDUCACI&Oacute;N</option>
                      <option value="16">SERVICIO: SALUD</option>
                      <option value="17">SERVICIO: COMUNICACI&Oacute;N</option>
                      <option value="18">OTRA</option>

                         
                      </select>
                    </div>

                   </div>




                   <div class="form-row mt-4"><!--inicio -->


                   <div class="col">
                    <!--  <input name="actividad_anteSAT" id="actividad_anteSAT"  class="multisteps-form__input form-control" type="text" placeholder="Actividad ante SAT" autocomplete="off" required=""/>-->


  <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-info" placeholder="Teclee la actividad registrada el ante SAT..." autocomplete="off" required>

                 


                    </div>

                  </div>
                    <div class="form-row mt-4"><!--inicio -->
                   <div class="col-md-12" style="margin-top: -38px;margin-left: 0px;">
                          <div class="list-group" id="show-list">
                      
                  </div>
                  </div>
                </div>
				
				  <div class="form-row mt-4"><!--inicio subir curriculum -->

                 
                      <div class="form-group">
                     <label for="validate-text" class="titulosRegistro">Anexar Curriculum:</label>
                       </div>


                  <input  type="file"  class="form-control-file" name="archivos[]" id="archivos[]"   multiple >

                   </div>
				
				
				



                  <div class="row">
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Atras</button>

                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Siguiente</button>

                       


                    </div>
                  </div>
                </div>
              </div>

               <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Datos Compareciente</h3>
                <div class="multisteps-form__content">

                  <div class="form-row mt-4"><!--inicio -->

                    <div class="col-12 col-sm-6">
                      <input name="nc" id="nc"  class="multisteps-form__input form-control" type="text" placeholder="Nombre Compareciente" required=""/>
                    </div>

                    <div class="col-12 col-sm-6">
                      <input name="apc" id="apc"  class="multisteps-form__input form-control" type="text" placeholder="Apellido Paterno" required=""/>
                    </div>

                  </div>

                   <div class="form-row mt-4"><!--inicio -->

                    <div class="col-12 col-sm-6">
                      <input name="apmc" id="apmc"  class="multisteps-form__input form-control" type="text" placeholder="Apellido Materno" required=""/>  
                    </div>


                     <div class="col-6 col-sm-6 mt-4 mt-sm-0">
                      <select name="ge"
                      id="ge" class="multisteps-form__select form-control">
                        <option selected="selected">Identificacion...</option>
                      <option value="IFE">IFE</option>
                      <option value="PASAPORTE">PASAPORTE</option>
                      <option value="CARTILLA">CARTILLA</option>
                      <option value="INE">INE</option>
                      <option value="CEDULA PROFESIONAL">CEDULA PROFESIONAL</option>

                         
                      </select>
                    </div>





                    </div>

                    <div class="form-row mt-4"><!--inicio -->

                    <div class="col-12 col-sm-6">
                      <input name="ni" id="ni"  class="multisteps-form__input form-control" type="text" placeholder="Numero Identificacion" required=""/>  
                    </div>


                  <div class="col-12 col-sm-6">
                      <input name="tp" id="tp"  class="multisteps-form__input form-control" type="text" placeholder="Tipo Poder" required=""/>  
                    </div>



                    

                    </div>



                 
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Atras</button>
					<button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Siguiente</button>
					

                    <!-- <button   class="btn btn-success ml-auto" onclick="return agregarUsuarioNuevo()" >Registar</button>-->
					
					 <!--<button   class="btn btn-success ml-auto" type="button" >Registar</button>-->
                   
                  </div>
				  
				  
				  
				  
				  
				 
                </div>
              </div>
			  
			  
			    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Especialidad</h3>
                <div class="multisteps-form__content">
				
				
				 <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Atras</button>
					
					

                    <button   class="btn btn-success ml-auto" onclick="return agregarUsuarioNuevo()" >Registar</button>
					
					 <!--<button   class="btn btn-success ml-auto" type="button" >Registar</button>-->
                   
                  </div>
				
				
				
				
				 </div>
              </div>
			  
			  
			  
			  
			  

            </form>

           <!--  <div class="col-md-5" style="position:margin-top:10px;margin-left: 30px; margin-bottom: 100px;">
               <div class="list-group" id="show-list">
                      
                </div>
                </div>-->

			
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!--  ////////%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<!--  ////////%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<!--  ////////%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<!--  ////////%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

  
  <script src="../librerias/jquery-3.5.1.min.js"></script>
  <script src="../librerias/jquery-ui-1.12.1/jquery-ui.js"></script>
<script src="../librerias/sweetalert.min.js"></script>
<script src="../js/fisica-moral.js"></script>
<script src="../js/toastr.min.js"></script>

<script src="../multipasos/movimiento.js"></script>
<script  src="../multipasos/function.js"></script>

 <script type="text/javascript">

function selectPais(){
    var d=document.getElementById("listPais");
    var displaytext=d.options[d.selectedIndex].text;
    document.getElementById("txtPais").value=displaytext;
  }
function selectEdo(){
    var d=document.getElementById("listEstado");
    var displaytext=d.options[d.selectedIndex].text;
    document.getElementById("txtEdo").value=displaytext;
  }

function selectAse(){
    var d=document.getElementById("listAsentamiento");
    var displaytext=d.options[d.selectedIndex].text;
    document.getElementById("txtAse").value=displaytext;
  }

  






function  agregarUsuarioNuevo(){
  //alert(“Enviando el formulario”);
   $.ajax({
     method:"POST",
     data: $('#frmRegistro').serialize(),
     url:"../procesos/usuario/registro/reg_fisica_contratista.php",
     success: function(respuesta){
     //alert(respuesta);
         respuesta = respuesta.trim();

         if (respuesta==1){
        $("#frmRegistro")[0].reset();
        swal(":D","agregado con exito!","success");
      
       location.href ="gestor.php";


       }else if(respuesta == 2){
                swal("Este usuario ya existe en la base de datos");

       }else{

        swal(":(","Fallo en agregar!","error");
       }

       console.log(respuesta);

     
    
     }
     
   });
   
   return false;

 }

 function traer() {
      var endpoint_sepomex  = "http://api-sepomex.hckdrk.mx/query/";
      var method_sepomex = 'info_cp/';
      
      var cp = $("#cp").val();
      console.log(cp);
      var variable_string = '?type=simplified';
      var url = endpoint_sepomex + method_sepomex + cp + variable_string;
      
      $.get( url ,function(data){
        
      console.log(data);
      //este a partir de aqui empezamos a programar
      var content = data['response'] || [];
    
      $('#Localidad').val(content['ciudad']);
      //$('#entidad').val(content['estado']);

     $('#Edo').val(content['estado']);
      
      $('#listamunicipio').val(content['municipio']);
      //$('#asentamiento').val(content['tipo_asentamiento']);
      
      carga_asentamientos(content['asentamiento']);
      })
      //alert("HOLA MUNDO");    
      } 

          function carga_asentamientos(list){
      var select = document.getElementsByName('clistacolonia')[0];

      for (value in list) {
        var option = document.createElement("option");
        option.text = list[value];
        select.add(option);
      }
    }



    $(document).ready(function () {
  // Send Search Text to the server
  $("#search").keyup(function () {
    let searchText = $(this).val();
    if (searchText != "") {
      $.ajax({
        url: "../clases/buscar_actividad.php",
        method: "post",
        data: {
          query: searchText,
        },
        success: function (response) {
          $("#show-list").html(response);
        },
      });
    } else {
      $("#show-list").html("");
    }
  });
  // Set searched text in input field on click of search button
  $(document).on("click", "a", function () {
    $("#search").val($(this).text());
    $("#show-list").html("");
  });
});


    $(".readonly").on('keydown paste', function(e){
        e.preventDefault();
    });
	
	
	$(function(){
   var fechaA= new Date();
   var yyyy=fechaA.getFullYear();
$("#fechaExp").datepicker({
  changeMonth:true,
  changeYear:true,
  yearRange:'1900:'+ yyyy,
  dateFormat: "dd-mm-yy"

});
});






   

</script>
</body>
 
</html>