/*var mymap = L.map('mapid').setView([51.505, -0.09], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/mutebinuhu/cktiw5chp6kpk17p9mq354u12/wmts?access_token=pk.eyJ1IjoibXV0ZWJpbnVodSIsImEiOiJja2hhYTB1anAxZGtzMnZuem90NjVscjVqIn0.rlak9Z9PwVzdjvMXpZXOlQ', {
    attribution: 'Map data © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox Api</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibXV0ZWJpbnVodSIsImEiOiJja2hhYTB1anAxZGtzMnZuem90NjVscjVqIn0.rlak9Z9PwVzdjvMXpZXOlQ'
}).addTo(mymap);
*/
/*let showLocation = (value) =>{
	let data = {
		lon: "",
		lat: ""
	}
	let theMap = document.getElementById('map');

	if (theMap.style.display === "none") {
			fetch('https://api.geoapify.com/v1/ipinfo?apiKey=e2319db973684c139896cabd32eb6606',{
		method: 'GET'
	}).then((response)=>{
		return response.json()
	}).then((data)=>{
 		let map = document.getElementById('map');
		map.style.display = "block";
		map.src = `https://maps.geoapify.com/v1/staticmap?style=osm-bright-grey&width=600&height=400&center=lonlat:${data.location.longitude},${data.location.latitude}&zoom=14.1514&apiKey=e2319db973684c139896cabd32eb6606`
	})
	theMap.style.display = "block";
	}else{
	theMap.style.display = "none";	
	}

}
*/
//have used openlayer to display location 
function showLocation(){
  //get the map element
	let theMap = document.getElementById('mapBox');
  //conditionally display map
  theMap.style.display = "block";
  let loc = {
        lat: "",
        lon: ""
      }
      //get latitude and longitude from browser Api 
      window.navigator.geolocation.getCurrentPosition((position)=>{
        loc = {
          lat: position.coords.latitude,
          lon: position.coords.longitude
        }
      console.log(loc);
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

       var map = new ol.Map({
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
       map.addLayer(layer)
      })
}
//cancel button
let cancel = document.getElementById('cancel');
cancel.addEventListener('click', ()=>{
  let theMap = document.getElementById('mapBox');
  theMap.style.display = 'none';

})
