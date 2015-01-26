<?php
header("Content-type: text/css; charset: UTF-8");

do_action('boldway_dynamic_css_pre');
?>
/*==================================================================================
	Layouts
==================================================================================*/

/* Topbar
-------------------------------------------------*/
    #topbar {
        background-color:<?php echo boldway_config('header', 'topbar_bg_color'); ?>;
        background-size: <?php echo boldway_config('header', 'topbar_bg_size'); ?>;
        background-attachment: <?php echo boldway_config('header', 'topbar_bg_attachment'); ?>;
        background-image: url(<?php echo boldway_config('header', 'topbar_bg_image'); ?>);
        background-position: <?php echo boldway_config('header', 'topbar_bg_position'); ?>;
        background-repeat: <?php echo boldway_config('header', 'topbar_bg_repeat'); ?>;
    }


/* branding
-------------------------------------------------*/


/* Sub-Header
-------------------------------------------------*/


/* Main
-------------------------------------------------*/


/* Sidebar
-------------------------------------------------*/


/* Upper footer
-------------------------------------------------*/


/* Footer widgets
-------------------------------------------------*/


/* Footer Copyright
-------------------------------------------------*/


/* Top Panel
-------------------------------------------------*/


/* Bottom Panel
-------------------------------------------------*/


/* Left Panel
-------------------------------------------------*/


/* Right Panel
-------------------------------------------------*/


/*===========================================================================================================
	Secondary Menu
============================================================================================================*/
	
/* Skin 1
---------------------------------------------------------------------*/
	
    /* Light
    +++++++++++++++++++++++++++*/
    .cm-light #secondary_nav.sk-1 ul li a{ background:<?php echo boldway_css_color('inner_bg_l'); ?>; color:inherit; }
    
    /* Dark
    +++++++++++++++++++++++++++*/
    .cm-dark #secondary_nav.sk-1 ul li a{ background:<?php echo boldway_css_color('inner_bg_d'); ?>; color:inherit; }

<?php
do_action('boldway_dynamic_css_after');