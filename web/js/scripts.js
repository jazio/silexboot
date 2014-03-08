jQuery(function($){
    var APP = window.APP || {};
    /**
     * Menu smooth scrolling
     * @return {[type]} [description]
     */
     APP.smoothScroll = function (menu) {
        $(menu).click(function(e) {
            e.preventDefault();
            $('html,body').scrollTo(this.hash, this.hash);
        });

    }
    /**
     * Modalbox for image thumbnails
     * @return {[type]} [description]
     */
     APP.modalBox = function (width, height, speed, theme) {
        $("a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: speed,
            theme: theme,
            slideshow:3000, 
            //autoplay_slideshow: true,
            default_width: width,
            default_height: height,
            keyboard_shortcuts: true, //Set to false if you open forms inside prettyPhoto
            social_tools: '' /* html or false to disable */
        });
    }
    /**
     * Google Maps
     * [googleMapsInitialize description]
     * @return {[type]} [description]
     */
    APP.googleMapsInitialize = function () {
        var map_canvas = document.getElementById('mapCanvas');
        var map_options = {
            center: new google.maps.LatLng(48.66088, -72.43883),
            zoom: 17,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)

        var marker = new google.maps.Marker({    
            position: new google.maps.LatLng(48.66088, -72.43883),  
            map: map
        });
        var infowindow = new google.maps.InfoWindow({
            content:"2013 4 Éléments Studio <br/> 1265 Charlebois G8K 1P3"
        });

        infowindow.open(map,marker);
    }

    //runtime
    APP.smoothScroll(menu = ".nav a");
    APP.modalBox(width = 800, height = 744, speed = 'normal', theme = 'facebook');
    APP.googleMapsInitialize();
    google.maps.event.addDomListener(window, 'load', initialize);

});