 function initMap() {
     var position = new google.maps.LatLng(51.5079, 0.0877);
     var position2 = new google.maps.LatLng(51.5033, 0.1195);
     var position3 = new google.maps.LatLng(51.1789, -1.8261);
     var position4 = new google.maps.LatLng(51.5313,  -0.1465);
     var myOptions = {
       zoom: 6,
       center: position,
       mapTypeId: google.maps.MapTypeId.ROADMAP
     };
     var map = new google.maps.Map(
        document.getElementById("map_canvas"),
        myOptions);
 
     var marker = new google.maps.Marker({
        position: position,
        map: map,
        title:"London Bridge"
     });

     var marker2 = new google.maps.Marker({
        position: position2,
        map: map,
        title:"London eye"
     }); 

     var marker3 = new google.maps.Marker({
        position: position3,
        map: map,
        title:"Stonehenge"
     }); 

     var marker4 = new google.maps.Marker({
        position: position4,
        map: map,
        title:"Regent's Park"
     }); 
 
     var contentString = 'Hello <strong>World</strong>!';
     var infowindow = new google.maps.InfoWindow({
        content: contentString
     });
 
     google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
     });
 
  }
