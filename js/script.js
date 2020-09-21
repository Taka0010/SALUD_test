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

  //////////// ▼▼ WOW.JS ▼▼ ////////////
  new WOW().init();

});
  
  