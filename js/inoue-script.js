

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

  // Params
var sliderSelector = '.swiper-container',
options = {
  init: false,
  loop: true,
  speed:1000,
  slidesPerView: 1.4, // or 'auto'
  // spaceBetween: 10,
  centeredSlides : true,
  effect: 'coverflow', // 'cube', 'fade', 'coverflow',
  coverflowEffect: {
    rotate: 50, // Slide rotate in degrees
    stretch: 0, // Stretch space between slides (in px)
    depth: 100, // Depth offset in px (slides translate in Z axis)
    modifier: 1, // Effect multipler
    slideShadows : true, // Enables slides shadows
  },
  grabCursor: true,
  parallax: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  // breakpoints: {
  //   1023: {
  //     slidesPerView: 1,
  //     spaceBetween: 0
  //   }
  // },
  // Events
  on: {
    imagesReady: function(){
      this.el.classList.remove('loading');
    }
  },
  // スライダーの自動再生
  // autoplay: true 　のみなら既定値での自動再生
  autoplay: {
    delay: 3000, // スライドが切り替わるまでの表示時間(ミリ秒)
    stopOnLast: false, // 最後のスライドまで表示されたら自動再生を中止するか
    disableOnInteraction: true // ユーザーのスワイプ操作を検出したら自動再生を中止するか
  },
};
var mySwiper = new Swiper(sliderSelector, options);

// Initialize slider
mySwiper.init();

});