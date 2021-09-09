let showLocation = () =>{
	fetch('https://api.geoapify.com/v1/ipinfo?apiKey=e2319db973684c139896cabd32eb6606',{
		method: 'GET'
	}).then((response)=>{
		return response.json()
	}).then((data)=>{
 		let map = document.getElementById('map');
		map.style.display = "block";
		map.src = `https://maps.geoapify.com/v1/staticmap?style=osm-bright-grey&width=600&height=400&center=lonlat:${data.location.longitude},${data.location.latitude}&zoom=14.1514&apiKey=e2319db973684c139896cabd32eb6606`
	})

}
