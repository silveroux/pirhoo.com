<?php

    /** index.php
    * @author pierre.romera@gmail.com
    * @version 1.0
    */

    header("Content-type: text/html; charset=UTF-8");

    // Load the current configuration 
    // ------------------------------
    require_once('./pirhoo-config/config.global.php');
    
    require_once(CORE_DIR . "/library/pirhoo/functions.php");
    // screen Class to make screens
    require_once(CORE_DIR . "/library/pirhoo/Screen.class.php");
    
    
    // Launch Smarty Libs
    // ------------------        
    require_once(CORE_DIR.'/library/smarty/Smarty.class.php');
    require_once(CORE_DIR.'/library/smarty/marmhut-plugins/function.smarty-gettext.php');
    
    /* @var $s Smarty */
    $s = new Smarty();

    // Smarty settings
    $s->template_dir = SMARTY_TEMPLATE_DIR;
    $s->compile_dir  = SMARTY_COMPILED_DIR;
    $s->cache_dir    = SMARTY_CACHE_DIR;
    if( is_cctrl() ) $s->compile_dir  = $_SERVER["TMPDIR"];
    if( is_cctrl() ) $s->cache_dir    = $_SERVER["TMPDIR"];
    $s->config_dir   = SMARTY_CONFIG_DIR;
    // GetText for smarty
    $s->register_block('t', 'smarty_translate');
    
        
    // Error Array
    /* @TODO: Use an error manager may be more convenient */
    $err = Array();

    
    // Include files
    // see config.global.php for include pages
    // -------------------------------------
    $screen = strip_tags(trim(isset($_GET['screen']) ? $_GET['screen'] : ""));
    if (empty($screen) == FALSE && array_key_exists($screen, $arrScreen)) {
        if (!file_exists($arrScreen[$screen])) {
            $_require = $arrScreen['404'];
            $screen = '404';
        }
        else
            $_require = $arrScreen[$screen];
    }
    else {
        $_require = $arrScreen['homepage'];
        $screen = 'homepage';
    }

    if (file_exists($_require)) require_once( $_require );
    // -------------------------------------

?>