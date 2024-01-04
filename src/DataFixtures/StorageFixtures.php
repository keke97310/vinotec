<?php

namespace App\DataFixtures;

use App\Entity\Storage;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StorageFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $storage = new Storage();
         $storage->setName('Etage 1');
         $manager->persist($storage);

         $storage = new Storage();
         $storage->setName('Etage 2');
         $manager->persist($storage);

         $storage = new Storage();
         $storage->setName('Etage 3');
         $manager->persist($storage);

        $manager->flush();
    }
}
