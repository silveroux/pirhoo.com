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

        // Smooth scrolling for internal links
        $("a[href^='#']").live("click", function(event) {
            event.preventDefault();
            
            var $this = $(this),
                target = this.hash,
                $target = $(target),
                scrollElement = 'html, body';
            
            $(scrollElement).stop().animate({
                'scrollTop': $target.offset().top
            }, 500, 'swing', function() {
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

        $(".filters a").removeClass("selected");
        $(this).addClass("selected");

        var target = $(this).attr("href").replace("#", "");

        // if we wanna show every vignette
        if(target == "all") {
            // show every vignette
            $("#works .vignette").removeClass("hidden");
            // update the layout of every vignette
            $('#works').masonry("reload");
            // stops here
            return;
        }

        // tests every vignette
        $("#works .vignette").each(function(i, vignette) {

            var $vignette = $(vignette);

            if($vignette.data("type") == target) 
                $vignette.removeClass("hidden");
            else
                $vignette.addClass("hidden");

        });

        // update the layout of every vignette
        $('#works').masonry("reload");

    }


    
    /**
     * DOM ready function
     * 
     * @function
     * @public
     */
    $(window).load(site.ready = function() {		

        // changes the min height of a few blocks
        site.resizeBlocks();
        // repeats the height after a window resizing 
        $(window).resize(site.resizeBlocks);

        // initializes masonry to define the layout of each vignette
        $('.cascade').masonry({
            // options
            itemSelector : '.vignette:not(.hidden)',            
            //isFitWidth: true,
            isAnimated: !Modernizr.csstransitions,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        // the user wanna filter the list
        $(".filters li a").click(site.filterList);

        $("menu h2 a").click(function() {            
            $("menu h2 a").removeClass("active").filter(this).addClass("active"); 
        });

        // The same for all waypoints
        $('#content').delegate('.screen', 'waypoint.reached', function(event, direction) {         

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
            $('#content .screen').removeClass("active");
            $this.addClass("active");
            // update the window url
            if(Modernizr.history) window.history.pushState('home', '', "#" + $this.attr("id") );
        });
        
        // Register each screen as a waypoint.
        $('#content .screen').waypoint({ offset: '0%', continuous: false });

    });


    
})(jQuery, window);