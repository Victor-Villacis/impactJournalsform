//alert("hello")

// var map;
//       function initMap() {
//         map = new google.maps.Map(document.getElementById('map'), {
//           center: {lat: 42.768359, lng: },
//           zoom: 15
//         });
//       }


function initMap() {
  var myLatLng = {lat: 42.768359, lng: -78.739719};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Impact Journals'
  });
}