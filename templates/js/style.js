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

let scrollToTop =  document.querySelector(".scroll-to-top");

    scrollToTop.addEventListener('click', function()
{
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
})

// window.onload = function()
// {
//     let scrollToTop =  document.querySelector(".scroll-to-top");

//     scrollToTop.addEventListener('click', function()
// {
//     document.body.scrollTop = 0;
//     document.documentElement.scrollTop = 0;
// })
// }

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


//Product Wishlist starts here

window.onload = function()
{

    var wishVar = document.querySelectorAll('.product-add-wishlist')
    wishVar.forEach(function(wishlistIcon)
    {
        var iconn = wishlistIcon.querySelector('.fa-heart');
        var wishlistText = wishlistIcon.querySelector('.wishlist-text');
        wishlistIcon.addEventListener('click', function()
        {
            // iconn.classList.toggle('far');
            // iconn.classList.toggle('fas');
            iconn.classList.remove('far');
            iconn.classList.add('fas');
            iconn.textContent = "Wishlisted";
            
        })
    })

}
//Product Wishlist ends here

// Item Count Incrementor Decrementor starts here 

function incrementItemCount()
{
    let itemCountString = document.querySelector('.current-product-count');
    let itemCount = parseInt(itemCountString.innerText);
    itemCount = itemCount + 1;
    itemCountString.innerText = itemCount.toString();
}

function decrementItemCount()
{
    let itemCountString = document.querySelector('.current-product-count');
    let itemCount = parseInt(itemCountString.innerText);
    if(itemCount === 1)
    {
        itemCount = 1;
    }
    else
    {
        itemCount = itemCount - 1;
    }

    itemCountString.innerText = itemCount.toString();
}

// Item Count Incrementor Decrementor ends here