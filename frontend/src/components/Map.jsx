import React, { useState } from "react";
import { MapContainer, TileLayer, Marker, Popup } from "react-leaflet";
import { DataCity } from "./DataCity";

export const Map = () => {
  const [cities, setCities] = useState([
    { name: "Miami", location: [25.7743, -80.1937] },
    { name: "Orlando", location: [28.5383, -81.3792] },
    { name: "New York", location: [40.7143, -74.006] },
  ]);

  return (
    <div className="container d-flex justify-content-center">
      <div className="row">
        <div className="col my-5">
          <MapContainer
            center={[35.7721, -78.6386]}
            zoom={4}
            scrollWheelZoom={false}
            style={{ height: "500px", width: "1000px" }}
          >
            <TileLayer
              attribution='&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
              url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
            />
            {cities.map((city) => (
              <Marker key={city.name} position={city.location}>
                <Popup>
                  <DataCity cityName={city.name} />
                </Popup>
              </Marker>
            ))}
          </MapContainer>
        </div>
      </div>
    </div>
  );
};
