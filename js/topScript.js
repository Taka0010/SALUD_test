document.addEventListener('DOMContentLoaded', function(){
  // console.log('hi')
  // 変数定義
  var logoNormal = document.querySelector('.logo'),
      mvLogo = document.querySelector('.mv__logo'),
      initclientRect = mvLogo.getBoundingClientRect(),
      inittargetPosi = initclientRect.top;
  
  // リロード時ページ下部にいる時にロゴを見せる
  if(inittargetPosi < 0){
    logoNormal.classList.add('downBack');
  }
  
  // スクロールアクション設定
  var scrollCtrl = false;
  document.addEventListener('scroll',function(){
    var clientRect = mvLogo.getBoundingClientRect();
        targetPosi = clientRect.top;
    
    // スクロールアクション制限
    if(targetPosi < -100){
      scrollCtrl = false;
    }else{
      scrollCtrl = true;
    }

    setInterval(function() {
      if (scrollCtrl) {
        scrollCtrl = false;
        if(targetPosi < 0){
          logoNormal.classList.add('downBack');
        }else{
          logoNormal.classList.remove('downBack');
        }
      }
    }, 300);
  });

});