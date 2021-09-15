// introduce map variable
var map;

function showLocation() {
    //get the map element
    let theMap = document.getElementById('mapBox');
    
	//conditionally display map
    theMap.style.display = "block";
    
	//get latitude and longitude from browser Api
    let loc = {
        lat: "",
        lon: ""
    }
	window.navigator.geolocation.getCurrentPosition((position) => {
        loc = {
            lat: position.coords.latitude,
            lon: position.coords.longitude
        }
        if (typeof map === "undefined") {
            map = new ol.Map({
                target: 'mapBox',
                layers: [
                    new ol.layer.Tile({
                        source: new ol.source.OSM()
                    })
                ],
                view: new ol.View({
                    center: ol.proj.fromLonLat([loc.lon, loc.lat]),
                    zoom: 12
                })
            });

			//add layer
			var layer = new ol.layer.Vector({
				source: new ol.source.Vector({
					features: [
						new ol.Feature({
							geometry: new ol.geom.Point(ol.proj.fromLonLat([loc.lon, loc.lat]))
						})
					]
				})
			});
			map.addLayer(layer)
		}
    })
}

function destroyLocation() {
	//cancel button
	let cancel = document.getElementById('cancel');
	cancel.addEventListener('click', () => {
		let theMap = document.getElementById('mapBox');
		theMap.style.display = 'none';
		map.instance = null;
		delete map.instance;
	})	
}