/**
 * Created by NgocSon on 4/28/2015.
 */
/**
 *
 * @type {{init: Function, seller: Function}}
 */
var owl_carousel_category = {

    init: function () {
        this.seller();
        this.brands();
    },


    seller: function () {
        var owl = $('#owl-seller-category');

        owl.owlCarousel({
            items: 1
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
    owl_carousel_category.init();
});