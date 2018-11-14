$(document).ready(function () {
  var latlng = new google.maps.LatLng(49.605996, 6.127765);
/*  var image = '../wp-content/themes/development/images/1.png';
*/  if (document.getElementById('g-map')) {
    map = new google.maps.Map(document.getElementById('g-map'), {
      center: latlng,
      zoom: 17,
      styles: [
      {elementType: 'geometry', stylers: [{color: '#f6f6f6'}]},
      {
        featureType: 'administrative.locality',
        elementType: 'labels.text.fill',
        stylers: [{color: '#878787'}]
      },
      {
        featureType: 'poi',
        elementType: 'labels.text.fill',
        stylers: [{color: '#878787'}]
      },
      {
        featureType: 'poi.park',
        elementType: 'geometry',
        stylers: [{color: '#cbcbcb'}]
      },
      {
        featureType: 'poi.park',
        elementType: 'labels.text.fill',
        stylers: [{color: '#878787'}]
      },

      {
        featureType: "all",
        elementType: "labels.icon",
        stylers: [
        {
          saturation: "-100"
        }
        ]
      },
      {
        featureType: 'road',
        elementType: 'geometry',
        stylers: [{color: '#ffffff'}]
      },
      {
        featureType: 'road',
        elementType: 'geometry.stroke',
        stylers: [{color: '#e5e5e5'}]
      },
      {
        featureType: 'road',
        elementType: 'labels.text.fill',
        stylers: [{color: '#878787'}]
      },
      {
        featureType: 'road.highway',
        elementType: 'geometry',
        stylers: [{color: '#dcdcdc'}]
      },
      {
        featureType: 'road.highway',
        elementType: 'geometry.stroke',
        stylers: [{color: '#b4b4b4'}]
      },
      {
        featureType: 'road.highway',
        elementType: 'labels.text.fill',
        stylers: [{color: '#878787'}]
      },
      {
        featureType: 'transit',
        elementType: 'geometry',
        stylers: [{color: '#dcdcdc'}]
      },
      {
        featureType: 'transit.station',
        elementType: 'labels.text.fill',
        stylers: [{color: '#d59563'}]
      },
      {
        featureType: 'water',
        elementType: 'geometry',
        stylers: [{color: '#dcdcdc'}]
      },
      {
        featureType: 'water',
        elementType: 'labels.text.fill',
        stylers: [{color: '#878787'}]
      },
      {
        featureType: 'water',
        elementType: 'labels.text.stroke',
        stylers: [{color: '#878787'}]
      }
      ]
    });
    var image = '../wp-content/themes/luxlf/development/images/flag.png';
    var marker = new google.maps.Marker({
        position: latlng,
        animation: google.maps.Animation.DROP,
        map: map,
        icon: image
    });
  }
});