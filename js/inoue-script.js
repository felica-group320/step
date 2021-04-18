

$(function(){

    //スムーススクロール
    $('#to-top').on('click',function(){
      $('html,body').animate({scrollTop:0},1000);
    });
    $(window).scroll(function(){
      let sc = $(this).scrollTop();
      // スクロールの量を取得
      $('.sc').html(sc);
      if(sc > 1000){
        $('.scroll').fadeIn();
      }else{
        $('.scroll').fadeOut();
      }
    });

});