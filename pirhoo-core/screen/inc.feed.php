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
    $homepage = new Screen($s, "atom/feed.tpl");
    // screen title
    $homepage->setScreenTitle("Pierre Romera (Pirhoo) : Flux");
    // screen id
    $homepage->setScreenId("Feed"); 
        
    // get all post (from the cache or from the servers)
    $posts = get_all_posts();
    
    // we asign it to the template
    $s->assign("posts", array_slice($posts,0,30) );
    
    // display the homepage
    $homepage->display();
?>
