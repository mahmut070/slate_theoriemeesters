var map;
var geocoder;
var map2;
var geocoder2;
var map3;
var geocoder3;


function initialize() {

  geocoder = new google.maps.Geocoder();
  var mapCanvas = document.getElementById('map_canvas');
  if (mapCanvas != null) {
    var mapOptions = {
      center: new google.maps.LatLng(44.5403, 1.5463),
      zoom: 12,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(mapCanvas, mapOptions);

    var contentString = '<div id="content" style="color: black">' +
      '<div id="siteNotice">' +
      '</div>' +
      '<h4 style="font-size: 13px;" id="firstHeading" class="firstHeading">Theorie City Arnhem</h4>' +
      '<div id="bodyContent">' +
      '<p>Hazenkamp 36, 6836 BA Arnhem</p>' +
      '</div>' +
      '</div>';

    codeAddress('Hazenkamp 36, 6836 BA Arnhem', 'yellow', 'Theorie City Arnhem', contentString);


    var contentString2 = '<div id="content" style="color: black">' +
      '<div id="siteNotice">' +
      '</div>' +
      '<h4 style="font-size: 13px;" id="firstHeading" class="firstHeading">CBR Arnhem</h4>' +
      '<div id="bodyContent">' +
      '<p>Hazenkamp 10, 6836 BA Arnhem</p>' +
      '</div>' +
      '</div>';
    codeAddress('Hazenkamp 10, 6836 BA Arnhem', 'green', 'CBR', contentString2);

  }
}



function codeAddress(address, colour, title, overlay) {
  geocoder.geocode({
    'address': address
  }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);

      var infowindow = new google.maps.InfoWindow({
        content: overlay
      });


      var marker = new google.maps.Marker({
        map: map,
        position: results[0].geometry.location,
        icon: 'http://maps.google.com/mapfiles/ms/icons/' + colour + '-dot.png',
        title: title
      });

      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
      });


    }
  });
}
google.maps.event.addDomListener(window, 'load', initialize);



function initialize2() {
  geocoder2 = new google.maps.Geocoder();
  var mapCanvas = document.getElementById('map_canvas_twee');
  if (mapCanvas != null) {
    var mapOptions = {
      center: new google.maps.LatLng(44.5403, 1.5463),
      zoom: 12,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map2 = new google.maps.Map(mapCanvas, mapOptions);

    var contentString = '<div id="content" style="color: black">' +
      '<div id="siteNotice">' +
      '</div>' +
      '<h4 style="font-size: 13px;" id="firstHeading" class="firstHeading">Theorie City Utrecht</h4>' +
      '<div id="bodyContent">' +
      '<p>Californiëdreef 19, 3565 BJ Utrecht</p>' +
      '</div>' +
      '</div>';

    var contentString2 = '<div id="content" style="color: black">' +
      '<div id="siteNotice">' +
      '</div>' +
      '<h4 style="font-size: 13px;" id="firstHeading" class="firstHeading">CBR Utrecht</h4>' +
      '<div id="bodyContent">' +
      '<p>Mississippidreef 151a, 3565 CE Utrecht</p>' +
      '</div>' +
      '</div>';

    codeAddress2('Californiëdreef 19, 3565 BJ Utrecht', 'yellow', 'Theorie City Utrecht', contentString);
    codeAddress2('Mississippidreef 151a, 3565 CE Utrecht', 'green', 'CBR Utrecht', contentString2);
  }
}



function codeAddress2(address, colour, title, overlay) {
  geocoder2.geocode({
    'address': address
  }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map2.setCenter(results[0].geometry.location);
      var infowindow = new google.maps.InfoWindow({
        content: overlay
      });


      var marker = new google.maps.Marker({
        map: map2,
        position: results[0].geometry.location,
        icon: 'http://maps.google.com/mapfiles/ms/icons/' + colour + '-dot.png',
        title: title
      });

      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map2, marker);
      });


    }
  });
}


function initialize3() {
  geocoder3 = new google.maps.Geocoder();
  var mapCanvas = document.getElementById('map_canvas_drie');
  if (mapCanvas != null) {
    var mapOptions = {
      center: new google.maps.LatLng(44.5403, 1.5463),
      zoom: 12,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
    }
    map3 = new google.maps.Map(mapCanvas, mapOptions);

    var contentString = '<div id="content" style="color: black">' +
      '<div id="siteNotice">' +
      '</div>' +
      '<h4 style="font-size: 13px;" id="firstHeading" class="firstHeading">Theorie City Amsterdam</h4>' +
      '<div id="bodyContent">' +
      '<p>Moezelhavenweg 29, 1043 AM Amsterdam</p>' +
      '</div>' +
      '</div>';

    var contentString2 = '<div id="content" style="color: black">' +
      '<div id="siteNotice">' +
      '</div>' +
      '<h4 style="font-size: 13px;" id="firstHeading" class="firstHeading">CBR Amsterdam</h4>' +
      '<div id="bodyContent">' +
      '<p>Naritaweg 150, 1043 CA Amsterdam</p>' +
      '</div>' +
      '</div>';


    codeAddress3('Moezelhavenweg 29, 1043 AM Amsterdam', 'yellow', 'Theorie City Amsterdam', contentString);
    codeAddress3('Naritaweg 150, 1043 CA Amsterdam', 'green', 'CBR Amsterdam', contentString2);
  }
}



function codeAddress3(address, colour, title, overlay) {
  geocoder3.geocode({
    'address': address
  }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map3.setCenter(results[0].geometry.location);
      var infowindow = new google.maps.InfoWindow({
        content: overlay
      });


      var marker = new google.maps.Marker({
        map: map3,
        position: results[0].geometry.location,
        icon: 'http://maps.google.com/mapfiles/ms/icons/' + colour + '-dot.png',
        title: title
      });

      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map3, marker);
      });

    }
  });
}


google.maps.event.addDomListener(window, 'load', initialize);
google.maps.event.addDomListener(window, 'load', initialize2);
google.maps.event.addDomListener(window, 'load', initialize3);
