<?php

    /** config.init.php
    * @author pierre.romera@gmail.com
    * @version 1.0
    */
    
    // le dossier à la racine du site    
    define("BASE_DIR",   preg_replace("#/pirhoo-config$#i", "", dirname(__FILE__)));
    define("CONFIG_DIR", BASE_DIR."/pirhoo-config");
    define("CORE_DIR",   BASE_DIR."/pirhoo-core");
    define("TMP_DIR", isset($server["TMP_DIR"]) ? $server["TMP_DIR"] : CONFIG_DIR);

    define("SMARTY_TEMPLATE_DIR", CORE_DIR."/template");
    define("SMARTY_COMPILED_DIR", TMP_DIR."/smarty/_compiled");
    define("SMARTY_CACHE_DIR",    TMP_DIR."/smarty/_cache");
    define("SMARTY_CONFIG_DIR",   TMP_DIR."/smarty/");
    
    define("SITE_URL",   "http://".$_SERVER["SERVER_NAME"].str_replace("index.php", "", $_SERVER["SCRIPT_NAME"]) );
    define("SHARE_URL",  "http://www.pirhoo.com");    

    // list of every screen
    $arrScreen = Array(
        "404" => CORE_DIR."/screen/inc.homepage.php",
        "homepage" => CORE_DIR."/screen/inc.homepage.php",
        "feed" => CORE_DIR."/screen/inc.feed.php"
    );

    require_once(CORE_DIR . "/library/pirhoo/functions.language.php");
    initLanguage();
    

?>