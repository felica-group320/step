
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

  var rellax = new Rellax('.rellax', {
    speed: -1,
    center: false,
    wrapper: null,
    round: true,
    vertical: true,
    horizontal: false
  });