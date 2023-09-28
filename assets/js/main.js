$(function () {
    $(".menu").on("click", "li", function () {
        let is_active = false;

        if ($(this).hasClass('active')) { is_active = true; }

        $(".menu-item").removeClass('active');

        if (!is_active) { $(this).addClass('active'); }


    });
    /* Hamburger menu*/

    $('.hamburger').on('click', function () {
        $(this).toggleClass('is-active');
        $('.mobile-nav').toggleClass('is-active');
    })
    $('.header__right-search').on('click', function() {
        $('.search').css('display', 'flex');
        $('.h-menu').css('display', 'none');
    })
    $('.closes').on('click', function() {
        $('.search').css('display', 'none');
        $('.h-menu').css('display', 'block');
    })

});

