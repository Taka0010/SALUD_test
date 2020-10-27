
//pagescroll
$(function(){
    // #で始まるアンカーをクリックした場合に処理
    $('a[href^=#]').click(function() {
        // スクロールの速度
        var speed = 400; // ミリ秒
        // アンカーの値取得
        var href= $(this).attr("href");
        // 移動先を取得
        var target = $(href == "#" || href == "" ? 'html' : href);
        // 移動先を数値で取得
        var position = target.offset().top;
        // スムーススクロール
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
    });
});


//go to pagetop
$(function(){
    $('#pageTop').hide();
    $(window).scroll(function () {
        if($(window).scrollTop() > 0) {
            $('#pageTop').slideDown(150);
        } else {
            $('#pageTop').slideUp(150);
        }
    });
});


//fadein
sal({
    once: true
});


//opening
$(window).on('load', function(){
    $('body').removeClass('fo');
});
$(function() {
    $('a:not([href^="#"]):not([target])').on('click', function(e){
        e.preventDefault();
        url = $(this).attr('href');
        if (url !== '') {
            $('body').addClass('fadeout');
            setTimeout(function(){
                window.location = url;
            }, 800);
        }
        return false;
    });
});
