<?php
?>

<!doctype html>
<html class="no-js" lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ayuntamiento</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>


<form data-abide action="#">
    <div class="row">
      <div class="large-11 columns">
        <h5>Tramites de Servicios Administrativos</h5>
		<hr />
      </div>
    </div>
    <div class="row">
      <div class="large-4 columns">
        <h6>Responsabilidad Patrimonial</h6>
      </div>
      <div class="large-7 columns">
        <h7><a href="#" style="color:#000000;" target="_blank">Ley de Responsabilidad Patrimonial del Estado de Jalisco</a></h7>
      </div>
      <div class="large-1 columns">
      </div>
    </div>
    <div class="row">
    	<div class="large-11 columns">
    		<p class="descripcion">
    			<strong>Fundamento.-</strong> Ley de Responsabilidad Patrimonial del Estado de Jalisco y sus Municipios (entro en vigor el 01 primero de Enero de 2004)
    		</p>
			<p class="descripcion">
				<strong>Objetivo.-</strong> Fijar las bases, límites y procedimientos para reconocer el derecho a la indemnización a quienes, sin obligación jrurídica de soportarlo
				sufran daños en cualquiera de sus bienes o derechos como consecuencia de la actividad administrativa irregular del Municipio.
			</p>
			<p class="descripcion">
				El procedimiento de responsabilidad patrimonial deberá ajustarse,además de lo dispuesto en la Ley de Responsabilidad Patromonial a la:
			</p>
			<p class="descripcion" style="margin-left:30px;">
					Ley del Procedimiento Administrativo del Estado de Jalisco. (art. 18)
			</p>
			<p class="descripcion" style="margin-left:30px;">
					Las reclamaciones se iniciaran.- de oficio o a petición de parte interesada.
    		</p>
		<hr class="hr2" />
    	</div>
    </div>
    <div class="row">
    	<div class="large-3 columns centro bold">
    		Ciudad y fecha:
    	</div>
    	<div class="large-9 columns centro">
    		Ciudad y fecha:
    	</div>
    	<div class="large-3 columns centro bold">
    		La entidad a la que se dirige:
    	</div>
    	<div class="large-9 columns centro">
    		C. Síndico<br />H. Ayuntamiento Constitucional de Guadalajara, Jalisco.
    	</div>
    </div>
    <hr class="hr3" />
    <div class="row">
    	<div class="large-4 columns centro">
			<span style="float: left;">Es usted persona física o persona moral?
				&nbsp;&nbsp;<a href="javascript:void(0);" class="ayuda" data-dropdown="drop2" aria-controls="drop2" data-options="align:top;is_hover:true">&nbsp;</a>
				<div id="drop2" data-dropdown-content class="f-dropdown mega" aria-hidden="true">
				  Si es persona física solo deberá ingresar su nombre completo.<br /> Si es persona moral deberá ingresar el nombre del representante legal, así como adjuntar poder notarial o acta constitutiva que lo acredite como tal.
				</div>
			</span>
		</div>
    	<div class="large-8 columns centro">
			<label for="tipo_persona_a" class="radiosLabel">Física</label>
			<input type="radio" name="tipo_persona" id="tipo_persona_a" class="radios" value="fisica">
			<label for="tipo_persona_b" class="radiosLabel">Moral</label>
			<input type="radio" name="tipo_persona" id="tipo_persona_b" class="radios" value="moral">
    	</div>
    </div>
    <div class="row" id="div_fisica">
		<div class="large-4 columns">
			<label for="nombre">*Nombre
				<input type="text" id="nombre" name="nombre" required pattern="alpha_numeric" tabindex="1">
			</label>
			<small class="error">Nombre es obligatorio.</small>
		</div>    	
		<div class="large-4 columns">
			<label for="ap_p">*Apellido Paterno
				<input type="text" name="ap_p" id="ap_p" required pattern="alpha_numeric" tabindex="2">
			</label>
			<small class="error">Apellido Paterno es obligatorio.</small>
		</div>
		<div class="large-3 columns">
			<label for="ap_m">*Apellido Materno
				<input type="text" name="ap_m" id="ap_m" required pattern="alpha_numeric" tabindex="3">
			</label>
			<small class="error">Apellido Materno es obligatorio.</small>
		</div>
		<div class="large-1 columns">
		</div>
    </div>
    <div class="row" id="div_moral" style="display:none;">
		<div class="large-11 columns">
			<label for="razon_social">*Nombre o Razón Social
				<input type="text" id="razon_social" name="razon_social" pattern="alpha_numeric" tabindex="4">
			</label>
			<small class="error">Nombre o Razón Social es obligatorio.</small>
		</div>    	
		<div class="large-1 columns">
		</div>
    </div>
    <div class="row">
    	<div class="large-12 columns centro">
    		Domicilio Procesal: 
			&nbsp;&nbsp;<a href="javascript:void(0);" class="ayuda" data-dropdown="drop3" aria-controls="drop3" data-options="align:top;is_hover:true">&nbsp;</a>
			<div id="drop3" data-dropdown-content class="f-dropdown medium" aria-hidden="true">
			  Si es persona física solo deberá ingresar su nombre completo.<br /> Si es persona moral deberá ingresar el nombre del representante legal, así como adjuntar poder notarial o acta constitutiva que lo acredite como tal.
			</div>
    	</div>
		<div class="large-7 columns">
			<label for="calle"><small>*Calle</small>
				<input type="text" id="calle" name="calle" required pattern="alpha_numeric" tabindex="5">
			</label>
			<small class="error">Calle es obligatoria.</small>
		</div>    	
		<div class="large-2 columns">
			<label for="no_exterior"><small>*No. Exterior</small>
				<input type="text" name="no_exterior" id="no_exterior" required pattern="number">
			</label>
			<small class="error">No. Exterior es obligatorio.</small>
		</div>
		<div class="large-2 columns">
			<label for="no_interior"><small>*No. Interior</small>
				<input type="text" name="no_interior" id="no_interior" required pattern="alpha_numeric">
			</label>
		</div>
		<div class="large-1 columns">
		</div>
    </div>



  <button type="submit">Submit</button>

</form>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
	<script src="js/jquery.screwdefaultbuttonsV2.min.js"></script>
    <script>
      $(document).foundation();

		$(function(){
		
			$('input:radio').screwDefaultButtons({
				image: 'url("images/radioSmall.jpg")',
				width: 23,
				height: 23
			});
			$('#tipo_persona_a').screwDefaultButtons("check");

			$("input[name=tipo_persona]").on("change", function(event) {

				if($(this).val() == 'fisica') {
					$("#div_moral").css("display", "none");
					$("#div_fisica").css("display", "block");
					$("#nombre").attr('required','required');
					$("#ap_p").attr('required','required');
					$("#ap_m").attr('required','required');
					$("#razon_social").removeAttr('required');
				}
				if($(this).val() == 'moral') {
					$("#div_moral").css("display", "block");
					$("#div_fisica").css("display", "none");
					$("#razon_social").attr('required','required');
					$("#nombre").removeAttr('required');
					$("#ap_p").removeAttr('required');
					$("#ap_m").removeAttr('required');
				}
			});

		});


    </script>
  </body>
</html>
