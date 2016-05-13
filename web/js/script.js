function initialisation() {
        var optionsCarte = {
          zoom: 11,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var maCarte = new google.maps.Map(document.getElementById("EmplacementDeMaCarte"), optionsCarte);
        var urlKML = "http://www.petit-fichier.fr/2016/05/12/lol/lol.kml";
        var coucheKML = new google.maps.KmlLayer({
          map: maCarte,
          url: urlKML
        });
      }
      google.maps.event.addDomListener( window, 'load', initialisation );