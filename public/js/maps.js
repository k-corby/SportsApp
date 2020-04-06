console.log(coords);
console.log(zoom);
var markers = [];
var maps = [];
function initMap() {
    for (var i = 0, length = coords.length; i < length; i++) {
        var point = coords[i];
        var latlng = new google.maps.LatLng(point.lat, point.lng);
        maps[i] = new google.maps.Map(document.getElementById('map' + coords[i].id), {
            zoom: zoom,
            center: latlng
        });

        markers[i] = new google.maps.Marker({
            position: latlng,
            map: maps[i]
        });
    }
}