/**
 * Created by Pank on 5/7/2015.
 */
var AdProduct = {

    init: function()
    {
        $('select.select2-container').select2();
    }

};

$(document).ready(function() {
    AdProduct.init();
});
