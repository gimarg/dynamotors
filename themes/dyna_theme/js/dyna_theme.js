  (function ($, Drupal, drupalSettings) {

  'use strict';

  Drupal.behaviors.mybehavior = {
    attach: function (context, settings) {

      /*** Open sub-menu on hover ***/
      $(".nav li.expanded").hover(
        function(){
          $(this).addClass("open");
        },function(){
            $(this).removeClass("open");
        }
      );

      /*** Adds parallax effects ***/
      var controller = new ScrollMagic.Controller();

      var blocks = ["#block-views-block-frontpage-slider-block-1", ".parallax--dynatastoicheiaparallax", ".parallax--contactfrontpageblock"];

        blocks.forEach(function (block, index) {

            var $bg = $(block).find('.parallax__bg');
            var $content = $(block).find('.parallax__content');

            var tl = new TimelineMax();
            tl
              .from($bg, 2, {y: '-50%', ease: Power0.easeNone}, 0.2)
              .from($content, 2, {y: '-50%', ease: Power0.easeNone}, 0.2)
            ;

            var scene = new ScrollMagic.Scene({
                triggerElement: block,
                triggerHook: 1,
                duration: "100%"
            })
            .setTween(tl)
            .addTo(controller);
        });


      /*** Sticky Header on scroll***/
      $(window).scroll(function() {
        if ($(this).scrollTop() > 1){
          // $('#block-kentrikeploegesi').addClass("sticky");
          $('header').addClass("scrolled");
          $('.non-scrolled-contact').css('opacity','0');
          $('.scrolled-contact').css('visibility','visible');
        }
        else{
          // $('#block-kentrikeploegesi').removeClass("sticky");
          $('header').removeClass("scrolled");
          $('.scrolled-contact').css('visibility','hidden');
          $('.non-scrolled-contact').css('opacity','1');
        }
      });

      /*** Newsletter style changes ***/
      $("#edit-mergevars-email").attr("placeholder", "Email");
      $('#edit-submit').html("✓");

      /*** Frontpage Slider button changes ***/
      $("#views_slideshow_controls_text_previous_frontpage_slider-block_1").html(' ');
      $("#views_slideshow_controls_text_next_frontpage_slider-block_1").html(' ');
    }
  };
})(jQuery, Drupal, drupalSettings);