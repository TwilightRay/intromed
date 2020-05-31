$(document).on('click', 'body', function(el) {
  if (!$(el.target).parents('.dropdown').hasClass('open')) {
    $('.dropdown').removeClass('open').children('ul.dropdown-list').slideUp();
  }
})
$(document).on('click', 'button.userdata', function() {

  let pd = $(this).parents('.dropdown');

  $('.dropdown').not(pd)
                .removeClass('open')
                .find('ul.dropdown-list')
                .slideUp(200);

  if ($(this).parent('.dropdown').hasClass('open')) {
    $(this).parent('.dropdown').removeClass('open');
    $(this).siblings('ul.dropdown-list').slideUp(200);
  } else {
    $(this).parent('.dropdown').addClass('open');
    $(this).siblings('ul.dropdown-list').slideDown(200);
  }
})
$(document).on('click', 'ul.dropdown-list>li', function() {
  $(this).parents('.dropdown').removeClass('open');
  $(this).parent('ul.dropdown-list').slideUp(200);
  var id = $(this).attr('data-id');
  var text = $(this).text();
  $(this).parent().siblings('button').children('span').text(text).attr('title', text);
  $(this).parents('.dropdown').siblings('.list').val(id);
})
