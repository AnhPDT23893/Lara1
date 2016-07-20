/**
 * Created by NgocSon on 4/16/2015.
 */

var Search = {
    init: function() {
        this.search();
    },
    search: function() {
        var box = $('.search');

        box.hover(function() {
            $('.search >input').show(200);

        });
        box.mouseleave(function() {
            $('.search >input').hide(200);
        });
    }
};

$(document).ready(function() {
    Search.init();

});