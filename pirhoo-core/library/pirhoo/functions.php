<?php
	
	function is_cctrl() {
		return !strstr($_SERVER['SERVER_NAME'],'pirhoo.dev') && !$_SERVER['SERVER_NAME'] == "127.0.0.1";
	}

	function get_all_posts() {
		
		$postsFile = CORE_DIR."/cache/posts.json";
		if( is_cctrl() ) $postsFile = $_SERVER["TMPDIR"]."/posts.json";
		            
	    // if the file doesn't exist or is too old (7 days)
	    if(!file_exists($postsFile)  ||  time() - filemtime($postsFile) > 60*60*24*7 || $_GET["debug"] == "update") {
	        // get posts        
	        $posts = get_posts("http://oeildupirate.com/pirhoo2", 40);
	        $posts = array_merge( $posts, get_posts("http://oeildupirate.com/author/pirhoo/", 20) );
	        $posts = array_merge( $posts, get_posts("http://branchetonsonotone.com/author/pirhoo/", 20) );

	        // sort posts
	        usort($posts, "posts_cmp");

	        // records post
	        file_put_contents($postsFile, json_encode($posts) );

	    } else {
	        // read the file
	        $posts = json_decode( file_get_contents($postsFile) , true);
	    }

	    return $posts;

	}

	function get_posts($domain, $count = 20) {
			
	    // url where extract post
	    $postsUrl = "{$domain}?json=1&count={$count}&custom_fields=image,Image,url";
	    // encode post's json to array
	    $posts    = json_decode( file_get_contents($postsUrl), true);

	    // if we succeed to load and decode the posts
	    if( $posts["status"] == "ok" ) {
	        // find the type for each post
	        foreach ($posts["posts"] as & $post) {
	            // default type
	            $post["type"] = "article";
	            // for each categorie of the post
	            foreach( $post["categories"] as $cat) {
	                // we read the slug to know the type of the post
	                switch($cat["slug"]) {
	                    
	                    case "speach":
	                        $post["type"] = "speach";
	                        break;

	                    case "site":
	                        $post["type"] = "site";
	                        break;

	                    case "webapp":
	                        $post["type"] = "ddj";
	                        break;
	                }
	            }

	        }	        
	    }	    

	    return $posts["status"] == "ok" ? $posts["posts"] : array();
	}


	function posts_cmp($a, $b) {
        return $a["date"] > $b["date"] ? -1 : 1;
    }

?>
