(function ($, root, undefined) {
  
  $(function () {
    
    'use strict';
    
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
  });
  
})(jQuery, this);