$(document).ready(function(){
    let menuBtn = $('.top-nav_btn');
    let sidebarBtn = $('.left-sidebar_btn');
    let menu = $('.top-nav_menu');
    let sidebarMenu = $('.left-sidebar_menu');

    menuBtn.on('click', function(event){
        event.preventDefault();
        menu.toggleClass('top-nav_menu__active');
    });

    sidebarBtn.on('click', function(event){
        event.preventDefault();
        sidebarMenu.toggleClass('left-sidebar_menu__active');
    });

    $('.directions-blocks').slick({
    arrows: false,
    dots: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
    {
    breakpoint: 1220,
    settings: {
        slidesToShow: 3,
        slidesToScroll: 1
    }
    },
    {
    breakpoint: 985,
    settings: {
        slidesToShow: 2,
        slidesToScroll: 1
    }
    },
    {
    breakpoint: 480,
    settings: {
        slidesToShow: 1,
        slidesToScroll: 1
    }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]

    });

});
