<html>
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.form.js"></script> 
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                var options = {
                    target: '#form-response',
                    success: showResponse
                };
                $('#ajax-form').ajaxForm(options);
            });
            function showResponse(responseText, statusText, xhr, $form) {
                if (responseText == 'done')
                {
                    jQuery.noConflict();
                    jQuery('#form-submit').show();
                    jQuery('#form-title').remove();
                    jQuery('#ajax-form').remove();
                    jQuery('#pop-form').remove();
                }
            }
        </script>
        <style type="text/css">
            #containerDiv {
                width: 545px;
                
            }
            .form{
                background-image: url("/design/sol-rasayana-op.png"), linear-gradient(to bottom, #7A7F41 0%, #818643 31px);
                background-position: bottom center;
                background-repeat: no-repeat;
            }
            #form-response{
                color: black;
            }
            .input {
                width:80%;
            }
            .input-label {
                font-size:18px;
            }
            .form-title {
                margin-bottom:.5em;
            }
            .submit-type {
                width:inherit;
                cursor:pointer;
                outline:none;
                background-color: #832C26;
                color:#fff;
                border:1px solid #66221D;
            }
            .submit-type:hover {
                color:#fff;
                background-color:#000;
            }
        </style>
    </head>
    <body>

        <div id="containerDiv" style="">
            <div class="form" style='min-height:143px'>  
                <h1 id="form-submit" style='margin-top:50px; display:none'>El formulario ha sido enviado con &eacute;xito. <br />Te contactaremos a la brevedad.</h1>
                <h1 class="form-title" id="form-title" style="margin-bottom:1em; margin-top:10px">Consulta de Capacitación <?=strtoupper($title)?></h1>   
                <div id='pop-form'>
                    <div style='float:left; width:44%'>
                        <p style="color:#fff">Completa el formulario para que te enviemos la información de nuestra próxima capacitación.</p>
                    </div>
                    <div style='float:left;clear:right; width:45%;margin-left:6%;padding-left:4%;border-left:1px solid #d0de6d'>
                        <form action="/actividades/popupform/<?=$title?>" method="post" id="ajax-form">
                             
                            <p class="input-label">Nombre</p><input type="text" class="input" name="name"/>
                            <p class="input-label">Apellido</p><input type="text" class="input" name="lastname"/>
                            <p class="input-label">Tel&eacute;fono</p><input type="text" class="input" name="phone"/>
                            <p class="input-label">Email</p><input type="text" class="input" name="email"/>
                            <p class="input-label"></p><input class="input submit-type" type="submit" value="SOLICITAR INFORMACION" style="width:inherit; font-size:14px; margin-top:29px;"/>
                            <p id="form-response"></p> 
                        </form>
                    </div>
                    <div style="clear:both">&nbsp;</div>
                </div>
            </div>
        </div>

    </body>
</html>