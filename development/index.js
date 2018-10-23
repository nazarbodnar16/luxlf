
$(document).ready(function () {
  $('.bg-img').each(function() {
    $(this).css('background-image', 'url(' + $(this).find('> img').attr('src') + ')').find('> img').hide();
});


  $('<a href="#" class="open-menu"><span></span>Open Menu</a>').appendTo('#header .header-container');
  $('<span class="fader"/>').appendTo('body');
  $('.open-menu').click(function(){
    $('body').toggleClass('menu-opened');
    return false;
    });//btn-open-manu

  $('.search-contact-box .seacrh-btn').click(function(){
    $('body').toggleClass('search-opened');
    
    return false;
    });//btn-open-manu
  $('.fader').click(function(){
    $('body').removeClass('search-opened');
});
  $('.director-list--item .info').matchHeight();
})
