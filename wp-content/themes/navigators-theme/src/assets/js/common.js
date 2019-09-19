//redirect & anchor scroll
let host = window.location.hostname;

function anchorRedirect() {
    let link = $('.anchor-link').find('a');
    link.on('click', function H(e) {
        e.preventDefault();
        let scrollTo = $(this).attr('href');
        dl.log(scrollTo);
        if($('body').hasClass('page-template-template-home')) {
            let destination = $(scrollTo).offset().top;
            $('html, body').animate({ scrollTop: destination }, 400);
        } else {
            let host = window.location.hostname,
                pathToRedirect = 'http://' + host + scrollTo;
            window.location.replace(pathToRedirect);
        }
    });
}

anchorRedirect();

//check redirect
function checkRedirect() {
    let currentLocation = location.href,
        pathToInfoPage = 'http://' + host + '/#info',
        pathToExpertsPage = 'http://' + host + '/#expert';

    if(currentLocation === pathToInfoPage) {
        let destination = $('#info').offset().top;
        $('html, body').animate({ scrollTop: destination }, 400);
    } else if(currentLocation === pathToExpertsPage) {
        let destination = $('#expert').offset().top;
        $('html, body').animate({ scrollTop: destination }, 800);
    }
}

checkRedirect();

//init menu
let menu = {
    nav: $('.menu-wrapper'),
    openMenuBtn: $('.menu-action'),
    flag: true,

    menuAction() {
        this.openMenuBtn.on('click', function() {
            if(menu.flag) {
                menu.flag = false;

                menu.nav.slideToggle();
                menu.openMenuBtn.toggleClass('menu-action_init');
                $('body').toggleClass('disabled-scroll');
                setTimeout(function() {
                    menu.flag = true;
                }, 300);
            }
        });
    },
    init() {
        this.menuAction();
    },
    destroy() {
        this.nav.removeAttr('style');
        $('body').removeClass('disabled-scroll');
        this.openMenuBtn.removeClass('menu-action_init');
    }
};


//init on load
menu.init();

$(window).resize(function() {
    if(window.innerWidth >= 768) {
        menu.destroy();
    }
});

$('.mobile-competencies__slider').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    draggable: true,
    dots: true,
    arrows: false,
    responsive: [ {
        breakpoint: 768,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: false
        }
    } ]
});

$('.investor-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: true,
    dots: true,
    arrows: false
});
