import React, { useState } from 'react';
import { GoogleMap, useJsApiLoader } from '@react-google-maps/api';


const containerStyle = {
    width: '100%',
    height: '600px',
    alignItems: 'center'
};



function FindLocation() {
    const [lat, setLat] = useState(null);
    const [lng, setLng] = useState(null);

    navigator.geolocation.getCurrentPosition((position) => {
        setLat(position.coords.latitude);
        setLng(position.coords.longitude);
    });

    const { isLoaded } = useJsApiLoader({
        id: 'google-map-script',
        
    })

    const center = {
        lat: lat,
        lng: lng
    };
    console.log(lat, lng);

    const [map, setMap] = React.useState(null)

    const onLoad = React.useCallback(function callback(map) {
        const bounds = new window.google.maps.LatLngBounds(center);
        map.fitBounds(bounds);
        setMap(map)
    }, [lat, lng, map, center])

    const onUnmount = React.useCallback(function callback(map) {
        setMap(null)
    }, [])

    return isLoaded, lat !=null, lng !=null ? (
        <GoogleMap
            mapContainerStyle={containerStyle}
            center={center}
            zoom={3}
            onLoad={onLoad}
            onUnmount={onUnmount}
        >
            { /* Child components, such as markers, info windows, etc. */}
            <></>
        </GoogleMap>
    ) : <></>
}

export default React.memo(FindLocation)