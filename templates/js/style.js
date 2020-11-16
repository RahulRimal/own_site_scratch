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

// Scroll to top Starts Here 

window.onload = function()
{
    let scrollToTop =  document.querySelector(".scroll-to-top");

    scrollToTop.addEventListener('click', function()
{
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
})
}

window.onscroll = function(){
    let scrollToTop =  document.querySelector(".scroll-to-top");
    if(document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000)
    {
        scrollToTop.style.display = "block";
    }
    else
    {
        scrollToTop.style.display = "none";
    }
}

// Scroll to top Ends Here 


window.onload = function()
{
    // product description and product review tabs starts here

    let descBtn = document.querySelector(".product-desc-btn");
    let reviewBtn = document.querySelector(".product-review-btn");

    let descBody = document.querySelector(".product-full-description-body");
    let reviewBody = document.querySelector(".product-review-body");

    descBtn.addEventListener('click', function()
    {
        if(descBtn.classList.contains("active-tab"))
        {
            if(reviewBtn.classList.contains("active-tab"))
            {
                reviewBtn.classList.remove("active-tab");
                reviewBody.style.display = "none";
            }
        }
        else
        {
            descBtn.classList.add("active-tab");   
            reviewBtn.classList.remove("active-tab");
            descBody.style.display = "block"
            reviewBody.style.display = "none"
        }
    })

    reviewBtn.addEventListener('click', function()
    {
        if(reviewBtn.classList.contains("active-tab"))
        {
            if(descBtn.classList.contains("active-tab"))
            {
                descBtn.classList.remove("active-tab");
                descBody.style.display = "none"
            }
        }
        else
        {
            reviewBtn.classList.add("active-tab");   
            descBtn.classList.remove("active-tab");
            reviewBody.style.display = "block"
            descBody.style.display = "none"
        }
    })

    // product description and product review tabs ends here

}