(function ($) {
    /*
     Drupal.behaviors.hamburger = {
     attach: function (context, settings) {
     $('#hamburger').on('click', function (e) {
     e.preventDefault();
     $('.menu').slideToggle(300);
     });
     }
     };
     */
    Drupal.behaviors.script = {
        attach: function (context, settings) {
            var mySwiper = new Swiper('.swiper-container', {
                direction: 'horizontal',
                loop: true,
                paginationClickable: true,
                autoplay: 5000,
                pagination: '.s-controls',
                effect: 'slide',
                speed: 500,
                paginationElement: 'div',
                bulletClass: "c-item",
                paginationBulletsClass: "s-controls",
                bulletActiveClass: "c-item_active"
            })
        }
    };
}(jQuery));