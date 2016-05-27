
  function initMap() {
  var myLatLng = {lat: 42.768359, lng: -78.739719};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: myLatLng,
    scrollwheel: false,
    draggable: false,
    disableDefaultUI: true,
  });

  var contentString = 'Impact Journals';

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Impact Journals'
  });

function run() {
  return  infowindow.open(map, marker);
} run()

}

