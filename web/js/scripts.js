jQuery(function($){
    var APP = window.APP || {};
    /**
     * Menu smooth scrolling
     * @return {[type]} [description]
     */
    APP.smoothScroll = function () {
        $(".nav a").click(function(e) {
            e.preventDefault();
            $('html,body').scrollTo(this.hash, this.hash);
        });

    }
    /**
     * Modalbox for image thumbnails
     * @return {[type]} [description]
     */
    APP.modalBox = function () {
            $("a[rel^='prettyPhoto']").prettyPhoto({
                animation_speed:'normal',
                theme:'default',
                slideshow:3000, 
                autoplay_slideshow: true
            });

    }

    //runtime
    APP.smoothScroll();
    APP.modalBox();

});