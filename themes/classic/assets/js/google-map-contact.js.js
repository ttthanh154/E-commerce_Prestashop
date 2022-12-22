function myMap() {
  var myLatLng = { lat: 10.79705810546875, lng: 106.7034912109375 };
  var mapOptions = {
    zoom: 15,
    center: myLatLng,
  };

  var map = new google.maps.Map(
    document.getElementById("googleMap"),
    mapOptions
  );

  var contentString =
    '<div id="content">' +
    "<h3>Subachao</h3>" +
    "<p>" +
    "141 Điện Biên Phủ, phường 15, quận Bình Thạnh, TP HCM<br>" +
    "tel. 0123456789<br>" +
    "</p>" +
    "</div>";

  var infowindow = new google.maps.InfoWindow({
    content: contentString,
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    //        icon: '/img/marker.png',
    //        title: 'Hello World!'
  });

  marker.addListener("click", function () {
    infowindow.open(map, marker);
  });

  marker.setMap(map);
}
