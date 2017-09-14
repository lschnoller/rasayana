<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.form.js"></script> 
<script type="text/javascript">
jQuery(document).ready(function($) {
		var options = {
				target: '#form-response',
				success: showResponse
		};  
  		$('#ajax-form').ajaxForm(options); 
});
function showResponse(responseText, statusText, xhr, $form)  { 
    if(responseText == 'done')
    {
        jQuery.noConflict();
        jQuery('#form-submit').html('El formulario ha sido enviado con &eacute;xito. <br />Nos contactaremos con usted a la brevedad.');
        jQuery('#form-title').remove();
		  jQuery('#ajax-form').remove();
    }
}
</script>
<style type="text/css">
	#containerDiv {
		width: 500px;
	}
	#form-response{
		color: red;
}
</style>
</head>
<body>
<div id="containerDiv" style="">
   <div class="form">  
   	<h1 id="form-submit"></h1>
   	<h1 id="form-title">Formulario de Inscripci&oacute;n
   	<br />
   	<span style="font-size:15px; color:#000">Adherite a nuestro Newsletter</span>
   	</h1>  
   	<form action="/servicios/form" method="post" id="ajax-form"> 
   	<input type="hidden" name="section" value="Suscripcion a Newsletter" />
   	
   	<p id="form-response"></p>  
      <p class="input-label">Nombre</p><input type="text" class="input" name="name"/>
      <p class="input-label">Apellido</p><input type="text" class="input" name="lastname"/>
      <p class="input-label">Tel&eacute;fono</p><input type="text" class="input" name="phone"/>
      <p class="input-label">Email</p><input type="text" class="input" name="email"/>
      <p class="input-label"></p><input class="input" type="submit" value="ENVIAR"/>
     </form>
   </div>
</div>
</body>
</html>