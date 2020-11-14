// LightSlider Section Starts here
$(document).ready(function() {
    $("#lightSlider").lightSlider({
        item: 1,
        autoWidth: false,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 10,
 
        addClass: '',
        mode: "slide",
        useCSS: true,
        cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: 'linear', //'for jquery animation',////
 
        speed: 900, //ms'
        auto: true,
        loop: true,
        slideEndAnimation: true,
        pause: 4000,
 
        keyPress: false,
        controls: true,
        prevHtml: '',
        nextHtml: '',
 
        rtl:false,
        adaptiveHeight:false,
 
        vertical:false,
        verticalHeight:500,
        vThumbWidth:100,
 
        thumbItem:10,
        pager: true,
        gallery: false,
        galleryMargin: 5,
        thumbMargin: 5,
        currentPagerPosition: 'middle',
 
        enableTouch:true,
        enableDrag:true,
        freeMove:true,
        swipeThreshold: 40,
 
        responsive : [],
 
        onBeforeStart: function (el) {},
        onSliderLoad: function (el) {},
        onBeforeSlide: function (el) {},
        onAfterSlide: function (el) {},
        onBeforeNextSlide: function (el) {},
        onBeforePrevSlide: function (el) {}
    });
});


// LightSlider Section Ends here




// Trending-products LightSlider Section Starts here

$(document).ready(function() {
    $('.productsLightSlider').lightSlider({
        item: 2,
        autoWidth:true,
        loop:true,
        auto: true,
        speed: 200,
        pause: 4000,

        pager: false,
        controls: true,
        pauseOnHover: true,

        prevHtml: '<i class="fas fa-arrow-left"></i>',
        nextHtml: '<i class="fas fa-arrow-right"></i>',

        onBeforeStart: function (el) {},
        onBeforeSlide: function (el) {},
        onAfterSlide: function (el) {},
        onBeforeNextSlide: function (el) {},
        onBeforePrevSlide: function (el) {},
        onSliderLoad: function() {
            $('#productsLightSlider').removeClass('cS-hidden');
        } 
    });  
  });

// Trending-products LightSlider Section Ends here