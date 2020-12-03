// Product image gallery starts here

window.onload = function()
{
    refreshImages();
}

function setActiveImage(thisImage)
{
        let product = document.querySelector('.product-img-gallery');

        let galleryImages = product.querySelectorAll('.gallery-img-div');

        galleryImages.forEach(function(galleryImage)
        {
            let deleteOverlay = galleryImage.classList.remove('active-image');
        })
        let selectedImage = thisImage.parentNode;
        selectedImage.classList.add('active-image');
        let mainImage = document.querySelector('.main-product-image');
        mainImage.src = thisImage.src;
        refreshImages();
}

function refreshImages()
{
        let product = document.querySelector('.product-img-gallery');

        let galleryImages = product.querySelectorAll('.gallery-img-div');

        galleryImages.forEach(function(galleryImage)
        {
            let overlay = galleryImage.querySelector('.gallery-overlay');
            let image = galleryImage.querySelector('.gallery-img');

            if(galleryImage.classList.contains('active-image'))
            {
                overlay.classList.add('gallery-img-overlay');
                overlay.classList.remove('gallery-img-overlay-inactive');   
            }
            else
            {
                overlay.classList.remove('gallery-img-overlay');
                overlay.classList.remove('gallery-img-overlay-inactive');
                overlay.classList.add('gallery-img-overlay-inactive');
            }
        })

}
// Product image gallery ends here



// product description and product review tabs starts here

function showFullDescription(descBtn)
{
    let descBody = document.querySelector(".product-full-description-body");
    let reviewBtn = document.querySelector(".product-review-btn");
    let reviewBody = document.querySelector(".product-review-body");

    reviewBtn.classList.remove('active-tab');
    reviewBody.style.display = 'none';
    descBtn.classList.add('active-tab');
    descBody.style.display = 'block';

}

function showFullReview(reviewBtn)
{
    let descBody = document.querySelector(".product-full-description-body");
    let descBtn = document.querySelector(".product-desc-btn");
    let reviewBody = document.querySelector(".product-review-body");

    descBtn.classList.remove('active-tab');
    descBody.style.display = 'none';
    reviewBtn.classList.add('active-tab');
    reviewBody.style.display = 'block';
}
// product description and product review tabs ends here




// product attributes-color section starts here





// product attributes-color section ends here