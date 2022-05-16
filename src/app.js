import 'bootstrap';

// Dropdown menu
const tl = new TimelineMax();
let isClickedIcon = false;
$('#lang-dropdown').on('mouseover', function () {
    let el = $(this);
    tl.to(el, {css:{borderBottom: '2px solid #FDCD0B'}})
})
$('#lang-dropdown').on('mouseleave', function () {
    let el = $(this);
    tl.to(el, {css:{borderBottom: '2px solid #fff'}})
})

$('#lang-dropdown').on('click', function () {
    let icon = $('.la-angle-down');
    if(!isClickedIcon)
    {
        tl.to(icon, {rotation: 180});
        isClickedIcon = true;
    } else {
        tl.to(icon, {rotation: 0});
        isClickedIcon = false;
    }
    $('.dropdown-menu').toggle();
});

// Add to wishlist icon
$(function () {
    $(document).on('click', '.wish-btn', function (e) {
        $(this).children('.la-heart').toggleClass('las').toggleClass('animate-like');
    });
});


const timeline = new TimelineMax();

let check = $('.check');
timeline.fromTo(check, { scale: '0' }, { width: '1', ease: Power2.easeInOut });

// Add to cart icon 
let added = false;
$('.add-to-cart').each(function (index) {
    $(this).on('click', function () {
        let addedToCart = $(this).find('.cart').next();
        let thisCheck = $(this).find('.check');
        if(!added)
        {
            timeline.fromTo(addedToCart, 1, { scale: '0' }, { scale: '1', ease: Power2.easeInOut })
            added = true;
        } else {
            timeline.fromTo(thisCheck, { scale: '1' }, { scale: '0', ease: Power2.easeInOut })
            added = false;
        }
    });
});

// Compare icon
const tlCompareIcon = new TimelineMax();

// On hover
$('.compare-icon').each(function () {
    $(this).on('mouseenter', () => {
        let thisIcon = $(this);
        let bottomArrow = thisIcon.find('.bottom-arrow');
        let topArrow = thisIcon.find('.top-arrow');

        tlCompareIcon.to(topArrow, 0.5, { x: '-12' })
            .to(bottomArrow, 0.5, { x: '12' }, '-=0.5');
    })
});
$('.compare-icon').each(function () {
    $(this).on('mouseleave', () => {
        let thisIcon = $(this);
        let bottomArrow = thisIcon.find('.bottom-arrow');
        let topArrow = thisIcon.find('.top-arrow');

        tlCompareIcon.to(topArrow, 0.5, { x: '1' })
            .to(bottomArrow, 0.5, { x: '1' }, '-=0.5');
    })
});

// On click
let isClicked = false;
$('.compare-icon').each(function () {
    $(this).on('click', () => {
        let thisIcon = $(this);
        let bottomArrow = thisIcon.find('.bottom-arrow');
        let topArrow = thisIcon.find('.top-arrow');
        if (!isClicked) {
            tlCompareIcon.to(bottomArrow, .5, { fill: 'green' })
                .to(topArrow, .5, { fill: 'green' }, '-=0.5');
            isClicked = true;
        } else {
            tlCompareIcon.to(bottomArrow, .5, { fill: '#7F9CF5' })
                .to(topArrow, .5, { fill: '#7F9CF5' }, '-=0.5');
            isClicked = false;
        }

    })
});

// Product colors
$('.product-color-checkbox').each(function () {
    $(this).on('click', () => {
        var color = $(this).attr("data-color");
        if ($(this).is(':checked')) {
            $(this).prev().append('<i class="las la-check"></i>')
            $('.display-selected-colors').append(`<div class="color my-2 ${color}"><i class="las la-times" onclick="removeEl(this, ${color})"></i> <span class="selected-color">${color}</span></div>`);
        } else {
            $(this).prev().find('.las').remove();
            $('.display-selected-colors').find(`.${color}`).remove();
        }
    })
});

// Responsive menu
let line1 = $('.line1');
let line2 = $('.line2');
let line3 = $('.line3');

const tlMenu = new TimelineMax();

let clickedMenu = false;
$('.navbar-toggler').on('click', function () {
    if (!clickedMenu) {
        tlMenu.to(line3, 0.2, { width: 0 })
            .to(line1, { width: '50px', rotation: -320, top: '12px', backgroundColor: '#FDCD0B' }, '-=0.2')
            .to(line2, { width: '50px', rotation: -400, backgroundColor: '#FDCD0B' }, '-=0.4');
        clickedMenu = true;
    } else {
        tlMenu.to(line1, 0.2, { rotation: 0, top: '0', backgroundColor: '#000000' })
            .to(line2, { rotation: 0, width: '40px', backgroundColor: '#000000' }, '-=0.4')
            .to(line3, { width: '30px' }, '-=0.1');
        clickedMenu = false;
    }
})

// Slide indicators
const tlSlide = new TimelineMax();

$('.slide-indicators').each(function () {
    $(this).on('mouseenter', function () {
        let previousSlideIcon = $(this).find('.slide-icon');
        let previousSlideIconStroke = previousSlideIcon.next();

        tlSlide.to(previousSlideIcon, { fill: '#000' });
        tlSlide.to(previousSlideIconStroke, { stroke: '#fff' }, '-=0.2');
    })
    $(this).on('mouseleave', function () {
        let previousSlideIcon = $(this).find('.slide-icon')
        let previousSlideIconStroke = previousSlideIcon.next();

        tlSlide.to(previousSlideIcon, { fill: '#fff' });
        tlSlide.to(previousSlideIconStroke, { stroke: '#000' }, '-=0.2');
    })
})

// Card image
const tlImage = new TimelineMax();

$('.product-img').each(function () {
    $(this).on('mouseenter', function () {
        let image = $(this);
        tlSlide.to(image, 0.5, {scale: 1.1});
    })
    $(this).on('mouseleave', function () {
        let image = $(this);
        tlSlide.to(image, 0.5, {scale: 1});
    })
})

