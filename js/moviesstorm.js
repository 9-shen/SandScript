$(document).ready(function () {




    $('.admin-welcome').click(function () {

    $('.admin-info').css("display",'block');
    $('.over-layer').css('display','block');

});
    $(".over-layer").click(function () {

    $('.admin-info').css("display",'none');
    $('.over-layer').css('display','none');

    });


    $('.admin-info').mouseleave(function () {

    $('.admin-info').css("display",'none');

});

$('.all-articles-load').click(function () {

$('.cpanel-left').load('all-users.php')

});





$('.settings').click(function (){

$('.cpanel-left').load('settings.php');

});
$('.support').click(function (){

$('.cpanel-left').load('support.php');

});
$('.add-new').click(function (){

$('.cpanel-left').load('add-new.php');

});

});
