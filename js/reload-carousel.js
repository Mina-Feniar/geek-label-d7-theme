/**
 * @file
 * Carousel hooks and customization.
 */

(function ($) {
  const sm = window.matchMedia( "(max-width: 576px)" );
  const md = window.matchMedia( "(max-width: 768px)" );
  const lg = window.matchMedia( "(max-width: 992px)" );

  Drupal.behaviors.carouselWithArrows  = {
    attach: function (context, settings) {
      var counter2 = 0;
      if (sm.matches) {
        var colClass = 'col-sm-12';
        var itemsToShow = 1;
      }
      else if (md.matches) {
        var colClass = 'col col-sm-12';
        var itemsToShow = 3;
      }
      else if (lg.matches) {
        var colClass = 'col-sm-6';
        var itemsToShow = 2;
      }
      else {
        var colClass = 'col-sm-4';
        var itemsToShow = 3;
      }
      var numOfSlides = $('.single-client').length;
      var numOfItemsContainer = Math.ceil(numOfSlides/itemsToShow);

      // Creating container items and indicators.
      for (var j = 0; j < numOfItemsContainer; j++) {
        var activeClass = '';
        if (j == 0) {
          activeClass = ' active';
        }
        else {
          activeClass = '';
        }
        // Showing items Containers.
        $(".carousel-type-2 .carousel-inner").append('<div class="item-' + j + ' item ' + activeClass + '">');

        // Showing items Indicators.
        $(".carousel-type-2 ol.carousel-indicators").append('<li data-target="#carousel-arrows" data-slide-to="'+ j +'" class="' + activeClass + '"></li>');
      }

      // Item containers loop.
      for (var i = 0; i < numOfSlides; i++) {
        if ((i % itemsToShow) == 0 && i != 0) {
          counter2++;
        }
        $(".carousel-type-2 .carousel-inner .item-" + counter2).append('<div class="' + colClass + '">'
            + $('#client-' + i).html() + '</div>');
      }

      $('#carousel-arrows.carousel').carousel({
        interval: false
      });

      $('.clients-temp').empty();
    }
  }
}(jQuery));