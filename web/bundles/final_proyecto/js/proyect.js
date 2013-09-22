$(document).ready(function() {

    geocoder = new google.maps.Geocoder();
    var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(47.6145, -122.3418),
        zoom: 13,
        mapTypeId: 'roadmap'
    });

    var markersArray = [];
    var indexToErase,idToErase;
    var xmlMarkersArray = [];
    var infoWindow = new google.maps.InfoWindow;
    var bounds = new google.maps.LatLngBounds();

    var infobox = new InfoBox({
        content: document.getElementById("infobox"),
        disableAutoPan: false,
        maxWidth: 150,
        pixelOffset: new google.maps.Size(-140, 0),
        zIndex: null,
        boxStyle: {
            background: "url('http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/examples/tipbox.gif') no-repeat",
            opacity: 0.85,
            width: "280px"
        },
        closeBoxMargin: "12px 4px 2px 2px",
        closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
        infoBoxClearance: new google.maps.Size(1, 1)
    });

    var customIcons = {
        restaurant: {
            icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png',
            shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
        },
        bar: {
            icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png',
            shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
        }
    };

    function clearOverlays() {
        for (var i = 0; i < markersArray.length; i++ ) {
            markersArray[i].setMap(null);
        }
        markersArray = [];
        xmlMarkersArray = [];
        bounds = new google.maps.LatLngBounds();

    }

    function bindInfoBox(marker, map, infoWindow) {

        google.maps.event.addListener(marker, 'click', function() {

            index = $.inArray(marker, markersArray);
            indexToErase = index;
            if (index != -1){

                idToErase = xmlMarkersArray[index].getAttribute("id");
                $( "#infobox-name").text(xmlMarkersArray[index].getAttribute("name"));
                $( "#infobox-address").text(xmlMarkersArray[index].getAttribute("address"));
                $( "#deleteMarkerId").val(xmlMarkersArray[index].getAttribute("id"));

            }
            else{
                idToErase = 0;
            }

            infobox.open(map, this);
            //map.panTo(marker.);

        });
    }

    $( "#buttonGeoCode" ).click(function () {
        var address = document.getElementById('addressSave').value;
        clearOverlays();
        closeInfobox();
        geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location
                });
                markersArray.push(marker);

            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    });


    function loadMarkersToMap(data) {

        clearOverlays();
        var xml = data;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {

            var point = new google.maps.LatLng(
                parseFloat(markers[i].getAttribute("lat")),
                parseFloat(markers[i].getAttribute("lng")));

            var marker = new google.maps.Marker({
                map: map,
                position: point,
                visible: true
            });

            bounds.extend(point);
            map.fitBounds(bounds);

            xmlMarkersArray[i] = markers[i];
            markersArray[i] = marker;

            bindInfoBox(marker, map, infoWindow);
        }


    }

    function closeInfobox(){
        if (infobox)
            infobox.close();

    }

    $( "#mapForm" ).submit(function(){
        //get the url for the form
        var url=$("#mapForm").attr("action");
        closeInfobox();
        $.post(url,{projectId:$("#projectId").val()}, function(data) {loadMarkersToMap(data)});

        return false;
    });

    $( "#saveMarker" ).submit(function(){
        //get the url for the form
        var url=$("#saveMarker").attr("action");
        closeInfobox();
        $.post(url,{projectId:$("#projectIdSave").val(),
                    name:$("#nameSave").val(),
                    address:$("#addressSave").val(),
                    type:$("#typeSave").val(),
                    lat:markersArray[0].position.lat(),
                    lng:markersArray[0].position.lng()},
            function(data) { loadMarkersToMap(data);});

        return false;
    });

    $( "#deleteMarkerForm" ).submit(function(){
        //get the url for the form

        var url=$("#deleteMarkerForm").attr("action");
        closeInfobox();
        $.post(url,{deleteMarkerId:idToErase},function(data){loadMarkersToMap(data);});

        return false;
    });


    $( "#deleteMarkerButton" ).click(function(){
        $("#deleteMarkerForm").submit();
    });

});