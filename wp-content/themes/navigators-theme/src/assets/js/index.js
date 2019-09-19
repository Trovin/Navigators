import 'slick-carousel/slick/slick.min';

$('.developing-item__inner').on('click', function H() {
    $(this).toggleClass('active-dropped');
    $(this).find('.developing-item__dropped-icon')
        .toggleClass('active-dropped active-dropped__icon');
    $(this).parent('.developing-item').find('.dropped-content')
        .slideToggle();
});

$(".wpcf7 .form-control").on('focus', function H() {
    $(this).parent().parent()
        .addClass('active');
}).blur(function H() {
    let cval = $(this).val();
    if(cval.length < 1) {
        $(this).parent().parent()
            .removeClass('active');
    }
});

$('.startup-tab__headline').on('click', function H() {
    $('.startup-tab__headline').removeClass('startup-tab__headline_active');
    $(this).addClass('startup-tab__headline_active');
    let value = $(this).data('tab');
    $('.startup-content__inner').hide();
    $('.startup-content-' + value).fadeIn(400);
});

$('.experts-slider').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    variableWidth: true,
    draggable: false,
    dots: false,
    prevArrow: $('.slider-control__prev'),
    nextArrow: $('.slider-control__next'),
    responsive: [ {
        breakpoint: 1361,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            variableWidth: false
        }
    },
    {
        breakpoint: 767,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            variableWidth: false
        }
    },
    {
        breakpoint: 620,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: false,
            arrows: false,
            draggable: true,
            dots: true
        }
    } ]
});

