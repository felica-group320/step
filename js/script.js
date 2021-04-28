$(function(){

  var rellax = new Rellax('.rellax', {
    speed: -1,
    center: false,
    wrapper: null,
    round: true,
    vertical: true,
    horizontal: false
  });

  

  $('#agree').on('click',function(){
    $('#agree-box').toggleClass('active');
  });

  $('#komada').on('click',function(){
    $('#modal-window-komada').addClass('mw-action');
  });
  $('#modal-window-komada').on('click',function(){
    $(this).removeClass('mw-action');
  });

  $('#inoue').on('click',function(){
    $('#modal-window-inoue').addClass('mw-action');
  });
  $('#modal-window-inoue').on('click',function(){
    $(this).removeClass('mw-action');
  });

  $('#umezawa').on('click',function(){
    $('#modal-window-umezawa').addClass('mw-action');
  });
  $('#modal-window-umezawa').on('click',function(){
    $(this).removeClass('mw-action');
  });

  $('#kurokawa').on('click',function(){
    $('#modal-window-kurokawa').addClass('mw-action');
  });
  $('#modal-window-kurokawa').on('click',function(){
    $(this).removeClass('mw-action');
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







$('#g-nav-btn').on('click',function(){
  $(this).toggleClass('slide');
  $('#g-nav').toggleClass('slide');
  $('h1').toggleClass('slide');
  $('#logo-wrapper').toggleClass('slide');
});

$('#g-nav a').on('click',function(){
  $('#g-nav-btn').removeClass('slide');
  $('#g-nav').removeClass('slide');
  $('h1').removeClass('slide');
  $('#logo-wrapper').toggleClass('slide');
});


//画面の上部からどの位スクロールしたかを取得
$(window).scroll(function() {
  var a = ($(this).scrollTop());
  if(a > 750){
      $('#logo-wrapper').addClass('on');
  }else{
      $('#logo-wrapper').removeClass('on');
  }
});

//スムーススクロール
$('#logo-wrapper').on('click',function(){
  $('html,body').animate({scrollTop:0},1000);
});

});