(function ($, root, undefined) {
  
  $(function () {
    
    'use strict';

    var isLoaded = false;

    //Function to the css rule
    function checkSize(){
      switch( $(window).width() > 992 )
      {
        case true:
          console.log('big screen');
          //Get template from localized data in function.php::223
          $('#posts-hero').html(template.tile).promise().done(function(){
            $('.gallery').flickity({
              // options
              freeScroll: false,
              contain: true,
              pageDots: false
            }).flickity('reloadCells');
          });
          
          //Do magic based on screen size
          if( $(window).width() >= 1200 )
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
          }
          break;
        default:
          console.log('small screen');
          //If below 992 loat carousel from localized data in function.php::223

          $('#posts-hero').html(template.carousel).promise().done(function(){
            $('.main-gallery').flickity({
              pageDots: false,
              setGallerySize: false
            }).flickity('reloadCells');
          });
      }
    }

    // run test on initial page load
    checkSize();

    // run test on resize of the window
    $(window).resize(checkSize);
    
  });
  
})(jQuery, this);