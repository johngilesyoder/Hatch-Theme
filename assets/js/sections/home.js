(function ($, root, undefined) {
  
  $(function () {
    
    'use strict';

    //Function to the css rule
    function checkSize(){
      switch( $(".container").width() > 970 )
      {
        case true:
          $('#posts-hero').html(template.tile);
          if( $(".container").width() > 1170 )
          {
            // DOM ready, take it away
            $('.isotope').isotope({
              layoutMode: 'masonryHorizontal',
              itemSelector: '.item',
              //sortBy: 'random',
              masonryHorizontal: {
                rowHeight: 144,
                gutter: 30
              }
            });
          } else {
            $('.isotope').isotope({
              layoutMode: 'masonryHorizontal',
              itemSelector: '.item',
              //sortBy: 'random',
              masonryHorizontal: {
                rowHeight: 111,
                gutter: 30
              }
            });
          }
          break;
        default:
          $('#posts-hero').html(template.carousel);
      }
    }

    // run test on initial page load
    checkSize();

    // run test on resize of the window
    $(window).resize(checkSize);
    
  });
  
})(jQuery, this);