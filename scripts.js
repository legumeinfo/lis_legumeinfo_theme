jQuery(document).ready(function($) {
  // Code that uses jQuery's $ can follow here.
  $('.quicklink').hover(function(){
    $(this).removeClass('circular').addClass('circular-over');
  }, function(){
    $(this).removeClass('circular-over').addClass('circular');
  });
});