/**
 * Created by Pank on 8/9/2015.
 */
var owl_carousel_detail= {

    init: function () {
        this.alsolike();
    },


    alsolike : function () {
        var owl = $('#owl-like');

        owl.owlCarousel({
            items: 4
        });

        $('.next-seller').click(function () {
            owl.trigger('owl.next');
        });
        $('.prev-seller').click(function () {
            owl.trigger('owl.prev');
        });
    }
}


$(document).ready(function(){
    owl_carousel_detail.init();
});