<style type="text/css">
    a.button-box {
        margin-bottom: 0;
    }
</style>
<div id="bd">
    <div style="padding:20px 0; margin:0 109px">
        <div class="yui-g"> 
            <div class="yui-u first borderright">
                <a href="<?= base_url() ?>capacitaciones/modulosmt" class="button-box" rel="facebox">
                    <h3 class="orange" style="margin-bottom: 5px">PROCEDIMIENTOS AYURVEDICOS</h3>
                    <h4>Técnicas de Masaje</h4>
                    <img alt="" src="<?php echo base_url() ?>design/cursosimg2.png" class="img-style-preview" width="260" height="" />
                    <p class="desci">Está recomendado para aprender más de la filosofía ayurveda, tanto para su aplicación en uno mismo y la familia, como para profesionales y futuros instructores.</p>
                    <p><span class="mas orange fr">ver más</span></p>
                </a>
            </div>
            
            <div class="yui-u">
                <a href="<?= base_url() ?>capacitaciones/modulosmb" class="button-box" rel="facebox">                    
                    
                    <h3 class="orange" style="margin-bottom: 5px">MEDITACION BIODINAMICA</h3>
                    <h4>Evolucionar en el Autoconocimiento</h4>
                    <img src="<?php echo base_url() ?>design/cursosimg1.png" class="img-style-preview" width="260" height="" />
                    <p class="desci">Está recomendado para aprender a aplicar la meditación en todas las circunstancias de la vida y disfrutar de un crecimiento espiritual sostenido.</p>
                    <p class="ar"><span class="mas orange fr">ver más</span></p>
                </a>
                
            </div>

        </div> 
        
        <div style="margin:2em 50px 0">
            <p class="intro-text-soft">Nuestras <strong>capacitaciones</strong> consisten en Módulos de Profundización, independientes e interrelacionados, en los que se establecen los principios y fundamentos  del Masaje Ayurvédico y de la Meditación Biodinámica.</p>
            <p>Los programas de capacitaciones se recomiendan para ahondar en las técnicas aprendidas en los <span style="color:#000; text-decoration: underline">Cursos Introductorios</span> y para ayudar a mejorar la salud y resolver conflictos internos. También, constituyen una excelente salida laboral y una oportunidad para todo terapeuta profesional de enriquecer su conocimiento.</p>
        </div>        
    </div>
    
    <div class="c90">
    <div class="diff" style="margin-bottom:4em;"></div>
        
        <div class="yui-gc"> 
            <div class="yui-u first">
                
                
                
                <div>
                    <h4 class="titulo-upper">Próximas Capacitaciones</h4>

                    <?php
                    $events = $list['events'];
                    $i = 0;
                    if (is_array($events)) {
                        echo '<table style="width:100%;">';
                        foreach ($events as $key => $val) {
                            $event = '<div class="course-box tt-recent-posts"> 
                                        <h4>
                                        <div class="post_date">
                                            <span class="day date updated">' . $val['event_day'] . '</span>
                                            <br>
                                            <span class="month">' . $val['event_month'] . '</span>
                                        </div>
                                        ' . $val['title'] . '<div style="clear:both">&nbsp;</div></h4>
                                        <p>' . $val['desci'] . ' <a href="" class="text-orange">ver mas...</a></p>
                                        <p><strong>¿Cúando?</strong> ' . $val['date_text'] . '</p>
                                        <p><a style="cursor:pointer" href="/actividades/getevent/calendar/' . $key . '" rel="facebox"><span class="button" style="color:#ff9900"><u>Solicita más información aquí.</u></span></a></p>
                                    </div>';
                            if ($i % 2 == 0)
                                echo '<tr><td style="vertical-align:top; width:50%; border-right:1px solid #454545">' . $event . '</td>';
                            else
                                echo '<td style="vertical-align:top; width:50%; padding-left:20px">' . $event . '</td></tr>';
                            $i++;
                        }
                        if ($i % 2 != 0) //if only one 
                            echo '</tr>';
                        echo '</table>';
                    }
                    ?>	
                </div>
                
                
                <!--
                <div style="padding-right:1em;">
                    <p class="intro-text-green">Los objetivos principales son desarrollar la sensibilidad, optimizar la comunicación con uno mismo para la prevención de enfermedades y promoción de un estado de salud integral.</p>
                    <div style="padding-left:2em;">
                        <h3>Ejes Tem&aacute;ticos:</h3>
                        <p class="marzo">Reducción y manejo del estrés.</p>
                        <p class="marzo">Desintoxicación, purificación y rejuvenecimiento.</p>
                        <p class="marzo">Nutrición equilibrada y cuidados para mantener la salud.</p>
                        <p class="marzo">Trabajo de la confianza en uno mismo.</p>
                        <p class="marzo">Desarrollo emocional y transformación interior.</p>
                        <p class="marzo">Encuentro y desarrollo espiritual.</p>
                        <p>&nbsp;</p>
                    </div>
                </div>



                <?php
                if (is_array($list)) {
                    foreach ($list as $key => $val) {
                        echo '<div style="clear:right; margin-bottom:1em"><h3 class="orange" id="c_' . $key . '">' . $val['title'] . '</h3>';
                        echo '<h4>' . $val['subtitle'] . '</h4>';
                        echo '<p>' . $val['desci'] . '</p>';
                        echo '<p>' . $val['date_text'] . '</p></div>';
                        //echo '<a style="float:right; margin-bottom:1em; margin-top:-.5em" class="mas" href="#submenu">Volver Arriba</a></div>';
                    }
                }
                ?>
-->
            </div>
            <div class="yui-u">

                <div class="highlights-box" id="highlights-box-noscroll" style="background-color:#fff; border:none; box-shadow: none;">
                    <div class="msgbox-red-small" style=""><a href="<?= base_url() ?>contactenos">CONSULTAS<br/><span class="msgbox-2ndline">click aquí</span></a></div>
                    
                    <div class="phone2 redish" style="margin:20px 0 0 20px">
                    Para inscripciones o saber más,
                    llámanos al <strong>4822-3498</strong>,
                    de lunes a viernes, de 9 a 18 hs.
                </div>
                    
                </div>


            </div>



        </div>
    
</div>
</div>

