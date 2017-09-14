<div id="ft">
    <div class="yui-gb"> 
        <div class="yui-u first">
            <a class="icon icon6" href="<?= base_url() ?>ayurveda/consulta">&nbsp;</a>
            <div><a href="<?= base_url() ?>ayurveda/consulta" class="green">CONSULTA AYURVEDA</a></div>
        </div>
        <div class="yui-u">
            <a class="icon icon3" href="<?= base_url() ?>actividades/calendario">&nbsp;</a>
            <div><a href="<?= base_url() ?>actividades/agenda" class="green">AGENDA</a></div>
        </div>
        <div class="yui-u">
            <?php
            /* if (isset($promo)) {
              switch ($promo) {
              case 'numerologia':
              echo '
              <a class="" href="' . base_url() . 'contactenos">
              <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="baner-numerologia" align="middle" height="162" width="250">
              <param name="allowScriptAccess" value="sameDomain">
              <param name="movie" value="' . base_url() . 'design/baner-numerologia.swf">
              <param name="quality" value="high">
              <param name="bgcolor" value="#ffffff">
              <embed src="' . base_url() . 'design/baner-numerologia.swf" quality="high" bgcolor="#ffffff" name="baner-numerologia" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" align="middle" height="162" width="250">
              </object></a>';

              break;
              }
              } else */
            echo '<a class="icon icon7" href="' . base_url() . 'testimonios">&nbsp;</a>
				<div><a href="' . base_url() . 'testimonios" class="green">TESTIMONIOS</a></div>';
            ?>
        </div>
    </div>
    <div style="width: 100%; text-align: left; border-top: 1px solid rgb(170, 170, 170); padding-top: 0.5em; font-size: 12px; margin-top: 3em;">
        <p style="text-align: left; margin: 0pt; width: 43%; float:left">&copy; Copyright 2014 Graciela Schnöller. Todos los derechos reservados.</p>
        <p style="float: right; margin: 0pt; width: 393px;"> Paraguay 3474 PB, Capital Federal, Argentina. Te: (011) -4822-3498</p>
    </div>
</div>
</div>

