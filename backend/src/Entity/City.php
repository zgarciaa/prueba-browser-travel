<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cities")
 */
class City
{
  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(type="integer")
   */
  private $id;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $name;

  /**
   * @ORM\Column(type="float", nullable=true)
   */
  private $humidity;

  /**
   * @ORM\Column(type="float", nullable=true)
   */
  private $lat;

  /**
   * @ORM\Column(type="float", nullable=true)
   */
  private $lon;

  public function getId(): ?int
  {
    return $this->id;
  }

  public function getName(): ?string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  public function getHumidity(): ?float
  {
    return $this->humidity;
  }

  public function setHumidity(?float $humidity): self
  {
    $this->humidity = $humidity;

    return $this;
  }

  public function getLat(): ?float
  {
    return $this->lat;
  }

  public function setLat(?float $lat): self
  {
    $this->lat = $lat;

    return $this;
  }

  public function getLon(): ?float
  {
    return $this->lon;
  }

  public function setLon(?float $lon): self
  {
    $this->lon = $lon;

    return $this;
  }
}