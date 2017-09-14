

<style type="text/css">
    .course-box {
        margin-bottom:3em;
        -moz-box-shadow: 1px 1px 3px #CCCCCC;
        -webkit-box-shadow:1px 1px 3px #ccc;
        box-shadow: 1px 1px 3px #ccc;
        -moz-border-radius:10px;
        -webkit-border-radius:10px;
        border-radius:10px;

        background-color: #EFEFEF;
        border: 1px solid #ccc;
        margin-bottom: 2em;
        padding:1em;
    }
    p {
        margin-bottom:.5em;
    }
    .marzo {
        padding-left:1em;
    }
    .button {
        color:#000!important;
    }

</style>
<div id="bd">
    <div class="c80">
        <div class="yui-g"> 
            <?php
            $left = $list['left'];
            $right = $list['right'];
            ?>
            <div class="yui-u first">
                <?php
                if (is_array($left)) {
                    foreach ($left as $key => $val) {
                        echo '<div class="course-box">
                                <h3 class="marzo orange" id="cal_' . $key . '">' . $val['title'] . '</h3>
                                <h4>' . $val['desci'] . '</h4>
                                <p>' . $val['date_text'] . '</p>
                                <p><a style="cursor:pointer" href="/actividades/getevent/calendar/' . $key . '" rel="facebox"><span class="button">Inscripci&oacute;n online, click aqu&iacute;.</span></a></p></div>
                                ';
                    }
                }
                ?>
                <?php
                if (is_array($right)) {
                    foreach ($right as $rkey => $rval) {
                        echo '<div class="course-box">
                                <h3 class="marzo orange" id="cal_' . $key . '">' . $rval['title'] . '</h3>
                                <h4>' . $rval['desci'] . '</h4>
                                <p>' . $rval['date_text'] . '</p>
                                <p><a style="cursor:pointer" href="/actividades/getevent/calendar/' . $key . '" rel="facebox"><span class="button">Inscripci&oacute;n online, click aqu&iacute;.</span></a></p>
                                </div>';
                    }
                }
                ?>					
            </div>
            <div class="yui-u">
                <div id="calendar">
<?php
$this->load->view('calendar', $cal);
?>
                </div>
                <div style="clear: both;margin-bottom: 20px"></div>

                <div class="msgbox" style="padding-top:.5em;"><a href="<?php echo base_url() ?>contactenos">CONSULTANOS <br /><span class="msgbox-2ndline">click aquí</span></a></div>

                <!-- <h3 class="marzo orange">Curso de Verano</h3>
                                         <h4>Masaje Shantala</h4>
                                         <p>Duración: 1 Jornada<br/>
                                                 <strong>Enero: Sábado de  9.30 a 17 hs.</strong>
                                         </p> -->
                <div class="phone2 redish" style="margin-left:3em; margin-top:3em; margin-bottom:4em;">
                    Para reservar una entrevista o saber más,
                    llámenos al <strong>4822-3498</strong>,
                    de lunes a viernes, de 9 a 18 hs.
                </div>


            </div>
        </div>
    </div>
</div>