

$(function(){

  $('#agree').on('click',function(){
    $('#agree-box').toggleClass('active');
  });

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

  
  //画面の上部からどのくらいスクロールしたかを取得
  $(window).scroll(function() {
    var bh = $('body').outerHeight();
    var fh = $('footer').outerHeight();
    var wh = $(window).height();
    var ih = $('#scroll').outerWidth();
    var h = bh -fh -wh +ih;
    var a = ($(this).scrollTop());
    console.log(h);
    if(a > h){
      $('#to-top,#bar1').addClass('color');
    }else{
      $('#to-top,#bar1').removeClass('color');
    }
  });

});