<script type="text/javascript">

    YAHOO.util.Event.onContentReady("productsandservices", function () {

    var oMenuBar = new YAHOO.widget.MenuBar("productsandservices", {
        autosubmenudisplay: true,
        hidedelay: 750,
        lazyload: true });
        //Define an array of object literals, each containing the data necessary to create a submenu.
        var aSubmenuData = [

        
        {
        id: "ayurveda",
                itemdata: [
                { text: "CONSULTA", url: "<?php echo base_url() ?>ayurveda/consulta_ayurveda" <?= ($this->uri->segment(2) == 'consulta') ? ', classname: "activesub"' : ''; ?> },
                { text: "MASAJE", url: "<?php echo base_url() ?>ayurveda/masaje_ayurvedico" <?= ($this->uri->segment(2) == 'masaje_ayurvedico') ? ', classname: "activesub"' : ''; ?> },
                { text: "MEDITACION", url: "<?php echo base_url() ?>ayurveda/meditacion_biodinamica" <?= ($this->uri->segment(2) == 'tecnicas_de_meditacion') ? ', classname: "activesub"' : ''; ?> },
                ]
        },
        {
        id: "servicios",
                itemdata: [
                { text: "TRATAMIENTOS", url: "<?php echo base_url() ?>rejuvenecimiento/tratamientos" <?= ($this->uri->segment(2) == 'tratamientos') ? ', classname: "activesub"' : ''; ?> },
                { text: "LINEA COSMETICA", url: "<?php echo base_url() ?>rejuvenecimiento/cosmetica_artesanal" <?= ($this->uri->segment(2) == 'cosmetica_ayurvedica') ? ', classname: "activesub"' : ''; ?> },
                { text: "ACEITES NATURALES", url: "<?php echo base_url() ?>rejuvenecimiento/aceites_naturales" <?= ($this->uri->segment(2) == 'cosmetica_ayurvedica') ? ', classname: "activesub"' : ''; ?> },
                ]
        },
        {
        id: "actividades",
                itemdata: [
                { text: "CURSOS BASICOS", url: "<?php echo base_url() ?>formacion/curso_basico" <?= ($this->uri->segment(2) == 'cursos') ? ', classname: "activesub"' : ''; ?>},
                { text: "CURSOS AVANZADOS", url: "<?php echo base_url() ?>capacitaciones" <?= ($this->uri->segment(2) == 'seminarios') ? ', classname: "activesub"' : ''; ?>},
                { text: "INSTRUCTORADOS", url: "<?php echo base_url() ?>formacion/el_camino_del_instructor" <?= ($this->uri->segment(2) == 'el_camino_del_instructor') ? ', classname: "activesub"' : ''; ?> }
                ]
        }
        ];
        var ua = YAHOO.env.ua,
        oAnim; // Animation instance

        function onSubmenuBeforeShow(p_sType, p_sArgs)
        {
        var oBody,
                oElement,
                oShadow,
                oUL;
                if (this.parent)
        {
        oElement = this.element;
                oShadow = oElement.lastChild;
                oShadow.style.height = "0px";
                if (oAnim && oAnim.isAnimated())
        {
        oAnim.stop();
                oAnim = null;
        }

        oBody = this.body;
                //  Check if the menu is a submenu of a submenu.
                if (this.parent && !(this.parent instanceof YAHOO.widget.MenuBarItem))
        {
        if (ua.gecko || ua.opera)
                oBody.style.width = oBody.clientWidth + "px";
                if (ua.ie == 7)
                oElement.style.width = oElement.clientWidth + "px";
        }
        oBody.style.overflow = "hidden";
                oUL = oBody.getElementsByTagName("ul")[0];
                oUL.style.marginTop = ("-" + oUL.offsetHeight + "px");
        }
    }
    /*
     "tween" event handler for the Anim instance, used to 
     syncronize the size and position of the Menu instance's 
     shadow and iframe shim (if it exists) with its 
     changing height.
     */
    function onTween(p_sType, p_aArgs, p_oShadow)
    {
    if (this.cfg.getProperty("iframe"))
            this.syncIframe();
            if (p_oShadow)
            p_oShadow.style.height = this.element.offsetHeight + "px";
    }
    /*
     "complete" event handler for the Anim instance, used to 
     remove style properties that were animated so that the 
     Menu instance can be displayed at its final height.
     */
    function onAnimationComplete(p_sType, p_aArgs, p_oShadow)
    {
    var oBody = this.body,
            oUL = oBody.getElementsByTagName("ul")[0];
            if (p_oShadow)
            p_oShadow.style.height = this.element.offsetHeight + "px";
            oUL.style.marginTop = "";
            oBody.style.overflow = "";
            //  Check if the menu is a submenu of a submenu.
            if (this.parent && !(this.parent instanceof YAHOO.widget.MenuBarItem))
    {
    // Clear widths set by the "beforeshow" event handler
    if (ua.gecko || ua.opera)
            oBody.style.width = "";
            if (ua.ie == 7)
            this.element.style.width = "";
    }
    }
    /*
     "show" event handler for each submenu of the MenuBar 
     instance - used to kick off the animation of the 
     <ul> element.
     */
    function onSubmenuShow(p_sType, p_sArgs)
    {
    var oElement,
            oShadow,
            oUL;
            if (this.parent)
    {
    oElement = this.element;
            oShadow = oElement.lastChild;
            oUL = this.body.getElementsByTagName("ul")[0];
            oAnim = new YAHOO.util.Anim(oUL,
            { marginTop: { to: 0 } },
                    .5, YAHOO.util.Easing.easeOut);
            oAnim.onStart.subscribe(function () {
            oShadow.style.height = "100%";
            });
            oAnim.animate();
            /*
             Subscribe to the Anim instance's "tween" event for 
             IE to syncronize the size and position of a 
             submenu's shadow and iframe shim (if it exists)  
             with its changing height.
             */
            if (YAHOO.env.ua.ie)
    {
    oShadow.style.height = oElement.offsetHeight + "px";
            oAnim.onTween.subscribe(onTween, oShadow, this);
    }
    oAnim.onComplete.subscribe(onAnimationComplete, oShadow, this);
    }
    }

    oMenuBar.subscribe("beforeRender", function () {
    var nSubmenus = aSubmenuData.length, i;
            if (this.getRoot() == this) {

    for (i = 0; i < nSubmenus; i++) {
    this.getItem(i).cfg.setProperty("submenu", aSubmenuData[i]);
    }

    }

    });
            oMenuBar.subscribe("beforeShow", onSubmenuBeforeShow);
            oMenuBar.subscribe("show", onSubmenuShow);
            oMenuBar.render();
    });</script>

<!-- MENU ENDS -->

<!-- GOOGLE ANALYTICS -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-16718674-4', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>