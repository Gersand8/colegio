    const apiKey = 'pk.eyJ1IjoiYWxmcmVkMjAxNiIsImEiOiJja2RoMHkyd2wwdnZjMnJ0MTJwbnVmeng5In0.E4QbAFjiWLY8k3AFhDtErA';
    var mymap = L.map('mapid').setView([21.1375555,-98.4187406], 13);
    
   

    let iconMarker = L.icon({
        iconUrl: 'https://th.bing.com/th/id/R.598325c5071ab3a16aaf121897e26732?rik=01yxAKiMCCzckA&pid=ImgRaw',
        iconSize: [60, 60],
        iconAnchor: [30, 60]
    })
    
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        maxZoom: 30,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        
        accessToken: apiKey
    }).addTo(mymap);
    
    
    
    mymap.on('dblclick', e => {
      let latLng = mymap.mouseEventToLatLng(e.originalEvent);
    
      L.marker([latLng.lat, latLng.lng]).addTo(mymap)
    });
    

    /*const marker = L.marker([21.1375555,-98.4187406]).addTo(mymap);

    let template = `<h3 style="color:#000000;">Empire State Building</h3><div style="text-align:center;color:#000000;"><img width="150" height="150"src="img/imagen.jpg"/></div>`;
    marker.bindPopup(template);*/