<?php 
session_start();
if (isset($_SESSION['usuario'])){
include "header.php";

 ?>
<div class="container">
	<div class="row">
		<div class="col-small-12">
			

		</div>
	</div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" >

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">POLITICA DE PRIVACIDAD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
      	<div class="text-justify">
        Política de Privacidad!”, “Consultoría G&G., con domicilio en Diagonal de la 19 poniente 2307, Colonia Santa Cruz los Ángeles, C.P. 72400, en La Ciudad de Puebla, Puebla, con el propósito de ofrecerles una tranquilidad y seguridad del buen uso y protección de sus datos personales, damos cumplimiento a lo estipulado en los artículos 15 y 24 de la Ley de Protección de Datos Personales en Posesión de los Particulares, así como también los artículos 23, 24 fracciones IV y VI y 25 de la Ley General de Transparencia y Acceso a la Información Pública; 3 y 11 de la Ley de Transparencia y Acceso a la Información Pública del Estado de Puebla; y demás disposiciones en la materia. Por lo anterior, me obligo a mantener en estricta confidencialidad, toda información que dispongo, utilizo, conozco o llegue a conocer. Por lo que no podré reproducir, modificar, hacer pública o divulgar a terceros la información objeto de la presente sin previa autorización escrita y expresa. De igual forma, adoptaré en la información que tenga acceso las mismas medidas de seguridad que adoptaría normalmente respecto a la información confidencial, evitando, en lo posible, su pérdida, robo o sustracción, así como el mal uso de la misma respecto del cual llegare a tener conocimiento.

         Protección de Datos Personales 

        Acepto que los datos proporcionados a continuación serán verídicos, por lo que autorizo que mis datos puedan ser utilizados de manera adecuada, con base en la normatividad aplicable (Ley Federal de Protección de Datos Personales en Posesión de los Particulares).</div> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
     <!--   <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>




<?php
include "footer.php";
}else{
	header("location:../index.php");
}

 ?>