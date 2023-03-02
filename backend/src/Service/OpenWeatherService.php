<?php

namespace App\Service;

use GuzzleHttp\Client;

class OpenWeatherService
{
  private $client;
  private $apiKey;

  public function __construct()
  {
    $this->client = new Client([
      'base_uri' => 'https://api.openweathermap.org',
      'timeout' => 2.0,
    ]);
    $this->apiKey = $_ENV['OPEN_WEATHER_API_KEY'];
  }

  public function getWeatherData(string $cityName): array
  {
    $response = $this->client->request('GET', '/data/2.5/weather', [
      'query' => [
        'q' => $cityName,
        'appid' => $this->apiKey,
        'units' => 'metric',
      ],
    ]);

    $data = json_decode($response->getBody()->getContents(), true);
    return [
      'humidity' => $data['main']['humidity'],
      'lat' => $data['coord']['lat'],
      'lon' => $data['coord']['lon'],
    ];
  }
}