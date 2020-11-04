function inicializar() {
  var coordenadas = { lat: -23.5677666, lng: -46.6487763 };

  var mapa = new google.maps.Map(document.getElementById("mapa"), {
    zoom: 12.5,
    center: coordenadas,
  });

  var marker = new google.maps.Marker({
    position: coordenadas,
    map: mapa,
    title: "Meu marcador",
  });

  /*Essas variaveis altera o tamanho da imagem do marker*/
  var imageD = {
    url: "./images/markerDefesa.png",
    scaledSize: new google.maps.Size(50, 50),
  };

  var imageN = {
    url: "./images/markerNome.png",
    scaledSize: new google.maps.Size(50, 50),
  };

  var imageC = {
    url: "./images/markerCasaAcolhimento.png",
    scaledSize: new google.maps.Size(50, 50),
  };

  var imageJ = {
    url: "./images/markerJuridico.png",
    scaledSize: new google.maps.Size(50, 50),
  };

  var imageP = {
    url: "./images/markerP.png",
    scaledSize: new google.maps.Size(50, 50),
  };
  /*Fim das variaveis de imagem dos markers */

  /*Essa variavel cria novos marker com as coordenadas inseridas no array*/
  var locations = [
    ["Casa flor", -23.5242209, -46.6345409, imageC, "Casa flor"],
    ["Casa chama", -23.551196, -46.6308642, imageC, "Casa chama"],
    ["Arouchianos", -23.5409045, -46.645172, imageC, "Arouchianos"],
    ["Casa 1", -23.555882, -46.6415154, imageC, "Casa 1"],
  ];

  for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      title: locations[i][0],
      map: mapa,
      icon: locations[i][3],
    });

    /*
        var infowindow = new google.maps.InfoWindow({
          content: locations[i][4],
        });

        marker.addListener("click", () => {
          infowindow.open(mapa, marker);
        });
        */
  }
}
