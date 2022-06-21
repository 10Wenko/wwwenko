$(document).ready(function () {
    $('.header__burger').click(function (event) {
        $('.header__burger,.header__menu').toggleClass('active');
        $('body').toggleClass('lock');
    });
    $('.slider').slick({
        arrows: false,
        dots: false,
        adaptiveHeight: true,
        speed: 2000,
        autoplay: true,
        autoplaySpeed: 3000,
    });
    $('.services__title1').click(function (event) {
        if ($('.services__spoiler').hasClass('one')) {
            $('.services__title1').not($(this)).removeClass('active');
            $('.services__text1').not($(this).next()).slideUp(300);
        }
        $(this).toggleClass('active').next().slideToggle(300);
    });
});