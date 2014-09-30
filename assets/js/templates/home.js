$(function() {

  $('.hero-slider li').first().addClass('active');

  setInterval(function() {

    var active = $('.hero-slider .active');
    var next   = active.next('.hero-slider li');

    if(!next.length) var next = $('.hero-slider li').first();

    active.removeClass('active');
    next.addClass('active');

  }, 5000);

});