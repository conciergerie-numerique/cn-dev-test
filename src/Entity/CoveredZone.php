<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class CoverZone
 * @package App\Entity
 * @ORM\Entity()
 * @ORM\Table(name="covered_zone")
 */
class CoveredZone
{
    /**
     * The unique auto incremented primary key.
     *
     * @var int|null
     *
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned": true})
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * Name of the covered zone
     * @var string
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * Radius of the covered zone
     * @var float
     * @ORM\Column(name="radius_km", type="float")
     */
    protected $radiusKm;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getRadiusKm(): float
    {
        return $this->radiusKm;
    }

    /**
     * @param float $radiusKm
     */
    public function setRadiusKm(float $radiusKm): void
    {
        $this->radiusKm = $radiusKm;
    }


}