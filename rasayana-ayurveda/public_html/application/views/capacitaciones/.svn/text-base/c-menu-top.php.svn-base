<style type="text/css">
    .c90 {
         margin:0 55px;         
    }
    .orange-list {
        margin-left:1em;
        margin-bottom: 2em;
    }
    .orange-list li {
        font-size:16px;
    }
    h2 {
        margin-bottom:15px;
    }
    .bold li {
        color:#000;
    }
    h3 {
        font-size:15px;
        color:#333;
    }
    p {
        font-size:16px;
    }    
    a.submenu {
        margin-left:0;
        text-align: center;
    }
    .img-style-right {
        margin-bottom: 15px;
        margin-top:0;
    }
    .titulo-maestro {
        color:#ff9900;    
    }
    #menu-btn-mt a.mas-active, a.submenu-active {
        background-position: 1px center !important;
    }
    #menu-btn-mb a.mas-active, a.submenu-active {
        background-position: 1px center !important;
    }
    
</style>
<script type="text/javascript">
    var url = window.location.pathname.toLowerCase();
jQuery(document).ready(function($) {
    
    if (url.indexOf('mt') >= 0) {
        $('#menu-btn-mt a').removeClass('submenu');  
        $('#menu-btn-mt a').addClass('submenu-active'); 
    }
    else if (url.indexOf('mb') >= 0) {
        $('#menu-btn-mb a').removeClass('submenu');  
        $('#menu-btn-mb a').addClass('submenu-active'); 
    }
    else {
        $('#menu-btn-inicio a').removeClass('submenu');  
        $('#menu-btn-inicio a').addClass('submenu-active'); 
    }
    /*
    $('#submenu .submenu').each(function(i, e) {        
        href = $(e).attr('href').toLowerCase();
        if (url.indexOf('mt') >= 0) {           
            $(e).removeClass('submenu');  
            $(e).addClass('submenu-active');   
        }
    });
    */
});
</script>

<div class="yui-gb" id="submenu"> 
    <div id="menu-btn-inicio" class="yui-u first" style="width:29%;"><a class="submenu" style="background-position:83px center" href="<?php echo base_url() ?>capacitaciones">INICIO</a></div>
    <div id="menu-btn-mt" class="yui-u" style="width:34%"><a class="submenu" href="<?php echo base_url() ?>capacitaciones/mt1#submenu" style="background-position: 21px center">PROCEDIMIENTOS AYURVEDICOS</a></div>
    <div id="menu-btn-mb" class="yui-u"><a class="submenu" href="<?php echo base_url() ?>capacitaciones/mb1#submenu" style="background-position: 30px center">MEDITACION BIODINAMICA</a></div>
</div>