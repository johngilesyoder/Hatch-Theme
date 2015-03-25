(function ($, root, undefined) {
  
  $(function () {
    
    'use strict';

    //Function to the css rule
    function checkSize(){
      switch( $(window).width() > 992 )
      {
        case true:
          //Get template from localized data in function.php::223

          $('#posts-hero').html(template.tile);
          
          //Do magic based on screen size
          if( $('.container').width() >= 1140 )
          {
            // DOM ready, take it away
            $('.isotope').isotope({
              layoutMode: 'masonryHorizontal',
              itemSelector: '.item',
              resizable: false,
              //sortBy: 'random',
              masonryHorizontal: {
                rowHeight: 144,
                gutter: 30
              }
            });
            $('.js-flickity').flickity({
              // options
              freeScroll: false,
              contain: true,
              pageDots: false
            });
          } else {
            $('.isotope').isotope({
              layoutMode: 'masonryHorizontal',
              itemSelector: '.item',
              resizable: false,
              //sortBy: 'random',
              masonryHorizontal: {
                rowHeight: 111,
                gutter: 30
              }
            });
            $('.js-flickity').flickity({
              // options
              freeScroll: false,
              contain: true,
              pageDots: false
            });
          }
          break;
        default:
          //If below 970 loat carousel from localized data in function.php::223
          console.log('made it');
          $('#posts-hero').html(template.carousel);
      }
    }

    // run test on initial page load
    checkSize();

    // run test on resize of the window
    $(window).resize(checkSize);
    
  });
  
})(jQuery, this);