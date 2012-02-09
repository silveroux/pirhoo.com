/**
 * Anonymous class to begin the work
 * @class
 * @author Pirhoo <pierre.romera@gmail.com>
 * @version 1.0
 */
;(function($, window, undefined) {   
    
    var site = {};    



    
    /**
     * Bind live events
     * 
     * @function
     * @public
     */
    (site.bindLiveEvent = function() {	

        // open some links in another window/tab
        $("a.open-window").live("click", function(e) {

            if( $(this).attr("href")  != "") {
                // stop basic behavior
                e.preventDefault();
                // open the window
                window.open( $(this).attr("href") );
            }

        });   

        // Smooth scrolling for internal links and only
        $("a[href^='#']").live("click", function(event) {
            event.preventDefault();
            
            var $this = $(this),
                target = this.hash,
                $target = $(target),
                scrollElement = 'html, body';
            
            $(scrollElement).stop().animate({
                'scrollTop': $target.offset().top
            }, 500, 'linear', function() {
                window.location.hash = target;
            });
            
        }); 
        
    })();



    
    
    /**
     * Resizes the block to fit the window
     * 
     * @function
     * @public
     */    
    site.resizeBlocks = function() {

        $("menu,#content").css({
            minHeight: $(window).height() - $("#content").position().top
        })

    };
    
    
    /**
     * Event when we try to filter the list
     * 
     * @function
     * @public
     */    
    site.filterList = function(event) {

        event.preventDefault();

        site.el.$filters.find("a").removeClass("selected");
        $(this).addClass("selected");

        var target = $(this).attr("href").replace("#", "");

        // if we wanna show every vignette
        if(target == "all") {
            // show every vignette
            site.el.$vignette.removeClass("hidden");
            // update the layout of every vignette
            site.el.$works.masonry("reload");
            // stops here
            return;
        }

        // tests every vignette
        site.el.$vignette.each(function(i, vignette) {

            var $vignette = $(vignette);

            if($vignette.data("type") == target) 
                $vignette.removeClass("hidden");
            else
                $vignette.addClass("hidden");

        });

        // update the layout of every vignette
        site.el.$works.masonry("reload");

        //  ajust the scroll     
        $('html, body').scrollTop(site.el.$works.offset().top);


    }


    
    /**
     * DOM ready function
     * 
     * @function
     * @public
     */
    $(window).load(site.ready = function() {	
    
        site.el = {
            $content  : $("#content"),
            $cascade  : $(".cascade"),
            $works    : $("#works"),
            $vignette : $("#works .vignette"),
            $filters  : $(".filters")
        };
        

        // changes the min height of a few blocks
        site.resizeBlocks();
        // repeats the height after a window resizing 
        $(window).resize(site.resizeBlocks);

        // initializes masonry to define the layout of each vignette
        site.el.$cascade.masonry({
            // options
            itemSelector : '.vignette:not(.hidden)',            
             // except with css transition
            isAnimated: false
        });

        // the user wanna filter the list
        site.el.$filters.find("li a").click(site.filterList);

        $("menu h2 a").click(function() {            
            $("menu h2 a").removeClass("active").filter(this).addClass("active"); 
        });

        // The same for all waypoints
        site.el.$content.delegate('.screen', 'waypoint.reached', function(event, direction) {         

            var $this = $(this);
            // if we are going up, selects the previous screen
            if (direction === "up") {
                $this = $this.prev();
                // check if there is a previous element
                if( $this.length == 0 ) $this = $(this);
            }
                              
            // update the menu  
            $("menu h2 a").removeClass("active").filter("[href='#" + $this.attr("id") + "']").addClass("active"); 
            // update the screen
            site.el.$content.find('.screen').removeClass("active");
            $this.addClass("active");
            // update the window url
            if(Modernizr.history) window.history.pushState('home', '', "#" + $this.attr("id") );
        });
        
        // Register each screen as a waypoint.
        site.el.$content.find('.screen').waypoint({ offset: '0%', continuous: false });

        // Scroll to the right element
        if(window.location.hash != "") {       
            $("html,body").scrollTop( $(window.location.hash).offset().top + 1 );
        }
            

    });


    
})(jQuery, window);