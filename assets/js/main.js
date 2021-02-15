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
        ]
    });

    let elem = document.querySelector('.calc-range');
    let init = new Powerange(elem, { min: 10000, max: 300000, start: 10000, hideRange: true, step: 10000});
    let per, month, result, total, monthly;
    let money = +$('.calc-range').val();

    $('input[name=programms]').on('change', function(event){
        month = +$(this).attr('data-month');
        per = +$(this).attr('data-per');
        result = Math.round(per / 12 * month * money);
        total = result + money;
        monthly = parseInt(result / month);
        $('#total').text(total.toString().replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 '));
        $('.calc-monthly span').text(monthly.toString().replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 '));
        $('#month').text(month);
    });

    $('.calc-range').on('change', function(event){
        let summ = ($(this).val() * 10).toString();
        $('.calc-summ_invest_num span').text(summ.replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 '));
        let radio = $('input[name=programms]:checked');
        money = +$(this).val();
        month = +radio.attr('data-month');
        per = +radio.attr('data-per');
        result = Math.round(per / 12 * month * money);
        total = result + money;
        monthly = parseInt(result / month);
        $('#total').text(total.toString().replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 '));
        $('.calc-monthly span').text(monthly.toString().replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 '));
    });
});
