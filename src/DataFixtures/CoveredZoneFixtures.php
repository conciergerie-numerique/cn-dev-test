<?php


namespace App\DataFixtures;


use App\Entity\CoveredZone;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Psr\Log\LoggerInterface;

class CoveredZoneFixtures extends Fixture
{

    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function load(ObjectManager $manager)
    {
        $data = [
            [
                'name' => "Lille",
                'radius_km' => 30.0,
            ],
            [
                'name' => "Lyon",
                'radius_km' => 40.0
            ],
            [
                'name' => "Toulouse",
                'radius_km' => 30.0
            ],
            [
                'name' => "Strasbourg",
                'radius_km' => 30.0
            ],
            [
                'name' => "Rouen",
                'radius_km' => 30.0
            ],
            [
                'name' => "Évreux",
                'radius_km' => 30.0
            ],
            [
                'name' => "Rennes",
                'radius_km' => 30.0
            ],
            [
                'name' => "Nantes",
                'radius_km' => 30.0
            ],
            [
                'name' => "Bordeaux",
                'radius_km' => 30.0
            ],
            [
                'name' => "Montpellier",
                'radius_km' => 30.0
            ],
            [
                'name' => "Nice",
                'radius_km' => 30.0
            ],
            [
                'name' => "Toulon",
                'radius_km' => 30.0
            ],
            [
                'name' => "Paris",
                'radius_km' => 80.0
            ],
        ];

        foreach ($data as $datum) {
            $this->logger->debug(
                "Creating fixture for the covered zone " . $datum['name'] . " of " . $datum['radius_km'] . " km"
            );

            $coveredZone = new CoveredZone();
            $coveredZone->setName($datum['name']);
            $coveredZone->setRadiusKm($datum['radius_km']);
            $manager->persist($coveredZone);
        }

        $manager->flush();
    }

}