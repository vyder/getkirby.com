$(function() {

  $('.answer h1').on('click', function() {
    if($(this).parent().find('.inner').hasClass('vh')) {
      $('.answer .inner').addClass('vh');
      $(this).parent().find('.inner').removeClass('vh');
    } else {
      $('.answer .inner').addClass('vh');
    }
    return false;
  });

});