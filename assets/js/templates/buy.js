$(function() {

  $('.buy-section h3').on('click', function() {
    if($(this).parent().find('.buy-section-option-content').hasClass('vh')) {
      $('.buy-section-option-content').addClass('vh').parent().removeClass('active');
      $(this).parent().find('.buy-section-option-content').removeClass('vh').parent().addClass('active');
    } else {
      $('buy-section-option-content').addClass('vh').parent().removeClass('active');
    }
    return false;
  });

});

