$(function(){

  //////////// ▼▼ ハンバーガーメニュー ▼▼ ////////////
  // 変数定義
  var logoWhite = $('.hambMenu__logo'),
      logoNormal = $('.logo'),
      hambMenu = $('.hambMenu__nav'),
      hambIcon = $('.header__hamb'),
      dots = $('.header__hamb--dots'),
      hambClose = $('.hambClose');

  // ハンバーガーメニュークリック時の機能
  $('.header__hamb').click(function(){
    hambMenu.toggleClass('humbOn');
    logoNormal.toggleClass('off');
    logoWhite.toggleClass('off');
    logoNormal.toggleClass('on');
    logoWhite.toggleClass('on');
    hambIcon.toggleClass('hambIconOn');
    dots.toggleClass('dotsDisp');
    hambClose.toggleClass('hambCls');
  });


  //////////// ▼▼ スムーススクロール ▼▼ ////////////
  window.smoothScroll = function() {
    $('a[href^="#"]').on('click', function(){
    var href = $(this).attr('href');
    if(href != '#'){ $('html, body').stop().animate({scrollTop: $(href == '#top' ? 'html' : href).offset().top}, 500); return false; }
    });
  }
  smoothScroll();

  
  //////////// ▼▼ WOW.JS ▼▼ ////////////
  new WOW().init();

});
  
  