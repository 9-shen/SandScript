$('.toggle').on('click', function() {
  $('.container').stop().addClass('active');
});

$('.close').on('click', function() {
  $('.container').stop().removeClass('active');
});

if($(window).width() < 768) {

$(".toggle").click(function () {

$(this).css("minHeight","450px");

});

$(".card.alt .title .close").click(function () {

$(".toggle").css("minHeight","110px");

});



}
