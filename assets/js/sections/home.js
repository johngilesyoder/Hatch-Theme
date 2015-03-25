(function ($, root, undefined) {
  
  $(function () {
    
    'use strict';
    
    // run test on initial page load
    checkSize();

    // run test on resize of the window
    $(window).resize(checkSize);

    //Function to the css rule
    function checkSize(){
        if ($(".container").css("width") == "1170px" ){

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

        }
        if ($(".container").css("width") == "970px" ){
            // your code here
            
            // DOM ready, take it away
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
    }


    
  });
  
})(jQuery, this);