<?php

    /** config.init.php
    * @author pierre.romera@gmail.com
    * @version 1.0
    */
    
    // le dossier à la racine du site    
    define("BASE_DIR",   preg_replace("#/pirhoo-config$#i", "", dirname(__FILE__)));
    define("CONFIG_DIR", BASE_DIR."/pirhoo-config");
    define("CORE_DIR",   BASE_DIR."/pirhoo-core");
    
    define("SMARTY_TEMPLATE_DIR", CORE_DIR."/template");
    define("SMARTY_COMPILED_DIR", CONFIG_DIR."/smarty/_compiled");
    define("SMARTY_CACHE_DIR",    CONFIG_DIR."/smarty/_cache");
    define("SMARTY_CONFIG_DIR",   CONFIG_DIR."/smarty/");
    
    define("SITE_URL",   "http://".$_SERVER["SERVER_NAME"].str_replace("index.php", "", $_SERVER["SCRIPT_NAME"]) );
    define("SHARE_URL",  "http://pirhoo.com");
    define("GA_PROFILE", "UA-");    

    // list of every screen
    $arrScreen = Array(
        "404" => CORE_DIR."/screen/inc.homepage.php",
        "homepage" => CORE_DIR."/screen/inc.homepage.php"
    );
    
?>