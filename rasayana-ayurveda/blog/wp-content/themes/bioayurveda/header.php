<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<?php
//$BASE_URL = 'http://localhost:10192/';
$BASE_URL = 'http://www.rasayana-ayurveda.com/';
?>
<html <?php language_attributes(); ?>> 
    <head> 
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title>Rasayana Ayurveda Wellness | Blog de Notas<?php wp_title(); ?> <?php bloginfo('name'); ?></title> 
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
        <?php wp_head(); ?>

        <link rel="stylesheet" href="<?= $BASE_URL ?>css/reset-fonts-grids.css" type="text/css" /> 
        <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?= $BASE_URL ?>css/sam_menu_2_8_1.css" /> 

        <script type="text/javascript" src="<?= $BASE_URL ?>js/prototype.js"></script> 
        <script type="text/javascript" src="<?= $BASE_URL ?>js/yahoo-dom-event.js"></script> 
        <script type="text/javascript" src="<?= $BASE_URL ?>js/animation-min.js"></script> 
        <script type="text/javascript" src="<?= $BASE_URL ?>js/container_core-min.js"></script> 
        <script type="text/javascript" src="<?= $BASE_URL ?>js/menu-min.js"></script> 

<!--<script type="text/javascript" src="http://developer.yahoo.com/yui/build/yahoo-dom-event/yahoo-dom-event.js"></script>
<script type="text/javascript" src="http://developer.yahoo.com/yui/build/animation/animation.js"></script>
<script type="text/javascript" src="http://developer.yahoo.com/yui/build/container/container_core.js"></script>
<script type="text/javascript" src="http://developer.yahoo.com/yui/build/menu/menu.js"></script>--> 
        

       

        <!-- MENU ENDS --> 
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
                    
                    <a href="<?= $BASE_URL ?>" id="gs-logo">
                        <img src="<?= $BASE_URL ?>design/logo-hor.png" title="Rasayana Ayurveda Wellness" alt="Rasayana Ayurveda Wellness" width="444" height="64" /></a>
                    <!--
                    <div style="position:relative"><a href="<?= $BASE_URL ?>mba" id="mba-logo" style="margin-top: 1em;">&nbsp;AYURVEDA WELLNESS</a>
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
                                    <td class="borderright secondaryMenu" style="padding-left: 0"><a href="<?php echo $BASE_URL ?>">INICIO</a></td>
                                    <td class="borderright secondaryMenu"><a href="<?php echo $BASE_URL ?>metodo_rasayana_ayurveda_wellness">METODO RASAYANA</a></td>
                                    <td class="borderright secondaryMenu"><a href="<?php echo $BASE_URL ?>centro_gs">CENTRO</a></td>
                                    <td class="borderright secondaryMenu"><a href="<?php echo $BASE_URL ?>equipo">EQUIPO</a></td>
                                    
                                    <td class="borderright secondaryMenu"><a href="<?php echo $BASE_URL ?>actividades/agenda">AGENDA</a></td>
                                    <!--<td class="borderright secondaryMenu"><a href="http://blog.biodinamica-ayurveda.com/">NOTAS</a></td>-->
                                    <td class="secondaryMenu"><a href="<?php echo $BASE_URL ?>contactenos">CONTACTENOS</a></td>
                                    <!--<td class="secondaryMenu"><a href="<?php echo $BASE_URL ?>">LOGIN</a></td>-->
                                </tr>
                            </table>
                        </div>
                        <div class="yui-u">
                            <!-- RIGHT MENU COMES HERE -->
                        </div>
                    </div>
                </div>
                <div id="big-image" style="background-image: url('<?php echo $BASE_URL ?>design/blog.jpg')">   
                    <div style="position: absolute; top:-48px; right:17px; text-align:right; margin-bottom: 10px; color:#ababab;font-size:15px">TEL: (011) 4822-3498</div>
                    <div id="menucont">
                        <div id="productsandservices" class="yuimenubar yuimenubarnav">
                            <div class="bd">
                                <ul id="main-menu" class="first-of-type">
                                    <li class="yuimenubaritem topmenu "> <a class="yuimenubaritemlabel" href="#" style="font-size:13px">AYURVEDA</a> </li>
                                    <li class="yuimenubaritem topmenu "  style="margin-left: 6px;"> <a class="yuimenubaritemlabel" href="#" style="font-size:12px">REJUVENECIMIENTO</a> </li>
                                    <li class="yuimenubaritem first-of-type topmenu " style="margin-left: 6px;"> <a class="yuimenubaritemlabel" href="#" style="font-size:13px">FORMACION</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div><!-- big image -->
                
                <div style="position:relative">
                    <div style="position:absolute; right:20px; top:-40px;">
                                                                                                                                                                       <span style="float:right; margin:0px 2px 0 7px; color:#aaa; font:16px 'century gothic', arial, sans-serif">| <a href="http://blog.rasayana-ayurveda.com" style="color:#ff6600">BLOG DE NOTAS</a></span>
                            <a id="fb-icon" href="https://www.facebook.com/rasayana.ayurveda.wellness" target="_blank" style="float:right; margin-top:-2px; width:25px; height:25px;"></a>
                     
                        <!-- SPACE -->
                    </div>
                </div>
            </div><!-- hd -->

            <div id="main">
