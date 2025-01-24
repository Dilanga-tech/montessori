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


function kidearnPara() {
    let kidearnParaElm = $(".bcm-splax");
    if (kidearnParaElm.length) {
      kidearnParaElm.each(function () {
        let self = $(this);
        let className = self.attr("class");
        var image = document.getElementsByClassName(className);
        let options = self.data("para-options");
        let kidearnPara = new simpleParallax(
          image,
          "object" === typeof options ? options : JSON.parse(options)
        );
      });
    }
  }


  function thmOwlInit() {
    console.log('Owl Init Function Called');
    let kidearnowlCarousel = $(".kidearn-owl__carousel");
    if (kidearnowlCarousel.length) {
        kidearnowlCarousel.each(function () {
            let elm = $(this);
            let options = elm.data("owl-options");
            console.log(options);  // Check options
            elm.owlCarousel(
                "object" === typeof options ? options : JSON.parse(options)
            );
        });
    }
}

$(document).ready(function() {
    thmOwlInit();
});


if ($(".masonry-layout").length) {
    $(".masonry-layout").imagesLoaded(function () {
      $(".masonry-layout").isotope({
        layoutMode: "masonry"
      });
    });
  }

  if ($(".img-popup").length) {
    var groups = {};
    $(".img-popup").each(function () {
      var id = parseInt($(this).attr("data-group"), 10);

      if (!groups[id]) {
        groups[id] = [];
      }

      groups[id].push(this);
    });

    $.each(groups, function () {
      $(this).magnificPopup({
        type: "image",
        closeOnContentClick: true,
        closeBtnInside: false,
        gallery: {
          enabled: true
        }
      });
    });
  }