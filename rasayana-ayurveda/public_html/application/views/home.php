<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title><?php echo $title ?></title>
        <meta name="keywords" content="<?php echo $keywords; ?>" />
        <meta name="description" content="<?php echo $description; ?>" />

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/reset-fonts-grids.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" />        
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/calendar.css" type="text/css" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css' />
        <style type="text/css">
            #mba-logo{
                background-image:url("../design/logo-rasayana-naranja-big.png");
                /*background-repeat:no-repeat;
                display:block;
                position: absolute; 
                top: .3em; 
                right: -15px;
                font-size:14px;
                height:74px;
                padding-top:4.5em;
                width:274px;
                text-shadow:1px 1px 3px #aaa;
                */

                background-repeat: no-repeat;
                display: block;
                font-size: 12px;
                height: 87px;
                padding-left: 54px;
                padding-top: 0;
                position: absolute;
                right: -69px;
                text-shadow: 1px 1px 3px #AAAAAA;
                top: 13px;
                width: 274px;
                letter-spacing: 5px;
            }
            a#mba-logo:hover{color:#999999;}
            a#mba-logo:selected{color:#999999;}
            h2 {
                font-size:28px;
            }
            .secondaryMenu a {
                text-shadow: none;
            }


            .post_date {
                background-color: #fff;
                background-image: -moz-linear-gradient(center top , #fff, #efefef);//-moz-linear-gradient(center top , #3d401d, #505427);
                box-shadow: 0 0 0 1px #aaa, 0 0 0 2px #333;//0 0 0 1px #51596c, 0 0 0 2px #000;
                /*height: 64px;
                top: 2px;
                position: absolute;
                right: 12px;*/
                width: 43px;
                height:37px;
                border-radius: 2px;
                padding:6px 0 3px;
                float:left;
                margin-right: 10px;
                margin-bottom:10px;
                text-shadow:none;            
            }

            .post_date .day {
                font-size: 21px;
                font-weight: normal;
                font-family: Arial, Helvetica, sans-serif;
                color: #000;//#fff;
                display: block;
                font-weight: 700;
                text-align: center;    
                margin:0;
                padding:0;
            }
            .post_date .month {
                font-size: 12px;
                color: #555;//#a2a3a4;
                display: block;
                text-align: center;
                text-transform: uppercase;
                margin:0;
                padding:0;
            }
            .post_date .month, .post_date .day {
                vertical-align: baseline;
                line-height: 19px;
            }

            .tt-recent-posts h4 {
                font-size: 13px !important;
                margin-bottom: 0px !important;
                font-family: "Century Gothic", Arial, Helvetica, sans-serif;
                line-height: 14px;
                text-shadow: 1px 1px 1px #fff;
                color: #666600;
                background-color: #fff;
                padding:0;
            }
            .tt-recent-posts p {
                font-size: 12px;
                margin: 0 !important;
                padding: 0 !important;
                color: #444;
                line-height: 2;
                margin-bottom: 20px;
            }
            .comment-gravatar {
                height:122px;
                margin-right: 25px;
                width:149px;
            }

        </style>

        <script type="text/javascript" src="<?= base_url(); ?>js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/jquery-1.3.2.min.js"></script>	
        <script type="text/javascript" src="<?= base_url(); ?>js/facebox.js"></script>
        <link rel="stylesheet" href="<?= base_url(); ?>css/facebox.css" type="text/css" media="screen" />
        <script type="text/javascript">
            var intervalIndex = 0;
            var quotes = <?=$quotes?>;
            quotes = quotes.quotes;
            jQuery(document).ready(function ($) {
                $('a[rel*=facebox]').facebox();                
                $("#quote-text").html(quotes[intervalIndex].text);
                $("#quote-author").html(quotes[intervalIndex].author);
                $("#quote-profession").html(quotes[intervalIndex].profession);
                intervalIndex++;
            });
            
            //alert(quotes);
            /*var tips = []
                "Tip 02",
                "Tip 03",
                "Tip 04",
                "Tip 05",
                "Tip 06",
                "Tip 07",
                "Tip 08",
                "Tip 09"
            ];*/

            
            // get a random index, get the value from array and
            // change the div content
            setInterval(function () {
                //var intervalIndex = Math.round((Math.random()) * quotes.length);
                if (intervalIndex == quotes.length)
                    intervalIndex = 0;
                $("#quote-box").fadeOut('slow', function() {
                    $("#quote-text").html(quotes[intervalIndex].text);
                    $("#quote-author").html(quotes[intervalIndex].author);
                    $("#quote-profession").html(quotes[intervalIndex].profession);
                    $("#quote-box").fadeIn();
                    intervalIndex++;
                });
/*
                $("#quote-text").html(quotes[i].text);
                $("#quote-author").html(quotes[i].author);
                $("#quote-profession").html(quotes[i].profession);
                $("#quote-box").fadeIn();*/ 
            }, 5 * 1000);
        </script>

    </head>

    <body>
        <div id="doc2">					
            <div id="hd">
                <div style="height:132px; width:100%; margin-top:1em; text-align:center">
                    <a href="<?= base_url() ?>" id="gs-logo">
                        <img src="<?= base_url() ?>design/logo-rasayana-sq.jpg" title="Centro Rasayana by Graciela Schnoller" alt="Centro Graciela Schnoller" width="280" height="" />
                    </a>

<!--<div style="position:relative"><!--<img src="/design/logo-big.png" />
<a href="<?= base_url() ?>mba" id="mba-logo" style="margin-top: 1em;">AYURVEDA WELLNESS</a>
</div>-->
<!--<a href="<?php base_url() ?>mba" id="mba-logo" style="margin-top:2em;">&nbsp;</a>-->

                </div>
                <?php
                $number = date('s') % 3 + 1;
                ?>
                <div id="home-image" style="background-image: url('<?php echo base_url() ?>design/home<?= $number ?>.jpg')">
                    <div class="c90" style="height: 24px; margin-left: 0; margin-right: 0">
                        <div class="yui-g"> 
                            <div class="yui-u first">
                                <table>
                                    <tr>
                                        <td class="borderright secondaryMenu" style="padding-left: 2px"><a href="<?php echo base_url() ?>">INICIO</a></td>
                                        <td class="borderright secondaryMenu"><a href="<?php echo base_url() ?>centro_gs">NUESTRO CENTRO</a></td>
                                        <td class="borderright secondaryMenu"><a href="<?php echo base_url() ?>metodo_rasayana_ayurveda_wellness">METODO RASAYANA</a></td>

                                        <td class="borderright secondaryMenu"><a href="<?php echo base_url() ?>equipo">EQUIPO</a></td>
                                        <td class="borderright secondaryMenu"><a href="<?php echo base_url() ?>actividades/agenda">AGENDA</a></td>
                                        <!--<td class="borderright secondaryMenu"><a href="http://blog.rasayana-ayurveda.com/">NOTAS</a></td>-->
                                        <td class="secondaryMenu"><a href="<?php echo base_url() ?>contactenos">CONTACTENOS</a></td>
                                        <!--<td class="secondaryMenu"><a href="http://blog.rasayana-ayurveda.com/">TESTIMONIOS</a></td>
                                        <td class="secondaryMenu"><a href="http://blog.rasayana-ayurveda.com/">CALENDARIO</a></td>-->
                                    </tr>
                                </table>
                            </div>
                            <div class="yui-u">                                
                                <span style="float:right; margin:-7px 7px 0 7px; color:#aaa; font:16px 'century gothic', arial, sans-serif">| <a href="http://blog.rasayana-ayurveda.com">BLOG DE NOTAS</a></span>
<a id="fb-icon" href="https://www.facebook.com/rasayana.ayurveda.wellness" target="_blank" style="float:right; margin-top:-9px; width:25px; height:25px;"><!--<img src="<?php echo base_url() ?>" style="float:right; margin-top:-2px" height="20" />--></a>
                                <!-- SPACE -->
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="hometabscont">
                    <div class="yui-gb">                        
                        <div class="yui-u first">
                            <div class="hometab hometab1">
                                <div class="hometab-header">AYURVEDA</div>
                                <div><a href="<?php echo base_url() ?>ayurveda/consulta_ayurveda" class="green">CONSULTA</a></div>
                                <div><a href="<?php echo base_url() ?>ayurveda/masaje_ayurvedico" class="green">MASAJE</a></div>  
                                <div><a href="<?php echo base_url() ?>ayurveda/meditacion_biodinamica" class="green">MEDITACION</a></div>
                                <!--<div><a href="<?php echo base_url() ?>servicios/cosmetica_y_tratamientos" class="green">TRATAMIENTOS Y COSMÉTICA</a></div>-->
                            </div>
                        </div>
                        <div class="yui-u">
                            <div class="hometab hometab2">
                                <div class="hometab-header">REJUVENECIMIENTO</div>                                
                                <div><a href="<?php echo base_url() ?>rejuvenecimiento/tratamientos" class="green">TRATAMIENTOS</a></div>
                                <div><a href="<?php echo base_url() ?>rejuvenecimiento/cosmetica_artesanal" class="green">COSMETICA</a></div>
                                <div><a href="<?php echo base_url() ?>rejuvenecimiento/aceites_naturales" class="green">ACEITES NATURALES</a></div>
                                <!--<div class="hometab-header">INSTITUCIONAL</div>                                
                                <div><a href="<?php echo base_url() ?>actividades/calendario" class="green">CALENDARIO</a></div>
                                <div><a href="<?php echo base_url() ?>testimonios" class="green">TESTIMONIOS</a></div>
                                <div><a href="http://blog.rasayana-ayurveda.com" class="green">NOTAS</a></div>
                                <!--<div><a href="<?php echo base_url() ?>actividades/formacion_a_distancia" class="green">FORMACIÓN A DISTANCIA</a></div>-->                            
                            </div>
                        </div>
                        <div class="yui-u">
                            <div class="hometab hometab3">
                                <div class="hometab-header" style="font-size:16px">FORMACION</div><!--<div class="hometab-header" style="font-size:10px"><span style="font-size:16px; color:#fff">M</span>ETODO <span style="font-size:16px; color:#fff">R</span>ASAYANA <span style="font-size:16px; color:#fff">A</span>YURVEDA</div>-->
                                <!--<div><a href="<?php echo base_url() ?>servicios/counseling" class="green">COUNSELING</a></div>-->
                                <div><a href="<?php echo base_url() ?>formacion/curso_basico" class="green">CURSOS BASICOS</a></div>
                                <div><a href="<?php echo base_url() ?>capacitaciones" class="green">CURSOS AVANZADOS</a></div>
                                <div><a href="<?php echo base_url() ?>formacion/el_camino_del_instructor" class="green">INSTRUCTORADOS</a></div>
                                <!---->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="bd">
                <div class="hometabscont" style="margin-top: 20px">	
                    <div class="social-sharing-active" id="about-author-wrap">
                        <p class="intro-text" style="margin-left: 0; padding-right:.8em; font-size: 14px; text-align: justify">El Ayurveda es un sistema de vida que se practica en la India desde la antigüedad. Su principal propósito es proporcionar herramientas para mantenerse saludable. Rasayana es la rama que se ocupa del rejuvenecimiento.
                        </p>
                        <p class="intro-text" style="margin-left: 0; padding-right:.8em; font-size: 14px; text-align: justify">Mis maestros me enseñaron que una presencia amorosa es por lejos el factor más importante para ayudar en el camino hacia el rejuvenecimiento, tanto para el cuerpo, como para la mente y el espíritu. Así nació <span class="intro-text-orange">Rasayana Ayurveda Wellness<span class="registrado"> ® </span></span>: una propuesta, un estilo, basado en el amor y el respeto hacia todos los seres... </p>
                        <p class="intro-text" style="margin-left: 0; padding-right:.8em; font-size: 14px; text-align: right; font-style: italic">Graciela Schnöller</p>

        <!--<p>Rasayana<span class="registrado">®</span> Ayurveda Wellness</span> nos apoyamos en el Ayurveda, un sistema de salud que se practica en la India desde el antigüedad, para brindar un camino hacia el rejuvenecimiento integral, tanto para el cuerpo como para la mente y el espíritu. <br /><br />Conocé más acerca del Método <a href="<?= base_URL() ?>metodo_rasayana_ayurveda_wellness" class="intro-text-orange" style="font-size:inherit; text-decoration: underline">Rasayana<span class="registrado">®</span> Ayurveda Wellness</a>.</p>-->

                        <div class="diff-sml" style="margin:3em 0;">&nbsp;</div>

                    </div>
                    <div style="margin:0 85px;">
                    <div class="yui-g"> 
                        <div class="yui-u first">
                                <div class="msgbig">
                                    <div id="quote-box">
                                        <p class="msg-quote"><span style='font-size:36px'>"</span><span id="quote-text"></span><span style='font-size:36px'>"</span></p>
                                        <div class="msg-ballon">&nbsp;</div>

                                        <p class="msg-sign" id="quote-author"></p>
                                        <p class="msg-sign" style="font-family: century gothic; font-size: 14px;" id="quote-profession"></p>
                                    </div>
                                </div>
                                

                        </div>
                        <div class="yui-u">

                            <div id="calendar">
                                <?php
                                //$this->load->view('calendar', $cal);
                                ?>
                            </div>


                            <div style="margin-bottom:1em; padding-left: 23px; margin-left: 20px; border-left: 1px solid #ccc; padding-top:10px;   ">
                                <h4 class="titulo-upper">Proximas Actividades</h4>

                                <?php
                                $events = $list['events'];
                                $i = 0;
                                if (is_array($events)) {
                                    echo '<table style="width:100%;">';
                                    foreach ($events as $key => $val) {
                                        $event = '<div class="course-box tt-recent-posts"> 
                                                        <div>
                                                        <div class="post_date">
                                                            <span class="day date updated">' . $val['event_day'] . '</span>
                                                            <span class="month">' . $val['event_month'] . '</span>
                                                        </div>
                                                        <h4>' . $val['title'] . '</h4><p><a style="cursor:pointer" href="/actividades/getevent/calendar/' . $key . '" rel="facebox"><span class="button" style="color:#ff9900"><u>Solicita más información aquí.</u></span></a></p></div>
                                                        <!--<p>' . $val['desci'] . ' <a href="" class="text-orange">ver mas...</a></p>-->
                                                        <!--<p><strong>¿Cúando?</strong> ' . $val['date_text'] . '</p>-->
                                                        
                                                    </div>';
                                        //if ($i % 2 == 0)
                                        //    echo '<tr><td style="vertical-align:top; width:50%; border-right:1px solid #bbb">' . $event . '</td>';
                                        //else
                                        echo '<td style="vertical-align:top; width:50%; ">' . $event . '</td></tr>';
                                        $i++;
                                    }
                                    if ($i % 2 != 0) //if only one 
                                        echo '</tr>';
                                    echo '</table>';
                                }
                                ?>	
                            </div>

                            <!--
                            <div class="phone2 redish" style="margin-left:1em; margin-top:4em; margin-bottom:4em;">
                                Para reservar una entrevista o saber más,
                                llámenos al <strong>4822-3498</strong>,
                                de lunes a viernes, de 9 a 18 hs.
                            </div>-->
                        </div>


                    </div>
                </div>
                </div>
                
                <div class="hometabscont" style="margin-top: 50px; margin-bottom: 30px">
                    <div style="margin-left:17px;">


                        <div class="social-sharing-active" id="about-author-wrap">
                            <div class="comment-content">
                                <h4 class="comment-author-about">Acerca de Rasayana Ayurveda Wellness<span class="registrado">®</span></h4>
                                <div class="comment-text" style="font-size:15px">
                                    <div class="comment-gravatar"><img width="150" height="70" class="avatar avatar-80 photo" src="/design/logo_raw.jpg" alt="">  	</div><!-- END comment-gravatar -->
                                    <span class="intro-text-orange" style="margin-left:0">
                                        Rasayana Ayurveda Wellness<span class="registrado">&reg;</span></span> comprende diversas actividades para el rejuvenecimiento integral, cuyo eje central es el Método RAW<span class="registrado">&reg;</span>, que incluye la formación profesional y de instructores en este sistema. También, comprende una Línea Cosmética puramente artesanal y Aceites Naturales que se utilizan en los masajes y en los tratamientos. Rasayana<span class="registrado">&reg;</span> es marca registrada desde sus orígenes. <a style="color:inherit" href="<?= base_URL() ?>metodo_rasayana_ayurveda_wellness">Conocé más acerca del <span class="intro-text-orange">METODO RAW<span class="registrado">&reg;</span></span></a> 

                                      

                                </div><!-- END comment-text -->
                                <div style='clear:both'>&nbsp;</div>

                            </div><!-- END comment-content -->
                        </div>






                    </div>
                </div>


            </div>
            <div id="ft">
                <div class="yui-gb"> 
                    <div class="yui-u first" style="padding-top:.5em">
                        <a href="<?= base_url() ?>formacion/curso_masaje_ayurvedico"><img src="<?php echo base_url() ?>design/homeimg2.png"/></a>
                    </div>
                    <div class="yui-u al" style="text-align:left; padding-top:3em">
                        <a href="/formacion/counseling_form" rel="facebox"><img src="<?php echo base_url() ?>design/homeimg1.png"/></a>
                        <!--<div style="margin-left:2em; text-align:left">
                            <h4 style="text-align:left; margin-top:1em">Descubrí tu Dosha!</h4>
                            <p style="text-align:left; width: 99%;margin-left: 0; margin-bottom:.5em">Según el Ayurveda, la base material del universo está compuesta por los cinco elementos: fuego, tierra, agua, aire y eter. Al combinarse dan origen a tres doshas principales que constituyen tu naturaleza psico-fisica: Vata (Éter y Aire), Pitta (Fuego y Agua), Kapha (Agua y Tierra).</p>
                            <a href="<?php echo base_url(); ?>contactenos" class="al" style="text-decoration:underline; color:#333">Solicita tu consulta ayurvedica. <br /> click aquí...</a>
                        </div>-->
                    </div>
                    <div class="yui-u">
                        <a href="<?= base_url() ?>rejuvenecimiento/cosmetica_artesanal"><img src="<?php echo base_url() ?>design/banner-rasayana.png" width="270" height="182" /></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- GOOGLE ANALYTICS -->
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-16718674-1']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>

    </body>
</html>


<!-- p6.ydn.sp1.yahoo.com compressed/chunked Fri Apr 23 06:38:12 PDT 2010 -->
