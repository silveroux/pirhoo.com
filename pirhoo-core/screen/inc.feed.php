<?php

    /**
     * This include construts posts's feed.
     * 
     * Include must be declared into code-/config/config.init.php
     * in the $arrScreen associative Array.
     * 
     * @author pirhoo <pierre.romera@gmail.com>
     * 
     */     

    $feed = apc_fetch("feed");
    // there is a page in the apc cache
    if( $feed && !$_GET['debug'] == "cache" ) {  
        // display the page from the cache
        $feed->display();          
        // stop the excecution
        exit;        
    }

    $feed = new Screen($s, "atom/feed.tpl");
    // screen title
    $feed->setScreenTitle("Pierre Romera (Pirhoo) : Flux");
    // screen id
    $feed->setScreenId("Feed"); 
        
    // get all post (from the cache or from the servers)
    $posts = get_all_posts();
    
    // we asign it to the template
    $s->assign("posts", array_slice($posts,0,30) );
    
    // display the feed
    $feed->display();
    apc_add("feed", $feed, 60*60*24);
?>
