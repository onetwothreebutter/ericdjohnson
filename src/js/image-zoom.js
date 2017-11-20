(function($){

    "use strict";

    var ImageZoom = (function($) {

        var $body;
        var $zoomableImages;

        function init() {
            $body = $('body');
            $zoomableImages = $('img.js-zoomable');

            $zoomableImages.on('click', function(e) {
                e.stopPropagation();
                $(e.currentTarget).toggleClass('-zoomed');
                if($zoomableImages.filter('.-zoomed').length === 0) {
                    $body.removeClass('-zoomed');
                } else {
                    $body.addClass('-zoomed');
                }

            });

            $body.on('click', function(e) {
                $body.removeClass('-zoomed');
                $zoomableImages.removeClass('-zoomed');
            });
        }

        return {
            init: init
        }

    })($);

    ImageZoom.init();

})(jQuery)