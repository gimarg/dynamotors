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
      /*** Resets bootstrap's functionality for menu parent link clicks ***/
      $(".nav li a").click(function(event) {
        var link_to = $(this).attr('href');
        window.location.href = link_to;
        });

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
      if ($('body').hasClass('path-contact')) {
        $('header').addClass("scrolled");
        $('.non-scrolled-contact').css('opacity','0');
        $('.scrolled-contact').css('visibility','visible');
      }
      $(window).scroll(function() {
        if ($(this).scrollTop() > 1 || $('body').hasClass('path-contact')){
          // $('#block-kentrikeploegesi').addClass("sticky");
          $('header').addClass("scrolled");
          $('.non-scrolled-contact').css('display','none');
          $('.scrolled-contact').css('visibility','visible');
        }
        else{
          // $('#block-kentrikeploegesi').removeClass("sticky");
          $('header').removeClass("scrolled");
          $('.scrolled-contact').css('visibility','hidden');
          $('.non-scrolled-contact').css('display','inline-block');
        }
      });

      /*** Newsletter style changes ***/
      $("#edit-mergevars-email").attr("placeholder", "Email");
      $('#block-mailchimpsubscriptionformnewsletter .form-submit').html("✓");

      /*** Frontpage Slider button changes ***/
      $("#views_slideshow_controls_text_previous_frontpage_slider-block_1").html(' ');
      $("#views_slideshow_controls_text_next_frontpage_slider-block_1").html(' ');

      /*** Google Maps ***/
      var map;
      function initMap() {
        
        var marousi = {
          info: '<strong>Dynamotors Μαρούσι</strong><br>\
                Μεσογείων 131, Μαρούσι 15126 <br>\
                2106107623 <br>\
                servicedynamotors@gmail.com <br>\
                <a href="https://goo.gl/Uh6DuU" target="blank">Οδηγίες προς το συνεργείο</a>',
          lat: 38.041170,
          long: 23.819517
        };

        var likovrisi = {
          info: '<strong>Dynamotors Λυκόβρυση</strong><br>\
                Λεωφ. Σοφοκλή Βενιζέλου 112, Λυκόβρυση 14123<br>\
                2102853682 <br>\
                servicedynamotors@gmail.com <br>\
                <a href="https://goo.gl/cj1uE8" target="blank">Οδηγίες προς το συνεργείο</a>',
          lat: 38.074207,
          long: 23.791734
        };
      
        var agstefanos = {
          info: '<strong>Dynamotors Αγ.Στέφανος</strong><br>\r\
                Λεωφ. Κρυονερίου 3-5, Άγιος Στέφανος 14565<br>\
                2106200182 <br>\
                bmw.dynamotors@gmail.com <br>\
                <a href="https://goo.gl/qhTbGo" target="blank">Οδηγίες προς το συνεργείο</a>',
          lat: 38.139669,
          long: 23.853301
        };
      
        var locations = [
            [marousi.info, marousi.lat, marousi.long, 0],
            [likovrisi.info, likovrisi.lat, likovrisi.long, 1],
            [agstefanos.info, agstefanos.lat, agstefanos.long, 2],
          ];
      
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: new google.maps.LatLng(38.097117, 23.821440),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
      
        var infowindow = new google.maps.InfoWindow({});
      
        var marker, i;
      
        for (i = 0; i < locations.length; i++) {
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
          });
      
          google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
              infowindow.setContent(locations[i][0]);
              infowindow.open(map, marker);
            }
          })(marker, i));

        }

        /*** Trigger marker click on info click ***/
        $("#block-contactdetails .katastima a").click(function(){
          var j = $(this).attr("id");
          var infopos = new google.maps.LatLng(locations[j][1], locations[j][2]);
          infowindow.setPosition(infopos);
          infowindow.setContent(locations[j][0]);
          infowindow.open(map);
        });
      }
      google.maps.event.addDomListener(window, "load", initMap);
    
      /*** Make required one of 2 fields in contact form ***/
      // function validateContactForm() {
      //   if ($('#edit-field-telephono-epikoinonias-0-value') == '' && $('#edit-mail') == '') {
      //       alert('Συμπληρώστε τουλάχιστον ένα από τα πεδία "Τηλέφωνο επικοινωνίας" ή "Η διεύθυνση email σας" ώστε να μπορέσουμε να επικοινωνήσουμε μαζί σας.');
      //       return false;
      //   }
      // }
      $( "#contact-message-feedback-form" ).submit(function( event ) {
        if ($('#edit-field-telephono-epikoinonias-0-value').val() == '' && $('#edit-mail').val() == '') {
          event.preventDefault();
          alert('Συμπληρώστε τουλάχιστον ένα από τα στοιχεία "Τηλέφωνο επικοινωνίας" ή "Διεύθυνση email" ώστε να μπορέσουμε να επικοινωνήσουμε μαζί σας.');
        } else {
          $( "#contact-message-feedback-form" ).submit();
        }
      });
    }
  };
})(jQuery, Drupal, drupalSettings);