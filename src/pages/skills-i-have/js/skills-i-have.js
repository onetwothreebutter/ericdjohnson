(function($){

    "use strict";

    var $body = $('body');
    imagesLoaded($body, function() {
        $body.addClass('-water-effect-loaded');
    });

    var $banner = $('.skills-banner');

    var initBannerEffect = new BannerEffect({
        backgroundImage: $('.skills-banner__water-effect-target-image').attr('src'),
        displacementImage: '/src/pages/skills-i-have/images/displacement-maps/2048x2048/clouds.jpg',
        stageWidth: $banner[0].offsetWidth,
        stageHeight: $banner[0].offsetHeight,
        centerSprites: true,
        fullScreen: true,
        autoPlay: true,
        autoPlaySpeed: [4, 3],
        displaceScale: [5000, 10000],
        interactive: true,
        interactionEvent: 'click', // 'click', 'hover', 'both'
        displaceAutoFit: false,
        dispatchPointerOver: true // restarts pointerover event after click
    });
})(jQuery);