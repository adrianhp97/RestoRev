$('.nav-link').click(function() {
  $('.nav-item').removeClass();
  $(this).parent().addClass('active');
});