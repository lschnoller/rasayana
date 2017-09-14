<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php
        if (!isset($title))
            $title = 'Ayurveda | Centro Ayurveda Buenos Aires | Bienestar Integral';
        if (!isset($keywords))
            $keywords = 'Ayurveda, Centro Ayurveda Buenos Aires, Método Rasayana Ayurveda';
        if (!isset($description))
            $description = 'Nuestros programas incluyen, consulta ayurveda, técnicas de meditación, masaje Ayurveda, tratamientos de belleza, cursos, talleres temáticos y formaciones e instructorado Ayurveda';
        ?>
        <title><?= $title; ?></title>
        <meta name="keywords" content="<?= $keywords; ?>" />
        <meta name="description" content="<?= $description; ?>" />


        <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>design/favicon.ico" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/reset-fonts-grids.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" />
        <link rel="stylesheet" href="<?= base_url() ?>css/sam_menu_2_8_1.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/facebox.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/calendar.css" type="text/css" media="screen" />

        <!--<meta http-equiv="cache-control" content="public" />
        <meta http-equiv="expires" content="never" />-->

<!--<script type="text/javascript" src="http://developer.yahoo.com/yui/build/yahoo-dom-event/yahoo-dom-event.js"></script>
<script type="text/javascript" src="http://developer.yahoo.com/yui/build/animation/animation.js"></script>
<script type="text/javascript" src="http://developer.yahoo.com/yui/build/container/container_core.js"></script>
<script type="text/javascript" src="http://developer.yahoo.com/yui/build/menu/menu.js"></script>-->


        <script type="text/javascript" src="<?= base_url() ?>js/prototype.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/yahoo-dom-event.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/animation-min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/container_core-min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/menu-min.js"></script>
        <!--<script type="text/javascript" src="<?= base_url() ?>js/jquery-1.3.2.min.js"></script>	-->
        <!--<script type="text/javascript" src="<?= base_url(); ?>js/jquery-1.4.2.min.js"></script>-->
        <script type="text/javascript" src="<?= base_url(); ?>js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>js/jquery-ui-1.11.1.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>js/facebox.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>js/coda.js"></script>

        <script type="text/javascript">
            /*
            function prevMO(el) {
                jQuery(el).find('h4 a').addClass('title-active');
                jQuery(el).find('a.mas').addClass('mas-hover');
                jQuery(el).addClass('mas-hover');
            }
            function prevMU(el) {
                jQuery(el).find('h4 a').removeClass('title-active');
                jQuery(el).find('a.mas').removeClass('mas-hover');
            }
            */
            jQuery(document).ready(function($) {
                
                if (typeof url === 'undefined')
                    url ='';
                
                $('a[rel*=facebox]').facebox();
                $('.highlights-box a').each(function(i, e) {
                    href = $(e).attr('href').toLowerCase();
                    if (href.indexOf(url) >= 0)
                        $(e).addClass('selected');
                });

                $('.button-box').bind({
                    mouseenter: function() {
                        jQuery(this).find('h4').addClass('title-active');
                        jQuery(this).find('.mas').addClass('mas-hover');
                        //jQuery(this).addClass('mas-hover');
                    },
                    mouseleave: function() {
                        jQuery(this).find('h4').removeClass('title-active');
                        jQuery(this).find('.mas').removeClass('mas-hover');
                    }
                });

            });

            document.observe('dom:loaded', function() {
                //for highlights box
                function noScroll() {
                    var _oOffset = $('highlights-box-noscroll').cumulativeOffset();
                    var _oTop = _oOffset[1];
                    var _closeEnough = 11; // PX
                    Event.observe(window, 'scroll', function() {
                        var sOffset = document.viewport.getScrollOffsets();
                        var sTop = sOffset[1];
                        var realDistance = _oTop - sTop;
                        if (realDistance < _closeEnough)
                            $('highlights-box-noscroll').addClassName('hb-fixed');
                        else
                            $('highlights-box-noscroll').removeClassName('hb-fixed');
                    });
                }
            });


        </script>
        <style type="text/css">
            #actividades .bd ul li#yui-gen4 a {
                font-size:10px !important;
            }
        </style>
    </head>
    <body>
        <div id="doc2">
            <div id="hd">
                <div class="header-container"> 

                    <a href="<?= base_url() ?>" id="gs-logo">
                        <img src="<?= base_url() ?>design/logo-hor.jpg" title="Rasayana Ayurveda Wellness®" alt="Rasayana Ayurveda Wellness" width="444" height="64" /></a>
                    <!--
                    <div style="position:relative"><a href="<?= base_url() ?>mba" id="mba-logo" style="margin-top: 1em;">&nbsp;AYURVEDA WELLNESS</a>
                        <div class="rasayana-underline">&nbsp;</div>
                        <div class="rasayana-underline2">&nbsp;</div>
                    </div>
                    -->
                </div>
                <div class="header-container" style="height: 20px; padding-bottom:0">
                    <div class="yui-g">
                        <div class="yui-u first">
                            <table>
                                <tr>
                                    <td class="borderright secondaryMenu" style="padding-left: 0"><a href="<?php echo base_url() ?>">INICIO</a></td>
                                    <td class="borderright secondaryMenu"><a href="<?php echo base_url() ?>centro_gs">NUESTRO CENTRO</a></td>
                                    <td class="borderright secondaryMenu"><a href="<?php echo base_url() ?>metodo_rasayana_ayurveda_wellness">METODO RASAYANA</a></td>
                                    
                                    <td class="borderright secondaryMenu"><a href="<?php echo base_url() ?>equipo">EQUIPO</a></td>

                                    <td class="borderright secondaryMenu"><a href="<?php echo base_url() ?>actividades/agenda">AGENDA</a></td>
                                    <!--<td class="borderright secondaryMenu"><a href="http://blog.biodinamica-ayurveda.com/">NOTAS</a></td>-->
                                    <td class="secondaryMenu"><a href="<?php echo base_url() ?>contactenos">CONTACTENOS</a></td>
                                    <!--<td class="secondaryMenu"><a href="<?php echo base_url() ?>">LOGIN</a></td>-->
                                </tr>
                            </table>
                        </div>
                        <div class="yui-u">
                            <!-- RIGHT MENU COMES HERE -->
                        </div>
                    </div>
                </div>
                <div id="big-image" style="background-image: url('<?php echo base_url() ?>design/<?php echo $image ?>')">       
                    <?php
                    switch (strtolower($image)) {
                        case 'charlas_y_talleres.jpg':
                            ?>
                            <div id="big-image-text" style="position: absolute; width: 450px; text-align: left; left:163px; top: 114px;">
                                <div class="big-image-title" style="font-size:40px">CURSOS AVANZADOS</div>
                                <!--<div class="big-image-subtitle">"El alma no es una meta lejana, sino un aspecto oculto del yo."</div>  
                                <div class="big-image-author">Deepak Chopra</div>-->
                            </div>
                            <?php
                            break;
                        case 'cursos-basicos.jpg':
                            ?>
                            <div id="big-image-text" style="position: absolute; width: 364px; text-align: left; left:163px; top: 195px;">
                                <div class="big-image-title" style="font-size:38px">CURSOS BASICOS</div>
                                <!--<div class="big-image-subtitle" style="font-size:15px; margin-left:5px">"Estamos participando en el nacimiento de un nuevo ser humano."</div>  
                                <div class="big-image-author" style="">Carl Rogers</div>  -->
                            </div>
                            <?php
                            break;
                        case 'camino-instructor.jpg':
                            ?>
                            <div id="big-image-text" style="position: absolute; width: 512px; text-align: left; right:20px; top: 108px;">
                                <div class="big-image-title" style="font-size:44px">EL CAMINO DEL INSTRUCTOR</div>
                                <!--<div class="big-image-subtitle" style="font-size:15px; margin-left:5px">Una formación integral para profundizar en uno mismo y compartir las técnicas del RAW.</div>  
                                <div class="big-image-author" style=""></div>  -->  
                            </div>
                            <?php
                            break;
                        case 'consulta-ayurveda.jpg':
                            ?>
                            <div id="big-image-text" style="position: absolute; width: 400px; text-align: left; left:53px; top: 130px;">
                                <div class="big-image-title" style="font-size:33px">CONSULTA PERSONAL</div>
                                <!--<div class="big-image-subtitle" style="font-size:14px; margin-left:5px">“Para vivir una vida sana, plena y creativa debes  
        liberarte  de los hábitos tóxicos y de los  
        condicionamientos de la mente.”</div>  
                                <div class="big-image-author" style="">Deepak Chopra</div>  -->
                            </div>
                            <?php
                            break;
                        case 'masaje-ayurveda.jpg':
                            ?>
                            <div id="big-image-text" style="position: absolute; width: 401px; text-align: left; left:153px; top: 100px;">
                                <div class="big-image-title" style="font-size:40px; letter-spacing: 1px">MASAJE AYURVEDA</div>
                                <!--<div class="big-image-subtitle" style="font-size:15px;">"El masaje es un encuentro con nuestra intimidad, con nuestra historia actualizada en el cuerpo presente."</div>  
                                <div class="big-image-author" style="">Mirta Casado</div>-->
                            </div>
                            <?php
                            break;
                        case 'meditacion-biodinamica.jpg':
                            ?>
                            <div id="big-image-text" style="position: absolute; width: 540px; text-align: right; right:28px; top: 120px;">
                                <div class="big-image-title">MEDITACION BIODINAMICA</div>
                                <!--<div class="big-image-subtitle" style="font-size:16px;">"La Meditación es un arte espiritual, es convertirse en observador, 
        es aprender a presenciar."</div>  
                                <div class="big-image-author" style="font-size:17px; margin-top:10px">Osho</div>  -->
                            </div>
                            <?php
                            break;
                        case 'tratamientos.jpg':
                            ?>
                            <div id="big-image-text" style="position: absolute; width: 321px; text-align: right; right:28px; top: 120px;">
                                <div class="big-image-title" style="font-size:35px;">TRATAMIENTOS</div>
                                <!--<div class="big-image-subtitle" style="font-size:16px;">"Dadme la belleza del alma interior y que el interior y el exterior sean uno solo."</div>  
                                <div class="big-image-author" style="font-size:17px; margin-top:10px">Sócrates</div> --> 
                            </div>
                            <?php
                            break;
                        case 'cosmetica2.jpg':
                            ?>
                            <div id="big-image-text" style="position: absolute; width: 386px; text-align: right; right:99px; top: 130px;">
                                <div class="big-image-title" style="font-size:40px;">COSMETICA</div>
                                <!--<div class="big-image-subtitle" style="font-size:16px;">"Dadme la belleza del alma interior y que el interior y el exterior sean uno solo."</div>  
                                <div class="big-image-author" style="font-size:17px; margin-top:10px">Sócrates</div>  -->
                            </div>
                            <?php
                            break;
                        case 'aceites-naturales.jpg':
                            ?>
                            <div id="big-image-text" style="position: absolute; width: 381px; text-align: center; left:87px; top: 120px;">
                                <div class="big-image-title" style="color:#555;">ACEITES NATURALES</div>
                                <!--<div class="big-image-subtitle" style="font-size:19px; text-shadow: 1px 1px 2px #000;">Aceites esenciales de las rasayanas.</div>  
                                <div class="big-image-author" style="font-size:17px; margin-top:10px"></div>  -->
                            </div>
                            <?php
                            break;
                        //default:		
                    }
                    ?>
                    <!-- <div id="back-url">
                      <a href="<?php echo base_url() ?>">Inicio</a>
                      >
                      <a href="<?php echo base_url() ?>">Cursos</a>
                   </div> -->


                    <div style="position: absolute; top:-48px; right:17px; text-align:right; margin-bottom: 10px; color:#ababab;font-size:15px">TEL: (011) 4822-3498</div>      

                    <div id="menucont">
                        <div id="productsandservices" class="yuimenubar yuimenubarnav">
                            <div class="bd">
                                <ul id="main-menu" class="first-of-type">
                                    <li class="yuimenubaritem topmenu "> <a class="yuimenubaritemlabel" <?= ($this->uri->segment(1) == 'ayurveda') ? 'id="activemain"' : ''; ?> href="#" style="font-size:13px">AYURVEDA</a> </li>
                                    <li class="yuimenubaritem topmenu "  style="margin-left: 6px;"> <a class="yuimenubaritemlabel" <?= ($this->uri->segment(1) == 'servicios' || $this->uri->segment(1) == 'cosmetica_y_tratamientos') ? 'id="activemain"' : ''; ?> href="#" style="font-size:12px">REJUVENECIMIENTO</a> </li>
                                    <li class="yuimenubaritem first-of-type topmenu " style="margin-left: 6px;"> <a class="yuimenubaritemlabel" <?= ($this->uri->segment(1) == 'actividades') ? 'id="activemain"' : ''; ?> href="#" style="font-size:13px">FORMACION</a></li>



                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- big image -->

                <div style="position:relative">
                    <div style="position:absolute; right:20px; top:-40px;">
                                                                                                                                                                       <span style="float:right; margin:0px 2px 0 7px; color:#aaa; font:16px 'century gothic', arial, sans-serif">| <a href="http://blog.rasayana-ayurveda.com" style="color:#ff6600">BLOG DE NOTAS</a><!--<img style="float:right; margin:0px 2px 0 7px;" src="<?= base_url() ?>design/tel.png" />--></span>
                            <a id="fb-icon" href="https://www.facebook.com/rasayana.ayurveda.wellness" target="_blank" style="float:right; margin-top:-2px; width:25px; height:25px;"><!--<img src="<?php echo base_url() ?>" style="float:right; margin-top:-2px" height="20" />--></a>

                        <!-- SPACE -->
                    </div>
                </div>
            </div><!-- hd -->
