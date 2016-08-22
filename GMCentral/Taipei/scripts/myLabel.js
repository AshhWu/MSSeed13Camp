function initMap() {
     var latLng = new google.maps.LatLng(25.027027027027028, 121.55736810913098);
      var mapCanvas = document.getElementById('map-canvas');
     var map = new google.maps.Map(mapCanvas, {
       zoom: 12,
       center: latLng,
       mapTypeId: google.maps.MapTypeId.ROADMAP
     });


     var image = "flag2.png";
     var marker = new MarkerWithLabel({
       position: new google.maps.LatLng(25.037027027027028, 121.57736810913098),
       draggable: true,
       raiseOnDrag: true,
       map: map,
       icon: image,
       labelContent: "Taiwan 1",
       labelAnchor: new google.maps.Point(22, 0),
       labelClass: "labels" // the CSS class for the label
     });

    var marker2 = new MarkerWithLabel({
       position: latLng,
       draggable: true,
       raiseOnDrag: true,
       map: map,
       icon: image,
       labelContent: "Taiwan 2",
       labelAnchor: new google.maps.Point(22, 0),
       labelClass: "labels" // the CSS class for the label
     });


     var iw = new google.maps.InfoWindow({
       content: "無人能敵"
     });
     google.maps.event.addListener(marker, "click", function (e) { iw.open(map, this); });
     
   }