jQuery(document).ready(function($) {
  $('.quicklink').hover(function(){
    $(this).removeClass('circular').addClass('circular-over');
  }, function(){
    $(this).removeClass('circular-over').addClass('circular');
  });
});
