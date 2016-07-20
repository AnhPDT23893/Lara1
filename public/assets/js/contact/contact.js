/**
 * Created by Mageto on 10/7/2014.
 */

var Contact = {
    init: function() {
        var mapCanvas = document.getElementById('map_canvas');
        var mapOptions = {
            center: new google.maps.LatLng(20.963844, 105.694238),
            zoom: 32,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(mapCanvas, mapOptions);
    }
};

$(document).ready(function() {
    Contact.init();
});
