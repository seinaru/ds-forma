/**
 * Created by UncleDead on 16.09.2017.
 */
function changeUps() {

    $("#coach-1").hover(
        function(){
            $("#coach-1-1").css('display', 'none');
            $("#coach-1-2").css('display', 'block');
        },
        function(){
            $("#coach-1-2").css('display', 'none');
            $("#coach-1-1").css('display', 'block');
        });

    $("#coach-2").hover(
        function(){
            $("#coach-2-1").css('display', 'none');
            $("#coach-2-2").css('display', 'block');
        },
        function(){
            $("#coach-2-2").css('display', 'none');
            $("#coach-2-1").css('display', 'block');
        });

    /* PARALAX SCROLLING */

}
function scrolling() {
    $(".cover-text").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);

    });

    $(".slide-action").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);


    });
}





/*window.onload = function() {
 var img = document.getElementById('coach-2-1');

 img.onmouseout = function () {
 this.src = '/img/coach-2.png';
 };

 img.onmouseover = function () {
 this.src = '/img/coach-2_1.png';
 };



 };*/
