import 'bootstrap';

$('#lang-dropdown').click(function() {
    $('.icon-rotates').toggleClass('la-angle-up');
    $('.dropdown-menu').toggle();
});

$(function(){
    $(document).on('click', '.wish-btn', function(e) {
        $(this).children('.la-heart').toggleClass('las').toggleClass('animate-like');
    });
});


const timeline = new TimelineMax();

let check = $('.check');
timeline.fromTo(check, {scale: '0'}, {width: '1', ease: Power2.easeInOut });

// Add to cart icon 
$('.cart').each(function(index) {
    $(this).on('click', function(){
        let thisCart = $(this);
        let addedToCart = $(this).prev();
        let addedToCartPath = addedToCart.find('.check-path');
        timeline.fromTo(thisCart, 0.3, {scale: '1'}, {scale: '0', transformOrigin: 'center left', ease: Power2.easeInOut })
        .fromTo(addedToCart, 1, {scale: '0'}, {scale: '1', ease: Elastic.easeOut.config(1, 0.7)})
        .to(addedToCartPath, 1, {fill: 'green'}, '-=0.8');
        
    });
});

$('.check').each(function(index) {
    $(this).on('click', function(){
        let thisCheck = $(this);
        let addToCart = $(this).next();
        let addedToCartPath = thisCheck.find('.check-path');
        timeline.to(addedToCartPath, 0.5, {fill: '#000000'})
        .fromTo(thisCheck, {scale: '1'}, {scale: '0', transformOrigin: 'center left', ease: Power2.easeInOut })
        .fromTo(addToCart, 1, {scale: '0'}, {scale: '1', ease: Elastic.easeOut.config(1, 1)});
        
    });
});


// Compare icon
const tlCompareIcon = new TimelineMax();

// On hover
$('.compare-icon').each(function() {
    $(this).on('mouseenter', () => {
        let thisIcon = $(this);
        let bottomArrow = thisIcon.find('.bottom-arrow');
        let topArrow = thisIcon.find('.top-arrow');

        tlCompareIcon.to(topArrow, 0.5, {x: '-12'})
        .to(bottomArrow, 0.5, {x: '12'}, '-=0.5');
    })
});
$('.compare-icon').each(function() {
    $(this).on('mouseleave', () => {
        let thisIcon = $(this);
        let bottomArrow = thisIcon.find('.bottom-arrow');
        let topArrow = thisIcon.find('.top-arrow');

        tlCompareIcon.to(topArrow, 0.5, {x: '1'})
        .to(bottomArrow, 0.5, {x: '1'}, '-=0.5');
    })
});

// On click
let isClicked = false;
$('.compare-icon').each(function() {
    $(this).on('click', () => {
        let thisIcon = $(this);
        let bottomArrow = thisIcon.find('.bottom-arrow');
        let topArrow = thisIcon.find('.top-arrow');
        if(!isClicked)
        {
            tlCompareIcon.to(bottomArrow, .5, {fill: 'green'})
            .to(topArrow, .5, {fill: 'green'}, '-=0.5');
            isClicked = true;
        } else {
            tlCompareIcon.to(bottomArrow, .5, {fill: '#7F9CF5'})
            .to(topArrow, .5, {fill: '#7F9CF5'}, '-=0.5');
            isClicked = false;
        }

    })
});

// Product colors
$('.product-color-checkbox').each(function() {
    $(this).on('click', () => {
        var color = $(this).attr("data-color");
        if($(this).is(':checked'))
        {
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
$('.navbar-toggler').on('click', function() {
    if(!clickedMenu)
    {
        tlMenu.to(line3, 0.2, {width: 0})
        .to(line1, {width: '50px', rotation: -320, top: '12px', backgroundColor: '#FDCD0B'}, '-=0.2')
        .to(line2, {width: '50px', rotation: -400, backgroundColor: '#FDCD0B'}, '-=0.4');
        clickedMenu = true;
    } else {
        tlMenu.to(line1, 0.2, {rotation: 0, top: '0', backgroundColor: '#000000'})
        .to(line2, {rotation: 0, width: '40px', backgroundColor: '#000000'}, '-=0.4')
        .to(line3, {width: '30px'}, '-=0.1');
        clickedMenu = false;
    }
})

// Slide indicators
const tlSlide = new TimelineMax();

$('.slide-indicators').each(function() {
    $(this).on('mouseenter', function() {
        let previousSlideIcon = $(this).find('.slide-icon');
        let previousSlideIconStroke = previousSlideIcon.next();

        tlSlide.to(previousSlideIcon, {fill: '#000'});
        tlSlide.to(previousSlideIconStroke, {stroke: '#fff'}, '-=0.2');
    })
    $(this).on('mouseleave', function() {
        let previousSlideIcon = $(this).find('.slide-icon')
        let previousSlideIconStroke = previousSlideIcon.next();

        tlSlide.to(previousSlideIcon, {fill: '#fff'});
        tlSlide.to(previousSlideIconStroke, {stroke: '#000'}, '-=0.2');
    })
})

