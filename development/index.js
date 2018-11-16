
$(document).ready(function () {
  $('.bg-img').each(function() {
    $(this).css('background-image', 'url(' + $(this).find('> img').attr('src') + ')').find('> img').hide();
  });

/*  $('.load-more').click(function() {
    $(this).addClass('loading');
    $('i').addClass('fa-spin db');

    setTimeout(function() {
      setTimeout(function() {
       $('i').removeClass('fa-spin db');
       $('.load-more').removeClass('loading');
     }, 1000);
    }, 1000);

    return false;
  });*/

  $('<a href="#" class="open-menu"><span></span>Open Menu</a>').appendTo('#header .container');
  $('<span class="fader"/>').appendTo('body');
  $('.open-menu').click(function(){
    $('body').toggleClass('menu-opened');
    return false;
    });//btn-open-manu
  /*tabs*/
  (function ($) { 
    $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
    $('.literature-tabs .tab ul.tabs').addClass('active').find('> li:eq(0)').removeClass('current');
    $('.literature-tabs .tab ul.tabs').addClass('active').find('> li:eq(2)').addClass('current');
    $('.tab ul.tabs li a').click(function (g) { 
      var tab = $(this).closest('.tab'), 
      index = $(this).closest('li').index();
      
      tab.find('ul.tabs > li').removeClass('current');
      $(this).closest('li').addClass('current');
      
      tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
      tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();

      g.preventDefault();
    } );
  })(jQuery);

  $('.literature-box .show-more-literature-list').click(function(){
    $(this).parent().find('.more-literature-list').slideToggle();
    return false;
    });//btn-open-manu

  $('.search-contact-box .seacrh-btn').click(function(){
    $('body').toggleClass('search-opened');
    
    return false;
    });//btn-open-manu
  $('.fader').click(function(){
    $('body').removeClass('search-opened');
  });
  $('.item-list .item-list--info .text').matchHeight(); 
  $('.tabs li a').matchHeight();
})
$(function(){
    // If the cookie does not exist
    if ($.cookie('agree') == 'agreed') {
      $('#notice').modal('hide');
    }
    if ($.cookie('agree') == null ) {
      $('#notice').modal('show');
    }
    $('.agree-btn').click(function(){
      $.cookie("agree", "agreed");
      $('#notice').modal('hide');
      return false;
    });//btn-open-manu

    if ($.cookie('modalshow') === null) 
    {
       // Show the modal
       $('#myModal').modal({
        backdrop: 'static',
        keyboard: false
      })
       var expiryDate = new Date();
       var hours = 168;
       expiryDate.setTime(expiryDate.getTime() + (hours * 3600 * 1000));

       // Create cookie to expire in 168 hours (1 week)
       $.cookie("modalshow", "false", { path: '/', expires: expiryDate });
     }
   });


if (document.cookie.indexOf("modalshow=true") < 0) {
  $('#notice').modal('show');
  $('#myModal').modal({
    backdrop: 'static',
    keyboard: false
  })
  var expiryDate = new Date();
  var hours = 168;
  expiryDate.setTime(expiryDate.getTime() + (hours * 3600 * 1000));
  document.cookie = "modalshow=true; expires=" + expiryDate + "; path=/";
}
