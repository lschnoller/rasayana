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
                    jQuery('#form-submit').html('El formulario ha sido enviado con &eacute;xito. <br />Nos contactaremos con usted a la brevedad.');
                    jQuery('#form-title').remove();
                    jQuery('#ajax-form').remove();
                }
            }
        </script>
        <style type="text/css">
            #containerDiv {
                width: 545px;
            }
            #form-response{
                color: red;
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
            }
            .submit-type:hover {
                color:#fff;
                background-color:#000;
            }
        </style>
    </head>
    <body>

        <div id="containerDiv" style="">
            <div class="form">  
                <h1 id="form-submit"></h1>
                <h1 class="form-title" id="form-title"><?= $values['title'] ?><br /><span style="font-size:15px; color:#000"><?= $values['date_text'] ?></span></h1>   
                <form action="/actividades/getevent/calendar/<?= $values['id'] ?>" method="post" id="ajax-form">
                    <p class="input-label" style="margin-bottom: 10px">Dejanos tus datos y te contactaremos a la brevedad.</p>
                  <!--<p class="input-label"></p>
                    <p class="input-label" style="margin-bottom:1em;"><?= $values['description'] ?></p> -->
                    <p id="form-response"></p>  
                    <p class="input-label">Nombre</p><input type="text" class="input" name="name"/>
                    <p class="input-label">Apellido</p><input type="text" class="input" name="lastname"/>
                    <p class="input-label">Tel&eacute;fono</p><input type="text" class="input" name="phone"/>
                    <p class="input-label">Email</p><input type="text" class="input" name="email"/>
                    <p class="input-label"></p><input class="input submit-type" type="submit" value="SOLICITAR INFORMACION" style="width:inherit; font-size:14px;margin-left:139px;margin-top:29px;"/>
                </form>
            </div>
        </div>

    </body>
</html>