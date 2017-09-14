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
    h3 {
        text-transform: none;
        color:#ff9900;
        font-size:20px;
        
    }
    .marzo {
        margin-bottom:6px;
    }
    .comment-content {       
        margin: 25px;
        padding: 19px 20px;
        background-position: 259% bottom;
        margin-left:0;
    }
    .informacion {
         cursor:pointer; display:block; background-color:#6E7433; color:#fff; width:115px; text-align:center; padding:2px 5px; border:2px solid #DEF095; border-radius:10px;
    }
    .informacion:hover {
        background-color:#DEF095;
        color:#6E7433;
        border-color:#6E7433
    }
</style>
<div id="bd">
    <div class="c90">
        <div class="yui-gc"> 
            <?php
            $events = $list['events'];
            $oldEvents = $list['oldEvents'];
            ?>
            <div class="yui-u first">
                <h4 class="titulo-upper" style="font-size:19px;">Proximas Actividades</h4>
                <?php
                if (is_array($events)) {
                    foreach ($events as $key => $val) {
                        $link = '';
                        if($val['link_url'] != '') 
                            $link = '<a href="'.$val['link_url'].'"> ver más...</a>';
                        echo '<div class="comment-content">
                                <div class="post_date">
                                    <span class="day date updated">' . $val['event_day'] . '</span>
                                    <br>
                                    <span class="month">' . $val['event_month'] . '</span>
                                </div>
                                <h3 class="marzo orange" id="cal_' . $key . '" style="color:#010101; font-size:18px">' . $val['title'] . '</h3>
                                <h4 style="font-size:14px;  margin-left:63px">' . $val['desci'] . $link.'</h4>
                                <p style=" margin-left:63px"><strong>¿Cúando?</strong> ' . $val['date_text'] . '</p>
                                    <br />
                                <p style=" margin-left:63px; margin-top:-10px; float:right"><a href="/actividades/getevent/calendar/' . $key . '" rel="facebox" class="informacion">SOLICITAR INFO</a></p></div>
                                ';
                    }
                }
                ?>
                <div class="diff-sml" style="margin:3em 0;">&nbsp;</div>
                <h4 class="titulo-upper" style="font-size:19px; margin-left:25px;">Actividades Finalizadas <?= date("Y"); ?></h4>
                <div style="width:100%; height:300px; overflow-y:scroll; border-top:1px solid #dedede">
                
                <?php
                $oldAct = '';
                if (is_array($oldEvents)) {
                    foreach ($oldEvents as $key => $val) {
                        $link = '';
                        if($val['link_url'] != '') 
                            $link = '<a href="'.$val['link_url'].'"> Leer más...</a>';
                        $oldAct = '<div class="comment-content-old" style="margin:14px 25px; padding:10px">
                                <div class="post_date" style="width:43px; padding:2px 0">
                                    <span class="day date updated" style="font-size:20px; line-height:16px; margin-top:3px">' . $val['event_day'] . '</span>
                                    <br>
                                    <span class="month" style="font-size:14px; line-height:16px">' . $val['event_month'] . '</span>
                                </div>
                                <h3 class="marzo orange" id="cal_' . $key . '" style="color:#333; font-size:16px">' . $val['title'] . '</h3>
                                <p><a style="cursor:pointer" href="/actividades/getevent/calendar/' . $key . '" rel="facebox"><span class="button">Consultas, click aqu&iacute;.</span></a></p></div>
                                '.$oldAct;
                    }
                    echo $oldAct;
                }
                ?>
                </div>
            </div>
            <div class="yui-u">
                <div style='margin-left:10px'>
                    <div class="msgbox-small" style="margin-top:1em; margin-left:-17px">
                        <a href="<?= base_url() ?>contactenos">CONSULTAS<br/><span class="msgbox-2ndline">click aquí</span></a>
                    </div>
                    <div style="clear: both;margin-bottom: 40px"></div>
                    <div id="calendar">
                        <?php
$this->load->view('calendar', $cal);
                        ?>
                    </div>
                    

                    

                    <!-- <h3 class="marzo orange">Curso de Verano</h3>
                                             <h4>Masaje Shantala</h4>
                                             <p>Duración: 1 Jornada<br/>
                                                     <strong>Enero: Sábado de  9.30 a 17 hs.</strong>
                                             </p> -->
                    <div class="phone2 redish" style="margin-left:1em; margin-top:3em; margin-bottom:4em;">
                        Para reservar una entrevista o saber más,
                        llámenos al <strong>4822-3498</strong>,
                        de lunes a viernes, de 9 a 18 hs.
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>