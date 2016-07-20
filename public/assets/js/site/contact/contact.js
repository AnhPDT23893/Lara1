
var Contact = {
    init: function() {
        var mapCanvas = document.getElementById('map_canvas');
        var mapOptions = {
            center: new google.maps.LatLng(21.006052, 105.842987),
            zoom: 32,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(mapCanvas, mapOptions);
    }
};

$(document).ready(function() {
    Contact.init();
});
