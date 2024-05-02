window.addEventListener('DOMContentLoaded', function () {
    $('.audio__reviews-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        speed: 2000,
        easing: 'ease',
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 370,
                settings: {
                    slidesToShow: 1,
                    centerMode: false,
                    centerPadding: '10px',
                },
            },
        ],
    });
    $('.slider-production-content-big').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.slider-production-content',
        fade: true,
        speed: 500,
        cssEase: 'linear',
    });
    $('.slider-production-content').slick({
        asNavFor: '.slider-production-content-big',
        slidesToShow: 5,
        slidesToScroll: 1,
        focusOnSelect: true,
        dots: false,
    });
});
