/**
 * Created by NgocSon on 4/21/2015.
 */
var Footer = {

    init: function () {
        this.scrollTop();
    },
    scrollTop: function() {
        $(window)
            .scroll(function () {
                if ($(this).scrollTop() >100) {
                    $('.back-to-top').fadeIn();
                }else {
                    $('.back-to-top').fadeOut();
                }
            });
        $('.back-to-top').click(function () {
           $("html body").animate({
               scrollTop: 0
           }, 1000);
            return false;
        });
    }
}

$(document).ready(function (){

    Footer.init();
});