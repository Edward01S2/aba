/**
 * External Dependencies
 */
import 'jquery';
import 'alpinejs';
import AOS from 'aos';


$(document).ready(() => {
  // console.log('Hello world');
  AOS.init({
      offset: 275,
      once: true,
      duration: 700,
  });

  window.addEventListener('load', AOS.refresh);

//   if(window.innerWidth >= 768) {
//     AOS.refresh({
//         offset: 700,
//     });
//   }

//     $(window).resize(function(e){
//         if(window.innerWidth >= 768) {
//             AOS.refresh({
//                 offset: 500,
//             });
//             console.log('Got Here');
//         }
//     });

  $('input[type=checkbox]').addClass('form-checkbox');

  $(document).bind('gform_post_render', function() {
    $('.footer_form #gform_submit_button_1').html('<svg class="h-8 w-16" fill="currentColor" viewBox="0 0 20 20"><path d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>')
    $('.post_form #gform_submit_button_1').html('<svg class="h-8 w-16" fill="currentColor" viewBox="0 0 20 20"><path d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>')
  })

  $('.footer_form #gform_submit_button_1').html('<svg class="h-8 w-16" fill="currentColor" viewBox="0 0 20 20"><path d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>')
  $('.post_form #gform_submit_button_1').html('<svg class="h-8 w-16" fill="currentColor" viewBox="0 0 20 20"><path d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>')

});


(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');
