const apiUrl = "http://127.0.0.1:8000/weather";

export const getDataCity = async (city) => {
  try {
    const response = await fetch(`${apiUrl}/${city}`);
    const data = await response.json();
    return {
      humidity: data.humidity,
      lat: data.lat,
      lon: data.lon,
    };
  } catch (e) {
    console.error(e);
  }
};
