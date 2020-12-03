// Shop sidebar show/hide subcategories starts here

function showSubCate(parentCategory)
{
    let subCategory = parentCategory.parentNode.nextElementSibling;
    if(subCategory.classList.contains('hide-this'))
    {
        subCategory.classList.add('show-this');
        subCategory.classList.remove('hide-this');
    }
}

function hideSubCate(parentCategory)
{
    let subCategory = parentCategory.parentNode.nextElementSibling;
    if(subCategory.classList.contains('show-this'))
    {
        subCategory.classList.remove('show-this');
        setTimeout(function()
        {
            subCategory.classList.add('hide-this');
        }, 2000);
    }
}

function showBySubCate(subCategory)
{
    let parentCategory = subCategory.parentNode.parentNode;
    parentCategory.classList.add('show-this');
    parentCategory.classList.remove('hide-this');
}

function hideBySubCate(subCategory)
{
    let parentCategory = subCategory.parentNode.parentNode;
        parentCategory.classList.remove('show-this');
        setTimeout(function()
        {
            parentCategory.classList.add('hide-this');
        }, 2000);
}

// Shop sidebar show/hide subcategories ends here