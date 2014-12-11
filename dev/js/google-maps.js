var map;
var geocoder;
var map2;
var geocoder2;
var map3;
var geocoder3;


function initialize() {
  
  geocoder = new google.maps.Geocoder();
  var mapCanvas = document.getElementById('map_canvas');
  if(mapCanvas != null) {
    var mapOptions = {
    center: new google.maps.LatLng(44.5403, 1.5463),
    zoom: 12,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(mapCanvas, mapOptions);
    codeAddress('Hazelkamp 36, 6836 BA Arnhem');
    codeAddress('Hazenkamp 10, 6836 BA Arnhem');
  }

}



function codeAddress(address) {
  geocoder.geocode({
    'address': address
  }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
        map: map,
        position: results[0].geometry.location,
        icon: 'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'
      });
    }
  });
}
google.maps.event.addDomListener(window, 'load', initialize);



function initialize2() {
  geocoder2 = new google.maps.Geocoder();
  var mapCanvas = document.getElementById('map_canvas_twee');
  if(mapCanvas != null) {
    var mapOptions = {
    center: new google.maps.LatLng(44.5403, 1.5463),
    zoom: 12,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map2 = new google.maps.Map(mapCanvas, mapOptions);
    codeAddress2('Californiëdreef 19, 3565 BJ Utrecht');
    codeAddress2('Mississippidreef 151a, 3565 CE Utrecht');
  }
}



function codeAddress2(address) {
  geocoder2.geocode({
    'address': address
  }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map2.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
        map: map2,
        position: results[0].geometry.location,
        icon: 'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'
      });
    }
  });
}


function initialize3() {
  geocoder3 = new google.maps.Geocoder();
  var mapCanvas = document.getElementById('map_canvas_drie');
  if(mapCanvas != null){
    var mapOptions = {
    center: new google.maps.LatLng(44.5403, 1.5463),
    zoom: 12,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    }
    map3 = new google.maps.Map(mapCanvas, mapOptions);
    codeAddress3('Moezelhavenweg 29, 1043 AM Amsterdam');
    codeAddress3('Naritaweg 150, 1043 CA Amsterdam');
  }
}



function codeAddress3(address) {
  geocoder3.geocode({
    'address': address
  }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map3.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
        map: map3,
        position: results[0].geometry.location,
        icon: 'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'
      });
    }
  });
}


google.maps.event.addDomListener(window, 'load', initialize);
google.maps.event.addDomListener(window, 'load', initialize2);
google.maps.event.addDomListener(window, 'load', initialize3);
