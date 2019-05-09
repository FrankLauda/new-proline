import $ from 'jquery';
import whatInput from 'what-input';
import './lib/jquery.flexslider-min';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});

$(document).foundation();
