function inicializar() {
    var coordenadas = {lat: -23.5677666, lng: -46.6487763};

    var mapa = new google.maps.Map(document.getElementById('mapa'), {
      zoom: 14,
      center: coordenadas 
    });

    var marker = new google.maps.Marker({
        position: coordenadas,
        map: mapa,
        title: 'Meu marcador'
      });

      /*Essa variavel cria novos marker com as coordenadas inseridas no array*/
      var locations = [
        ['Casa de acolhimento teste', -23.556402, -46.661947],
      ];

      var markerImage = 'marker.png';
       
      for (i = 0; i < locations.length; i++) {  
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(locations[i][1], locations[i][2]),
          title: locations[i][0],
          map: mapa,
        });
      }
}