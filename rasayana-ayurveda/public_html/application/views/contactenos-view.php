<div id="bd">
	<style>
		<!--
		.cleft{
			float: left;
			width: 200px;
			text-align: right;
			margin-top: 10px;
		}
		.cright{
			float: left;
			text-align: right;
			margin-left: 10px;
			margin-top: 10px;
		}
		.cright input{
			width: 500px;
			border: solid 1px #E8E8E8;
			padding: 7px;
			-moz-border-radius: 1em;
			color:#333333;
		}
		.cright textarea{
			color:#333333;
			width: 500px;
			height: 250px;
			border: solid 1px #E8E8E8;
			padding: 7px;
			-moz-border-radius: 1em;
		}
		-->
	</style>
   	<div style="position:relative">
      	<div class="header-title" style="top:-225px; right:150px; "></div>
      </div>
      
		<div class="c90" style="height: 400px;">   		
	   		<?php 
	   			if($send){
	   				echo '<h1>Muchas gracias por contactarte con nosotros. Te enviaremos una respuesta a la brevedad. </h1>';
	   			}else{
	   		?>
	   		<?php echo form_open(base_url().'contactenos'); ?>
	   		<div>
	   			<div class="cleft green">Nombre :</div>
	   			<div class="cright"><input type="text" name="nombre" value="<?php echo set_value('nombre'); ?>" /></div>
	   		</div>
	   		<div class="clear"></div>
	   		<div>
	   			<div class="cleft green">Asunto :</div>
	   			<div class="cright"><input type="text" name="asunto" value="<?php echo set_value('asunto'); ?>" /></div>
	   		</div>
	   		<div>
	   			<div class="cleft green">Email :</div>
	   			<div class="cright"><input type="text" name="email" value="<?php echo set_value('email'); ?>" /></div>
	   		</div>
	   		<div class="clear"></div>
	   		<div>
	   			<div class="cleft green">Consulta :</div>
	   			<div class="cright"><textarea name="mensaje"><?php echo set_value('mensaje'); ?></textarea></div>
	   		</div>
		</div>
		<div class="clear"></div>
   		<div style="margin: 20px 0 20px 680px; cursor:pointer;"><a class="mas" onclick="document.forms[0].submit();" style="width:50px">ENVIAR</a></div>
   		</form>
   		<?php }?>
   		<div><p style="text-align: center;">
	   		Paraguay 3474 P.B. (Capital Federal, Buenos Aires, Argentina)  | tel:  4822-3498
	   		</p>
	   		<p> </p>
   		</div>
	</div>
   
<!-- Google Code for Contactenos Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 987908326;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "nWgNCMrvuQIQ5pGJ1wM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/987908326/?label=nWgNCMrvuQIQ5pGJ1wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>