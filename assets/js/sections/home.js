(function ($, root, undefined) {
  
  $(function () {
    
    'use strict';
    //Function to the css rule
    function checkSize(){
      switch( $(window).width() > 970 )
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
              //sortBy: 'random',
              masonryHorizontal: {
                rowHeight: 144,
                gutter: 30
              }
            }).isotope('bindResize');
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
          //If below 970 loat carousel from localized data in function.php::223
          $('#posts-hero').html(template.carousel);
      }
    }

    // run test on initial page load
    checkSize();

    // run test on resize of the window
    $(window).resize(checkSize);
    
  });
  
})(jQuery, this);