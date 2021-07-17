<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLEGIO DE ARQUITECTOS</title>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
</head>
    <?php include("include/headeradmin.php")?>
    <style type="text/css">
.form-style-9{
	max-width: 450px;
	background: #FF8000;
	padding: 40px;
	margin: 25px auto;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 10px;
	border: 6px solid #305A72;
}
.form-style-9 ul{
	padding:0;
	margin:0;
	list-style:none;
}
.form-style-9 ul li{
	display: block;
	margin-bottom: 10px;
	min-height: 35px;
}
.form-style-9 ul li  .field-style{
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	padding: 8px;
	outline: none;
	border: 1px solid #B0CFE0;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;

}.form-style-9 ul li  .field-style:focus{
	box-shadow: 0 0 5px #B0CFE0;
	border:1px solid #B0CFE0;
}
.form-style-9 ul li .field-split{
	width: 49%;
}
.form-style-9 ul li .field-full{
	width: 100%;
}
.form-style-9 ul li input.align-left{
	float:left;
}
.form-style-9 ul li input.align-right{
	float:right;
}
.form-style-9 ul li textarea{
	width: 100%;
	height: 100px;
}
.form-style-9 ul li input[type="button"], 
.form-style-9 ul li input[type="submit"] {
	-moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
	-webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
	box-shadow: inset 0px 1px 0px 0px #3985B1;
	background-color: #216288;
	border: 1px solid #17445E;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	padding: 8px 18px;
	text-decoration: none;
	font: 12px Arial, Helvetica, sans-serif;
}
.form-style-9 ul li input[type="button"]:hover, 
.form-style-9 ul li input[type="submit"]:hover {
	background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
	background-color: #28739E;
}
</style>
<body>
	<div class="container row ">
		
		<div class="container">
			<form class="form-style-9" action="process/insertProblem.php" method="POST" enctype="multipart/form-data">
				<div class="container blue">
					<h2 class="blue-grey-text ">Reportar Problema </h2> 
					
				</div>
				<ul>
					Coordenadas del lugar:
					<li>
						<input type="text" name="latitud" class="field-style field-split align-left" value="" placeholder="Latitud" />
						<input type="text" name="altitud" class="field-style field-split align-right" value="" placeholder="Altitud"/>
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
			
			
			
		</script>
	</div> 
</body>
</html>