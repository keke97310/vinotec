<?php

namespace App\DataFixtures;

use App\Entity\Type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\DBAL\Types\Types;
use Doctrine\Persistence\ObjectManager;

class TypeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $types = [ 
            "Vin blanc",
            "Vin rouge",
            "vin rosé", 
            "Vin mousseux",    
        ];
    
        foreach ($types as $name) {
            $type = new Type();
            $type->setName($name);
            $manager->persist($type);
        }

        $manager->flush();
    } 
}
