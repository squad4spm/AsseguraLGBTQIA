function inicializar() {
    var coordenadas = {lat: -23.5677666, lng: -46.6487763};

    var mapa = new google.maps.Map(document.getElementById('mapa'), {
      zoom: 15,
      center: coordenadas 
    });

    var marker = new google.maps.Marker({
        position: coordenadas,
        map: mapa,
        title: 'Meu marcador'
      });
}