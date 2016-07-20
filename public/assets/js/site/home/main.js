/**
 * owl carousel
 * @type {{init: Function, latest: Function, seller: Function, featured: Function, brands: Function}}
 */

var owl_carousel = {

    init: function () {
        this.latest();
        this.seller();
        this.blog();

    },
    latest: function () {
        var owl = $('#owl-product');

        owl.owlCarousel({
            items: 4
        });

        $('.next-product').click(function () {
            owl.trigger('owl.next');
        });
        $('.prev-product').click(function () {
            owl.trigger('owl.prev');
        });
    },
    seller: function(){
        var owl = $('#owl-seller');

        owl.owlCarousel({
            items: 4
        });

        $('.next-seller').click(function () {
            owl.trigger('owl.next');
        });
        $('.prev-seller').click(function () {
            owl.trigger('owl.prev');
        });
    },
    blog: function(){
        var owl = $('#owl-blog');

        owl.owlCarousel({
            items: 2,
            itemsDesktop : [1024,1], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,1], // betweem 900px and 601px
            itemsTablet: [600,1], //2 items between 600 and 0
            itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
        });

        $('.next-blog').click(function () {
            owl.trigger('owl.next');
        });
        $('.prev-blog').click(function () {
            owl.trigger('owl.prev');
        });
    }
}
/**
 * Special time down
 * @type {{init: Function, dailyDeal: Function}}
 */

$(document).ready(function(){
    owl_carousel.init();
});
