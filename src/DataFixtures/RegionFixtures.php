<?php

namespace App\DataFixtures;

use App\Entity\Region;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RegionFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $regions = ["Alsace ", 
        "Bordeaux ", 
        "Bourgogne ", 
        "Bugey ", 
        "Champagne ", 
        "Corse ", 
        "Jura ", 
        "Languedoc Roussillon", 
        "Lorraine"
    ];
    
    foreach ($regions as $name){
         $region = new Region();
         $region->setName($name);
         $manager->persist($region);
    }
       

        $manager->flush();
    }
}
