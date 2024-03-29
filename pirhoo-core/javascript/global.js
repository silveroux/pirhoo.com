/**
 * Anonymous class to begin the work
 * @class
 * @author Pirhoo <pierre.romera@gmail.com>
 * @version 1.0
 */
;(function($, window, undefined) {   
    
    var site = {}, scrollDuration = 0, scrollOptions = { offset: 38};    

    
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
        
    })();


    
    /**
     * Event when we try to filter the list
     * 
     * @function
     * @public
     */    
    site.filterList = function(event) {

        event.preventDefault();

        var target = $(this).attr("href").replace("#", "");

        site.el.$filters.find("a").removeClass("selected");
        $(this).addClass("selected");

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
        site.el.$menu.find("a[href='#works']").trigger("click");
    };


    
    /**
     * DOM ready function
     * 
     * @function
     * @public
     */
    $(window).load(site.ready = function() {	
    
        site.el = {
            $content  : $("#content"),
            $overflow : $("#content > .overflow"),
            $cascade  : $(".cascade"),
            $works    : $("#works"),
            $vignette : $("#works .vignette"),
            $filters  : $(".filters"),
            $menu     : $("menu:first"),
            $subMenu  : $("#sub-menu"),
            $tracker  : $("#tracker")
        };
        
        // initializes masonry to define the layout of each vignette
        site.el.$cascade.masonry({
            // options
            itemSelector : '.vignette:not(.hidden)',            
             // except with css transition
            isAnimated: false
        });

        // initializes the Meny menu
        var meny = Meny.create({
            menuElement: site.el.$menu[0],
            contentsElement: site.el.$content[0],
            position: 'left',
            width: 211
        });/**/

        // the user wanna filter the list
        site.el.$filters.find("li a").bind("click touchend", function(e) { site.filterList.call(this, e); });

        $("menu h2 a").bind("click touchend", function(event) {   

            event.preventDefault();            
            $("menu h2 a").removeClass("active").filter(this).addClass("active"); 

            var target = $(this).attr("href");
            // Prevent scroll queing
            jQuery.scrollTo.window().queue([]).stop();
            site.el.$overflow._scrollable().stop(true);
            // Avoid a scroll delay when we scroll to the bottom 
            site.el.$overflow.scrollTo("100%");
            //  ajust the scroll                 
            site.el.$overflow.scrollTo( target, scrollDuration, scrollOptions);

        });

        $("#sub-menu li").bind("click touchend", function() {      
            var target = "#" + $(this).data("target");                  
            site.el.$menu.find("h2 a[href='" +target+ "']").trigger("click");
        });

        // The same for all waypoints
        site.el.$overflow.delegate('.screen', 'waypoint.reached', function(event, direction) {         
            
            var $this = $(this);
            // if we are going up, selects the previous screen
            if (direction === "up") {
                $this = $this.prev();
                // check if there is a previous element
                if( $this.length == 0 ) $this = $(this);
            }
            var id = $this.attr("id");
                              
            // update the menu  
            site.el.$menu.find("h2 a").removeClass("active").filter("[href='#" + id + "']").addClass("active"); 
            site.el.$subMenu.find("li").removeClass("active").filter("[data-target='" + id +"']").addClass("active"); 

            // update the tracker
            site.el.$tracker.empty().html( $this.find("h1").html() );
            // update the window url
            if(Modernizr.history) window.history.pushState('home', '', "#" + $this.attr("id") );
        });

        // Register each screen as a waypoint.
        site.el.$overflow.find('.screen').waypoint({ 
            context: site.el.$overflow, 
            offset: "50%", 
            continuous: false 
        }); /**/

        // Scroll to the right element
        if(window.location.hash != "") {                   
            // Prevent scroll queing
            jQuery.scrollTo.window().queue([]).stop();
            site.el.$overflow._scrollable().stop(true);
            // Avoid a scroll delay when we scroll to the bottom 
            site.el.$overflow.scrollTo("100%");

            site.el.$overflow.scrollTo( window.location.hash, 0, scrollOptions);
        }
            

        site.el.$content.delegate(".preview", "mouseenter", function(event) {
            
            var $this = $(this);
            // No canvas in the preview yet and webgl support
            if( Modernizr.webgl && $this.find("canvas").length == 0) {

                // creates a Canvas with the size of the preview
                try {
                    var canvas = fx.canvas();
                } catch(e) {
                    // Just stops if it failled
                    return;
                }

                canvas.width = $this.width();
                canvas.height = $this.height();


                var img     = $this.find("img")[0],
                    texture = canvas.texture(img);            

                // append the canvas to the current preview
                $this.append(canvas);
            }

            // Launch the animation only if the browser has WebGl support
            if(Modernizr.webgl) {
                
                // direction of the animation
                var canvas  = $this.find("canvas")[0],
                    img     = $this.find("img")[0],
                    texture = canvas.texture(img); 

                canvas.state = "in";

                // launch animation                    
                (canvas.animation = function () {
                    if( canvas.size == undefined ) canvas.size = 1;
                    window.requestAnimFrame(function() {
                        canvas.draw(texture).hexagonalPixelate(0, 0, canvas.size/10).update();
                        //canvas.draw(texture).zoomBlur(canvas.width/2, canvas.height/2, canvas.size/100).update();
                        if(++canvas.size < 100 && canvas.state == "in") canvas.animation();                         
                    });
                })();
            }


        });


        site.el.$content.delegate(".preview", "mouseleave", function(event) {
            var $this = $(this);
            // Webgl support and canvas in the view
            if( Modernizr.webgl  && $this.find("canvas").length == 1 ) {
                
                var canvas  = $this.find("canvas")[0],
                    img     = $this.find("img")[0],
                    texture = canvas.texture(img); 

                // direction of the animation
                canvas.state = "out";

                // launch animation                    
                (canvas.animation = function () {
                    
                    if( canvas.size == undefined ) canvas.size = 1;

                    window.requestAnimFrame(function() {
                        canvas.draw(texture).hexagonalPixelate(0, 0, canvas.size/10).update();
                        //canvas.draw(texture).zoomBlur(canvas.width/2, canvas.height/2, canvas.size/100).update();
                        if(--canvas.size > 0 && canvas.state == "out") canvas.animation();
                    });

                })();
            }
        });
    });

    
})(jQuery, window);

// shim layer with setTimeout fallback
// (Paul Irish method http://paulirish.com/2011/requestanimationframe-for-smart-animating/)
window.requestAnimFrame = (function(){
  return  window.requestAnimationFrame       || 
          window.webkitRequestAnimationFrame || 
          window.mozRequestAnimationFrame    || 
          window.oRequestAnimationFrame      || 
          window.msRequestAnimationFrame     || 
          function(/* function */ callback, /* DOMElement */ element){
            window.setTimeout(callback, 1000 / 60);
          };
})();