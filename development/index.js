
$(document).ready(function () {
  $('.wpcf7-list-item-label').click(function(e){
    var corrChkbx = jQuery(this).prev('input[type="checkbox"]'),
    checkedVal = corrChkbx.prop('checked');
    corrChkbx.prop('checked', !checkedVal);
  });

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
$('.main-nav li').each(function(){
    if ($(this).find('.sub-menu').length){
      $(this).prepend('<span class="opener"></span>');
      $(this).addClass('dropdown');
    }
  });//main-nav-dropdown

  $('.main-nav .opener').click(function(){
    if ($(this).parent().hasClass('opened')) {
      $(this).parent().removeClass('opened');
      $(this).siblings('.sub-menu').stop().slideUp(300);
    } else{
      $(this).parent().addClass('opened').siblings('.opened').removeClass('opened').children('.sub-menu').stop().slideUp(300);
      $(this).siblings('.sub-menu').stop().slideDown(300);
    };
    return false;
  });//main-nav-accordion


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
    $(this).parent().toggleClass('opened');
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

$('.download-pdf').click(function(e){
  var link = $(this).parents('.news-list--item').find('.download-file');
  e.preventDefault();
  $(".wpcf7").on('wpcf7:mailsent', function(event){
    e.preventDefault();
    link.attr('target', "_blank");
  });
});

/*inView('.animate')
    .on('enter', animate)
    .on('exit', no_animate)

function animate() {
  $('.animate').addClass('in-view');
}
function no_animate() {
  $('.animate').removeClass('in-view');
}
*/

(function($) {

  /**
   * Copyright 2012, Digital Fusion
   * Licensed under the MIT license.
   * http://teamdf.com/jquery-plugins/license/
   *
   * @author Sam Sehnert
   * @desc A small plugin that checks whether elements are within
   *     the user visible viewport of a web browser.
   *     only accounts for vertical position, not horizontal.
   */

   $.fn.visible = function(partial) {
    
    var $t            = $(this),
    $w            = $(window),
    viewTop       = $w.scrollTop(),
    viewBottom    = viewTop + $w.height(),
    _top          = $t.offset().top,
    _bottom       = _top + $t.height(),
    compareTop    = partial === true ? _bottom : _top,
    compareBottom = partial === true ? _top : _bottom;
    
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };
  
})(jQuery);
/*
$(window).scroll(function(event) {
  
  $(".animate").each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("in-view"); 
    } else {
      el.removeClass("in-view");
    }
  });
  
});*/

$(window).on("load scroll",function(e){
 $(".animate").each(function(i, el) {
  var el = $(el);
  if (el.visible(true)) {
    el.addClass("in-view"); 
  } else {
    el.removeClass("in-view");
  }
});
});