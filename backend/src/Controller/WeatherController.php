<?php

namespace App\Controller;

use App\Entity\City;
use App\Service\OpenWeatherService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeatherController extends AbstractController
{
  /**
   * @Route("/weather/{cityName}", name="weather")
   */
  public function index(string $cityName, OpenWeatherService $openWeatherService, EntityManagerInterface $entityManager): Response
  {
    $data = $openWeatherService->getWeatherData($cityName);

    $city = new City();
    $city->setName($cityName);
    $city->setHumidity($data['humidity']);
    $city->setLat($data['lat']);
    $city->setLon($data['lon']);

    $entityManager->persist($city);
    $entityManager->flush();

    return $this->json([
      'city' => $cityName,
      'humidity' => $data['humidity'],
      'lat' => $data['lat'],
      'lon' => $data['lon']
    ]);
  }
}