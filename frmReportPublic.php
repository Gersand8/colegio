<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLEGIO DE ARQUITECTOS</title>
    <link href="img/icon.jpeg" rel="icon">
    <link href="img/iconoM.jpg" rel="apple-touch-icon">
    <link rel="stylesheet" href="css/Report.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
</head>
<body>
<?php include("include/headerPublic.php");?>
    <div class="container row ">
		<div class="container">
			<form class="form-style-9" action="process/insertProblem.php" method="POST" enctype="multipart/form-data">
				<div class="container blue">
					<h3 class="blue-grey-text ">Reportar Problema </h3> 
				</div>
				<ul>
					Coordenadas del lugar:
					<li>
						<input type="text" name="latitud" class="field-style field-split align-left" id="lat" placeholder="Latitud" />
						<input type="text" name="altitud" class="field-style field-split align-right" id="log" placeholder="Longitud"/>
                        <input type="button" value="Localizar" onclick="localiza()" class="btn btn-primary">
					</li>
					<li>
					Foto: <input type="file" name="imagen" class="field-style field-full align-none" placeholder="Subject" />
					</li>
					<li>
						Descripcion del problema:<textarea name="descripcion" class="field-style" placeholder="Descripcion del problema"></textarea>
					</li>
					<li>
						<input type="submit" value="Enviar Problema" />
					</li>
				</ul>
			</form>
		</div> 
		<div id="mapid" style="width: 950px; height: 560px;margin-top: 6%;padding: -15px;" class="container"></div>
		<script>
			const apiKey = 'pk.eyJ1IjoiYWxmcmVkMjAxNiIsImEiOiJja2RoMHkyd2wwdnZjMnJ0MTJwbnVmeng5In0.E4QbAFjiWLY8k3AFhDtErA';
			var mymap = L.map('mapid').setView([21.1375555,-98.4187406], 13);
			
			L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
				maxZoom: 30,
				attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
					'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
				id: 'mapbox/streets-v11',
				tileSize: 512,
   				zoomOffset: -1,
				accessToken: apiKey
			}).addTo(mymap);
			mymap.on('click', e => {
				let latLng = mymap.mouseEventToLatLng(e.originalEvent);
				L.marker([latLng.lat, latLng.lng]).addTo(mymap);
				 let a = latLng.lat;
				let b =  latLng.lng;
				alert( a + ","+ b );
			});
            function localiza(){
                var salida=document.getElementById("lat");
                var sa=document.getElementById("log") 
                if (!navigator.geolocation) {
                    salida.innerHTML="<p>Tu navegador no soporta las funciones de geolocalizacion</p>"
                    return
                }
                function respuesta(pos){
                    var lat=pos.coords.latitude
                    var lon=pos.coords.longitude
                    salida.innerHTML= lat;
                    sa.innerHTML= lon;
                }
                function err(){
                    salida.innerHTML="<p>no se pudieron adquirir las coordenadas</p>"
                }
                salida.innerHTML="<p>Cargando...</p>"
                navigator.geolocation.getCurrentPosition(respuesta,err)
            }
		</script>
	</div>   
</body>
</html>