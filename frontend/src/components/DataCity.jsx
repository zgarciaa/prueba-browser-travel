import React, { useState, useEffect } from "react";
import { getDataCity } from "../utils/city";

export const DataCity = ({ cityName }) => {
  const [humidity, setHumidity] = useState(null);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const setDataCityName = async () => {
      setLoading(true);
      const dataCityName = await getDataCity(cityName);
      setHumidity(dataCityName.humidity);
      setLoading(false);
    };
    setDataCityName();
  }, [cityName]);

  return (
    <>
      <div>{cityName}</div>
      {loading ? <div>Loading...</div> : <div>Humidity: {humidity}%</div>}
    </>
  );
};
