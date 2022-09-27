function initialize() {
    iterator = 0;
    var e = new google.maps.LatLngBounds(),
        t = new google.maps.Geocoder(),
        i = {
            zoom: 7,
            mapTypeControl: !1,
            streetViewControlOptions: !1,
            streetViewControl: !1,
            center: new google.maps.LatLng(-250, 0),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [
                { featureType: "administrative", elementType: "geometry", stylers: [{ visibility: "simplified" }, { color: "#dfdfdf" }] },
                { featureType: "administrative", elementType: "labels", stylers: [{ color: "#cccccc" }, { visibility: "on" }] },
                { featureType: "administrative", elementType: "labels.text", stylers: [{ color: "#dddddd" }, { visibility: "on" }] },
                { featureType: "administrative", elementType: "labels.text.fill", stylers: [{ color: "#444444" }] },
                { featureType: "administrative", elementType: "labels.icon", stylers: [{ visibility: "on" }, { lightness: "42" }, { saturation: "-19" }, { gamma: "10.00" }, { color: "#ff0000" }] },
                { featureType: "landscape", elementType: "all", stylers: [{ color: "#ededed" }, { visibility: "on" }] },
                { featureType: "landscape", elementType: "labels", stylers: [{ visibility: "on" }, { color: "#dddddd" }] },
                { featureType: "landscape", elementType: "labels.icon", stylers: [{ visibility: "simplified" }, { color: "#ff0000" }, { gamma: "8.60" }, { lightness: "-100" }, { saturation: "-81" }] },
                { featureType: "landscape.man_made", elementType: "labels.text", stylers: [{ visibility: "simplified" }, { color: "#ff0000" }] },
                { featureType: "landscape.man_made", elementType: "labels.icon", stylers: [{ visibility: "simplified" }, { color: "#dfe0e5" }, { saturation: "47" }, { lightness: "100" }, { gamma: "7.60" }] },
                { featureType: "poi", elementType: "geometry", stylers: [{ visibility: "simplified" }, { color: "#eeeeee" }] },
                { featureType: "poi", elementType: "geometry.fill", stylers: [{ visibility: "simplified" }, { color: "#d0d0d0" }] },
                { featureType: "poi", elementType: "geometry.stroke", stylers: [{ visibility: "simplified" }, { color: "#c7c7c7" }] },
                { featureType: "poi", elementType: "labels", stylers: [{ visibility: "on" }] },
                { featureType: "poi", elementType: "labels.text", stylers: [{ visibility: "simplified" }, { color: "#919191" }] },
                { featureType: "poi", elementType: "labels.text.fill", stylers: [{ visibility: "simplified" }, { color: "#919191" }] },
                { featureType: "poi", elementType: "labels.icon", stylers: [{ visibility: "on" }, { weight: "8.25" }, { gamma: "0.37" }, { lightness: "50" }, { saturation: "-96" }] },
                { featureType: "road", elementType: "all", stylers: [{ saturation: -100 }, { lightness: 45 }] },
                { featureType: "road.highway", elementType: "all", stylers: [{ visibility: "simplified" }] },
                { featureType: "road.arterial", elementType: "labels.icon", stylers: [{ visibility: "off" }] },
                { featureType: "transit.station.bus", elementType: "labels.icon", stylers: [{ visibility: "on" }, { saturation: "-100" }] },
                { featureType: "transit.station.rail", elementType: "labels.text", stylers: [{ visibility: "simplified" }, { color: "#919191" }] },
                { featureType: "transit.station.rail", elementType: "labels.icon", stylers: [{ visibility: "simplified" }, { gamma: "1.00" }, { saturation: "-100" }, { lightness: "0" }] },
                { featureType: "water", elementType: "all", stylers: [{ color: "#46bcec" }, { visibility: "off" }] },
            ],
        };
    map = new google.maps.Map(jQuery("#map_outer")[0], i);
    for (var o = 0; o < locations.length; o++) {
        locations[o];
        t.geocode({ address: locations[o] }, function (t, i) {
            if (i == google.maps.GeocoderStatus.OK) {
                var o = new google.maps.LatLng(-37.81551200, 144.970485);
                addMarker(o), e.extend(o), map.fitBounds(e), 1 == locations.length && map.setZoom(17);
            }
        });
    }
}
function addMarker(e) {
    for (
        var t = { url: markerimg, scaledSize: new google.maps.Size(40, 40) },
            i = (new google.maps.Marker({ position: e, map: map, icon: t, draggable: !1, animation: google.maps.Animation.DROP, id: "location-" + iterator, title: "MDM Design" }), 0);
        i < locations.length;
        i++
    ) {
        locations[i];
    }
    iterator++;
}
jQuery(window).load(function () {
    initialize();
});

var map, iterator = 0,markers = [], markerimg;
(markerimg = sitepath + "/public/images/map-pin.png"),
"undefined" != typeof google &&
(google.maps.event.addDomListener(window, "load", initialize),
google.maps.event.addDomListener(window, "resize", function () {
    var e = map.getCenter();
    google.maps.event.trigger(map, "resize"), map.setCenter(e);
}));