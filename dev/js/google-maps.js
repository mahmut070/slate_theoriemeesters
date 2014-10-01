var map;
var geocoder;
var map2;
var geocoder2;
var map3;
var geocoder3;


function initialize() {
  geocoder = new google.maps.Geocoder();
  var mapCanvas = document.getElementById('map_canvas');
  var mapOptions = {
    center: new google.maps.LatLng(44.5403, 1.5463),
    zoom: 12,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(mapCanvas, mapOptions);
  codeAddress('Hazelkamp 36, 6836 BA Arnhem');
}



function codeAddress(address) {
  geocoder.geocode({
    'address': address
  }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
        map: map,
        position: results[0].geometry.location
      });
    }
  });
}
google.maps.event.addDomListener(window, 'load', initialize);



function initialize2() {
  geocoder2 = new google.maps.Geocoder();
  var mapCanvas = document.getElementById('map_canvas_twee');
  var mapOptions = {
    center: new google.maps.LatLng(44.5403, 1.5463),
    zoom: 12,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map2 = new google.maps.Map(mapCanvas, mapOptions);
  codeAddress2('Californiëdreef 19, 3565 BJ Utrecht');
}



function codeAddress2(address) {
  geocoder2.geocode({
    'address': address
  }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map2.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
        map: map2,
        position: results[0].geometry.location
      });
    }
  });
}


function initialize3() {
  geocoder3 = new google.maps.Geocoder();
  var mapCanvas = document.getElementById('map_canvas_drie');
  var mapOptions = {
    center: new google.maps.LatLng(44.5403, 1.5463),
    zoom: 12,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map3 = new google.maps.Map(mapCanvas, mapOptions);
  codeAddress3('Moezelhavenweg 29, 1043 AM Amsterdam');
}



function codeAddress3(address) {
  geocoder3.geocode({
    'address': address
  }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map3.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
        map: map3,
        position: results[0].geometry.location
      });
    }
  });
}


google.maps.event.addDomListener(window, 'load', initialize);
google.maps.event.addDomListener(window, 'load', initialize2);
google.maps.event.addDomListener(window, 'load', initialize3);
