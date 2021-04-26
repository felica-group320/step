
$('#g-nav-btn').on('click',function(){
    $(this).toggleClass('slide');
    $('#g-nav').toggleClass('slide');
    $('h1').toggleClass('slide');
});

$('#g-nav a').on('click',function(){
    $('#g-nav-btn').removeClass('slide');
    $('#g-nav').removeClass('slide');
    $('h1').removeClass('slide');
});