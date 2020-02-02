(function ($) {
"use strict";


$('.toggole').on('click',function(){
$('.toggole-1').slideToggle();
});
$('.toggoles').on('click',function(){
$('.toggole-2').slideToggle();
});
$('.search-icon').on('click',function(){
$('.header-from').slideToggle();
});
$('.header-icon').on('click',function(){
$('.test').slideToggle();
});

$('.owl-carousel').owlCarousel({
    loop:true,
    items:4,
    nav:true,

});
 new WOW().init();

})(jQuery);
