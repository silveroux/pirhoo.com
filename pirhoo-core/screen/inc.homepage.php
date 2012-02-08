<?php

    /**
     * This include construts the homepage screen.
     * 
     * Include must be declared into code-/config/config.init.php
     * in the $arrScreen associative Array.
     * 
     * @author pirhoo <pierre.romera@gmail.com>
     * 
     */     
    $homepage = new Screen($s, "html/homepage.tpl");
    // screen title
    $homepage->setScreenTitle("Homepage");
    // screen id
    $homepage->setScreenId("Homepage"); 

    // Javscript files :
    $jsFiles = array();
    $jsFiles[] = "/pirhoo-core/javascript/jquery/jquery-last.min.js";    
    $jsFiles[] = "/pirhoo-core/javascript/jquery/jquery.transform-0.9.3.min.js";
    $jsFiles[] = "/pirhoo-core/javascript/jquery/jquery.masonry.min.js";   
    $jsFiles[] = "/pirhoo-core/javascript/jquery/jquery.waypoints.min.js";     
    $jsFiles[] = "/pirhoo-core/javascript/modernizr.custom.js";
    $jsFiles[] = "/pirhoo-core/javascript/global.js";
    // create minify path
    $homepage->setHeaderFile("javascript", "./pirhoo-core/library/minify/?f=".implode(',', $jsFiles) );
    // remote file, for Twitter Button
    $homepage->addHeaderFile("javascript", "//platform.twitter.com/widgets.js");
    // for Facebbok,
    $homepage->addHeaderFile("javascript", "//connect.facebook.net/en_US/all.js#xfbml=1");
    // and for Google+
    $homepage->addHeaderFile("javascript", "//apis.google.com/js/plusone.js");    
    
    
    // Stylesheet files : 
    $cssFiles = array();
    $cssFiles[] = "/pirhoo-core/stylesheet/generic.css";
    $cssFiles[] = "/pirhoo-core/stylesheet/screen.css";
    // create minify path
    $homepage->setHeaderFile("stylesheet", "./pirhoo-core/library/minify/?debug&f=".implode(',', $cssFiles) );
        
    // get all post (from the cache or from the servers)
    $posts = get_all_posts();
    
    // we asign it to the template
    $s->assign("posts", $posts);
    
    // display the homepage
    $homepage->display();
?>
