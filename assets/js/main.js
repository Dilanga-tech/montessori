/*===> Init sliders <===*/
function sliderInit() {
    if ($('.main-slider').length>0) {
        $('.main-slider').each(function() {
            var slideSpeed = $(this).attr('data-slick-speed') * 1;
            var slideAutoplay = $.parseJSON($(this).attr('data-slick-autoplay'));

            $('.main-slider').slick({
                arrows: false,
                dots: true,
                fade: true,
                speed: 700,
                autoplay: slideAutoplay,
                autoplaySpeed: slideSpeed,
            });
        })
    }
}